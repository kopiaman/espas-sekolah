<?php 
class eventclass_student_info  extends eventsBase
{ 
	function eventclass_student_info()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeDelete"]=true;

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

/******ADD BILLING AUTO TO STUDENT ************/
/*
//query bil according to darjah
$sql_bil= "SELECT id,program_billing_ID,item,amount,	bill_date,bill_no
FROM program_billing_item WHERE darjah=$darjah";
$query_bil=db_query($sql_bil,$conn);
$row_bil=db_fetch_array($query_bil);

*/

//insert all billling item to student program bill records
/*
do{

$programBillingItemID = $row_bil['id'];
$amountbill=$row_bil['amount'];
$item=$row_bil['item'];
$dateNow = now();

$sql_caj= "insert into student_billing (program_billing_item_ID, studentID, status, date,amount,amount_balance,item)
values ('$programBillingItemID', '$studentID', 'Pending','$dateNow','$amountbill','$amountbill','$item')";
db_exec($sql_caj,$conn);
}while($row_bil=db_fetch_array($query_bil));
*/

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where,&$deleted_values,&$message,&$pageObject)
{

		global $conn;
$studentID=$deleted_values['StudentID'];
/*

/**********DELETE ALL BILLING & PAYMENT RECORD****************
$sql_del1 = "DELETE FROM  student_billing WHERE studentID='$studentID'";
db_exec($sql_del1,$conn);
$sql_del2 = "DELETE FROM student_payment WHERE studentID='$studentID'";
db_exec($sql_del2,$conn);
/**********DELETE ALL BILLING & PAYMENT RECORD END****************

/**********DELETE RELATED ***************
$sql_del7 = "DELETE FROM  student_discipline WHERE StudentID='$studentID'";
db_exec($sql_del7,$conn);



*/

return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
