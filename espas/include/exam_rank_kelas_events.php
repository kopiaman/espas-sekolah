<?php 
class eventclass_exam_rank_kelas  extends eventsBase
{ 
	function eventclass_exam_rank_kelas()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		global $conn;

$studentID = $keys['StudentID'];
//$tahunmasuk=date("Y", strtotime($values['DateJoin']));
$darjah=$values['tahun'];

/******ADD MODULE AUTOMATICALLY TO STUDENT COURSE ********************/
/*
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
*/


/******ADD BILLING AUTO TO STUDENT ************/

//query bil according to darjah
$sql_bil= "SELECT id,program_billing_ID,item,amount,	bill_date,bill_no
FROM program_billing_item WHERE darjah=$darjah";
$query_bil=db_query($sql_bil,$conn);
$row_bil=db_fetch_array($query_bil);



//insert all billling item to student program bill records
do{

$programBillingItemID = $row_bil['id'];
$amountbill=$row_bil['amount'];
$item=$row_bil['item'];
$dateNow = now();

$sql_caj= "insert into student_billing (program_billing_item_ID, studentID, status, date,amount,amount_balance,item)
values ('$programBillingItemID', '$studentID', 'Pending','$dateNow','$amountbill','$amountbill','$item')";
db_exec($sql_caj,$conn);
}while($row_bil=db_fetch_array($query_bil));


;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
$dateout=$values['Dateout'];
$StudentID=$keys['StudentID'];
if($dateout){
$sql_up= "UPDATE student_info SET Status ='Berhenti' WHERE StudentID='$StudentID'";
$query_up=db_exec($sql_up,$conn);
};

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
