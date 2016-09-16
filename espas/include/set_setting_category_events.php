<?php 
class eventclass_set_setting_category  extends eventsBase
{ 
	function eventclass_set_setting_category()
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
$cat=$deleted_values['id'];
$sql_del= "DELETE FROM setting WHERE Class=$cat";
$query_del=db_exec($sql_del,$conn);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
