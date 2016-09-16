<?php 
class eventclass_course  extends eventsBase
{ 
	function eventclass_course()
	{
	// fill list of events
		$this->events["AfterDelete"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		
global $conn;

$ID=$deleted_values['CourseID'];

$sql_del = "DELETE FROM student_course WHERE CourseID='$ID'";
db_exec($sql_del,$conn);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
