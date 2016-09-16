<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!isLogged())
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "student_info";
$nonAdminTablesArr[] = "course";
$nonAdminTablesArr[] = "staff_info";
$nonAdminTablesArr[] = "setting";
$nonAdminTablesArr[] = "group";
$nonAdminTablesArr[] = "campus_setting";
$nonAdminTablesArr[] = "user";
$nonAdminTablesArr[] = "bill_record";
$nonAdminTablesArr[] = "bill_item";
$nonAdminTablesArr[] = "job";
$nonAdminTablesArr[] = "Alumni List";
$nonAdminTablesArr[] = "set_setting_category";
$nonAdminTablesArr[] = "Report-Billing Pending";
$nonAdminTablesArr[] = "Report-Billing Paid";
$nonAdminTablesArr[] = "student_payment";
$nonAdminTablesArr[] = "student_billing";
$nonAdminTablesArr[] = "Report_Family";
$nonAdminTablesArr[] = "Report_Discipline";
$nonAdminTablesArr[] = "Report_Extracurricular";
$nonAdminTablesArr[] = "Report_Staff_Kin";
$nonAdminTablesArr[] = "Chart_no_student";
$nonAdminTablesArr[] = "Report_Exam_Slip_Indiv";
$nonAdminTablesArr[] = "Report_Exam_Result_Indiv";
$nonAdminTablesArr[] = "all";
$nonAdminTablesArr[] = "setting_no_room";
$nonAdminTablesArr[] = "create_pbsra";
$nonAdminTablesArr[] = "staff_move";
$nonAdminTablesArr[] = "student_attendance";
$nonAdminTablesArr[] = "attend_creator";
$nonAdminTablesArr[] = "student_course";
$nonAdminTablesArr[] = "aset";
$nonAdminTablesArr[] = "staff_valuation";
$nonAdminTablesArr[] = "staff_qualification";
$nonAdminTablesArr[] = "staff_absent_late";
$nonAdminTablesArr[] = "staff_late";
$nonAdminTablesArr[] = "attend_creator_staff";
$nonAdminTablesArr[] = "Student_Darjah";
$nonAdminTablesArr[] = "exam_rank_kelas";
$nonAdminTablesArr[] = "w_news";
$nonAdminTablesArr[] = "enroll";
$nonAdminTablesArr[] = "enroll_apply";
$nonAdminTablesArr[] = "w_gallery";
$nonAdminTablesArr[] = "w_gallery_sub";
$nonAdminTablesArr[] = "exam_rank_darjah";
$nonAdminTablesArr[] = "exam_grade_result";
$nonAdminTablesArr[] = "w_slider";
$nonAdminTablesArr[] = "w_about";
$nonAdminTablesArr[] = "student_upsra";
$nonAdminTablesArr[] = "exam_slip_darjah";
$nonAdminTablesArr[] = "billing_collection_permurid";
$nonAdminTablesArr[] = "w_pic";

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));
	
switch(postvalue("a"))
{
	case "add":
		$sql ="insert into `user_uggroups` (`Label`) values (".db_prepare_string(postvalue("name")).")";
		db_exec($sql,$conn);
		$sql = "select max(`GroupID`) from `user_uggroups`";
		$rs = db_query($sql,$conn);
		$data = db_fetch_numarray($rs);
		echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => true, 'id' => $data[0])))."</textarea>";
		break;
	case "del":
		$sql ="delete from `user_uggroups` where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		$sql ="delete from `user_ugrights` where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		$sql ="delete from `user_ugmembers` where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => true)))."</textarea>";
		break;
	case "rename":
		$sql ="update `user_uggroups` set `Label`=".db_prepare_string(postvalue("name"))." where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => true)))."</textarea>";
		break;
	case 'saveRights':
		$error = '';
		if(postvalue('state'))
		{
			$allRights = array();
			$rs = db_query("select `GroupID`, `TableName`, `AccessMask` from `user_ugrights`", $conn);
			// don't use db_fetch_array! because of ORACLE and PostgreSQL
			while($data = db_fetch_numarray($rs))
			{
				$allRights[] = $data;
			}
			
			$delGroupId = 0;
			$state = my_json_decode(postvalue('state'));
			// delete all extra permissions from db
			foreach($allRights as $i => $data)
			{
				$groupIDInt = (int) $data[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if(!array_key_exists($groupIDInt, $state))
					db_exec("delete from `user_ugrights` where `GroupID`=".$groupIDInt, $conn);
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
					db_exec("delete from `user_ugrights` where `GroupID`=".$groupIDInt." and `TableName`=".db_prepare_string(html_special_decode($data[1])), $conn);
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if(!array_key_exists($table, $realTables))
						continue;
					
					$ins = true;
					foreach($allRights as $i => $data)
					{	
						if($data[0] == $groupId && $data[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
								db_exec("update `user_ugrights` set `AccessMask`=".db_prepare_string($mask)." where `GroupID`=".$groupId." and `TableName`=".db_prepare_string(html_special_decode($realTables[$table])), $conn);
						}
					}
					if($ins)
					{
						db_exec(mysprintf("insert into `user_ugrights` (`TableName`, `GroupID`, `AccessMask`) values (%s, %d, %s)", 
							array(db_prepare_string(html_special_decode($realTables[$table])), $groupId, db_prepare_string($mask))), $conn);
					}
					
					if(db_error($conn) != '')
						$error .= ($error == '' ? '' : ' ').db_error($conn);
				}
			}
		}
		getJSONResult($error);
		break;
	case 'saveMembership':
		$error = '';
		$groupId = postvalue('group');
		$realUsers = GetRealValues();
		
		for($i=0;$i<count($realUsers);$i++)
		{
			if($realUsers[$i] != $_SESSION["UserID"])
				$sql = "delete from `user_ugmembers` where `UserName`=%s";
			else
				$sql = "delete from `user_ugmembers` where `UserName`=%s and `GroupID`<>-1";
			
			db_exec(mysprintf($sql, array(db_prepare_string(html_special_decode($realUsers[$i])))), $conn);	
		}
		
		if(postvalue('state'))
		{
			$state = my_json_decode(postvalue('state'));
			foreach ($state as $group => $users)
				foreach ($users as $user)
				{
					if(!array_key_exists($user, $realUsers))
						continue;
					
					db_exec(mysprintf("insert into `user_ugmembers` (`UserName`, `GroupID`) values (%s, %d)"
						, array(db_prepare_string(html_special_decode($realUsers[$user])), $group)), $conn);
					
					if(db_error($conn) != '')
						$error .= db_error($conn);
				}
		}
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo "<textarea>".htmlspecialchars(my_json_encode($result))."</textarea>";
}