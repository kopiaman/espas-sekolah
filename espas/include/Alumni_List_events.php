<?php 
class eventclass_Alumni_List  extends eventsBase
{ 
	function eventclass_Alumni_List()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline,&$pageObject)
{

		$ic = $values['ICNO'];

//**********  Insert a record into another table  ************
global $conn;
$strSQLInsert = "insert into user (icNo, password, role) values ('$ic', '$ic', 'Student')";
db_exec($strSQLInsert,$conn);


$message = "Record Added";
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;


;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		

$studentID =  $keys['StudentID'];
$programID = $values['DipID'];


//check all course in sem 1 and in same program
global $conn;
$strSQLExists = "select CourseID from program_course where ProgramID='$programID' and sem=1";
$rsExists = db_query($strSQLExists,$conn);

//insert courseID program to student field
while ($data=db_fetch_array($rsExists)){

$course = $data['CourseID'];

$strSQLInsert = "insert into student_course (StudentID, CourseID, Sem) values ('$studentID', '$course', '1')";
db_exec($strSQLInsert,$conn);

}

$branchID = $values['BranchID'];
$intake = $values['Intake'];

//check program billing id from same program, year intake and same branch
$strSQLExists2 = "select id from program_billing where programID='$programID' and  intake='$intake' and  branchID='$branchID'";
$rsExists2 = db_query($strSQLExists2,$conn);

//insert all 
while ($data2=db_fetch_array($rsExists2)){

$programBillingID = $data2['id'];

//check item id from program billing item where same program billing ID
$strSQLExists3 = "select id from program_billing_item where program_billing_ID='$programBillingID'";
$rsExists3 = db_query($strSQLExists3,$conn);

//insert all billing item to program billing
while ($data3=db_fetch_array($rsExists3)){

$programBillingItemID = $data3['id'];
$dateNow = now();

//insert all billling item to student program bill records
$strSQLInsert2 = "insert into student_program_bill (program_bill_item_id, studentID, status, date) values ('$programBillingItemID', '$studentID', 'Pending', '$dateNow')";
db_exec($strSQLInsert2,$conn);

}
}

//update matric no 
// VC|PV|TF- 13(year intake)01(Intake month)01(Program code)09(Batch)0200(Student number)MY (Country code)
$intake_category=$values['Intake_Category'];
$intake_year=substr($values['DateJoin'],2,2);	
$intake_month=substr($values['DateJoin'],5,2);
$program_code=$values['DipID'];
$batch_code=$values['BatchID'];
$studentno=$values['StudentID'];
$country=$values['Nationality'];

$formula_matric="$intake_category$intake_year$intake_month$program_code$batch_code$studentno$country";

$give_matric = "UPDATE student_info set MatricNo='$formula_matric' where StudentID='$studentID' ";
db_exec($give_matric,$conn);

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
