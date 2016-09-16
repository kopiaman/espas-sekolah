<?php 
class eventclass_bill_record  extends eventsBase
{ 
	function eventclass_bill_record()
	{
	// fill list of events
		$this->events["BeforeDelete"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where,&$deleted_values,&$message,&$pageObject)
{

		
global $conn;
$bid=$deleted_values['bid'];


$sql_at= "SELECT sid FROM student_billing WHERE bid='$bid'";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);


do{
$sid=$row_at['sid'];
$sql_del2 = "DELETE FROM student_payment WHERE sid='$sid'";
db_exec($sql_del2,$conn);
}while($row_at=db_fetch_array($query_at));

//2nd delete
$sql_del="DELETE FROM student_billing WHERE bid=$bid";
db_exec($sql_del,$conn);


return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
