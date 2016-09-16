<?php 
class eventclass_attend_creator  extends eventsBase
{ 
	function eventclass_attend_creator()
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
$ayear=$values['ayear'];$amonth=$values['amonth'];
$sql_at= "SELECT StudentID FROM student_info WHERE Status='Aktif'";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);

do{
$StudentID=$row_at['StudentID'];
$sql_1= "INSERT INTO student_attendance (StudentID,amonth,ayear) VALUES('$StudentID','$amonth','$ayear')";
db_exec($sql_1,$conn);
}while($row_at=db_fetch_array($query_at));

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where,&$deleted_values,&$message,&$pageObject)
{

		

global $conn;
$amonth=$deleted_values['amonth'];
$ayear=$deleted_values['ayear'];
$sql_del2 = "DELETE FROM student_attendance WHERE amonth='$amonth' AND ayear='$ayear'   ";
db_exec($sql_del2,$conn);

return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
