<?php 
class eventclass_staff_late  extends eventsBase
{ 
	function eventclass_staff_late()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		
global $conn;
$StaffID=$values['StaffID'];
$sql_up= "UPDATE staff_absent_late SET late ='1' WHERE StaffID='$StaffID'";
$query_up=db_exec($sql_up,$conn);

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
