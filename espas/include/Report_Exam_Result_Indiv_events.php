<?php 
class eventclass_Report_Exam_Result_Indiv  extends eventsBase
{ 
	function eventclass_Report_Exam_Result_Indiv()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeDelete"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		global $conn;

$studentID =  $keys['StudentID'];
$programID = $values['DipID'];
$batchID=$values['BatchID'];

/******ADD MODULE AUTOMATICALLY TO STUDENT COURSE ********************/
//check all course in sem 1 and in same program
$strSQLExists = "select CourseID,Semester,ProgramID from program_course where ProgramID='$programID'";
$rsExists = db_query($strSQLExists,$conn);

//insert courseID program to student field
while ($data=db_fetch_array($rsExists)){
$course = $data['CourseID'];
$sem=$data['Semester'];
$strSQLInsert = "insert into student_course (StudentID, CourseID, Semester,ProgramID) values ('$studentID', '$course', '$sem','$programID')";
db_exec($strSQLInsert,$conn);
}




/******ADD BILLING AUTO TO STUDENT ************/
$branchID = $values['BranchID'];
$intake = $values['Intake'];

//check program billing id from same program, year intake and same branch
$strSQLExists2 = "select id from program_billing where programID='$programID' and  intake='$intake' and  branchID='$branchID'";
$rsExists2 = db_query($strSQLExists2,$conn);
//insert all 
while ($data2=db_fetch_array($rsExists2)){
$programBillingID = $data2['id'];
//check item id from program billing item where same program billing ID
$strSQLExists3 = "select * from program_billing_item where program_billing_ID='$programBillingID'";
$rsExists3 = db_query($strSQLExists3,$conn);

//insert all billing item to program billing
while ($data3=db_fetch_array($rsExists3)){
$programBillingItemID = $data3['id'];
$amountbill=$data3['amount'];
$item=$data3['item'];
$dateNow = now();

//insert all billling item to student program bill records
$strSQLInsert2 = "insert into student_billing (program_billing_item_ID, studentID, status, date,amount,amount_balance,item) values ('$programBillingItemID', '$studentID', 'Pending','$dateNow','$amountbill','$amountbill','$item')";
db_exec($strSQLInsert2,$conn);

}
}

/*******ADD MATRIC NO**************/

//check program code from program ID
$sql_code = "select Code from program where ID='$programID'";
$q_code = db_query($sql_code,$conn);
$row_code=db_fetch_array($q_code);


//matric no generate
$intake_category=$values['Intake_Category'];
$intake_year=substr($values['DateJoin'],2,2);	
$intake_month=substr($values['DateJoin'],5,2);
$program_code=$row_code['Code'];
$batch_code=sprintf("%02s",$batchID);
$studentno=sprintf("%04s",$studentID);
$country=$values['Nationality'];

$formula_matric="$intake_category $intake_year$program_code$batch_code $studentno$country";

$uppername=strtoupper($values['Name']);

$give_matric = "UPDATE student_info set MatricNo='$formula_matric',Name='$uppername' where StudentID='$studentID' ";
db_exec($give_matric,$conn);

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where,&$deleted_values,&$message,&$pageObject)
{

		global $conn;
$studentID=$deleted_values['StudentID'];

/**********DELETE ALL BILLING & PAYMENT RECORD*****************/
$sql_del1 = "DELETE FROM student_payment_indv WHERE StudentID='$studentID'";
db_exec($sql_del1,$conn);
$sql_del2 = "DELETE FROM student_payment_program WHERE StudentID='$studentID'";
db_exec($sql_del2,$conn);
$sql_del3 = "DELETE FROM student_program_bill WHERE StudentID='$studentID'";
db_exec($sql_del3,$conn);
$sql_del4 = "DELETE FROM student_individual_billing WHERE StudentID='$studentID'";
db_exec($sql_del4,$conn);
/**********DELETE ALL BILLING & PAYMENT RECORD END*****************/

/**********DELETE RELATED *****************/
$sql_del5 = "DELETE FROM student_course WHERE StudentID='$studentID'";
db_exec($sql_del5,$conn);
$sql_del6 = "DELETE FROM student_compulsory_training WHERE StudentID='$studentID'";
db_exec($sql_del6,$conn);
$sql_del7 = "DELETE FROM  student_discipline WHERE StudentID='$studentID'";
db_exec($sql_del7,$conn);
$sql_del8 = "DELETE FROM student_extracurricular WHERE StudentID='$studentID'";
db_exec($sql_del8,$conn);
$sql_del9 = "DELETE FROM student_hostel WHERE StudentID='$studentID'";
db_exec($sql_del9,$conn);
$sql_del10 = "DELETE FROM student_industry_training WHERE studentID='$studentID'";
db_exec($sql_del10,$conn);
$sql_del11 = "DELETE FROM student_qualification WHERE StudentID='$studentID'";
db_exec($sql_del11,$conn);
$sql_del12 = "DELETE FROM student_school WHERE studentID='$studentID'";
db_exec($sql_del12,$conn);


return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
