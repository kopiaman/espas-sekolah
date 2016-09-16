<?php 
class eventsBase
{
	var $events = array();
	var $captchas = array();
	var $maps = array();
	function exists($event, $table = "") 
	{ 
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else 
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
		
	function existsCAPTCHA($page)
	{
		return (array_key_exists($page,$this->captchas)!==FALSE);
	}
	
	function callCAPTCHA(&$pageObject)
	{
		if($pageObject->pageType == "add")
			$this->displayCaptchaOnAdd();
		elseif($pageObject->pageType == "edit")
			$this->displayCaptchaOnEdit();
		elseif($pageObject->pageType == "register")
			$this->displayCaptchaOnRegister();
	}
}

class class_GlobalEvents extends eventsBase
{ 
	function class_GlobalEvents()
	{
	// fill list of events
		$this->events["BeforeProcessMenu"]=true;

		$this->events["ModifyMenuItem"]=true;


//	onscreen events


	
	
		}
// Captchas functions	
//	handlers

		
		
				// Menu page: Before process
function BeforeProcessMenu(&$conn,&$pageObject)
{

		
//**********  Redirect to another page  ************
/*
header("Location: student_info_list.php?menuItemId=3&q=%28Status~equals~Aktif%29");
exit();

*/


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		

if ($_SESSION["GroupID"]>28)
{

  $title = $menuItem->getTitle();

  if ($title=="Pengguna Sistem")

     return false;

};

return true;


;		
} // function ModifyMenuItem

		

//	onscreen events

} 
?>
