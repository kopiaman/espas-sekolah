<?php 
class eventclass_create_pbsra  extends eventsBase
{ 
	function eventclass_create_pbsra()
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
$id=$keys['id'];
$month=$values['pmonth'];
$year=$values['pyear'];

//check berapa berhenti
$sql_out= "SELECT COUNT(StudentID) AS sum_out, coalesce(sum(Gender='L'), 0) AS male_out, 
coalesce(sum(Gender='P'), 0) AS female_out
FROM student_info WHERE month(Dateout)=$month AND year(Dateout)=$year";
$query_out=db_query($sql_out,$conn);
$row_out=db_fetch_array($query_out);
$sum_out=$row_out['sum_out'];$male_out=$row_out['male_out'];$female_out=$row_out['female_out'];

//check berapa masuk 
$sql_in= "SELECT COUNT(StudentID) AS sum_in ,
coalesce(sum(Gender='L'), 0) AS male_in, 
coalesce(sum(Gender='P'), 0) AS female_in
FROM student_info WHERE month(DateJoin)=$month AND year(DateJoin)=$year";
$query_in=db_query($sql_in,$conn);
$row_in=db_fetch_array($query_in);
$sum_in=$row_in['sum_in']; $male_in=$row_in['male_in']; $female_in=$row_in['female_in'];

//check if data exist or not, if not, the total student will be current student
$sql_check= "SELECT COUNT(id) AS test FROM `create_pbsra` ";
$query_check=db_query($sql_check,$conn);
$row_check=db_fetch_array($query_check);
$test=$row_check['test'];

		//total student now
		$sql_no= "SELECT COUNT(StudentID) AS nostudent,
		coalesce(sum(Gender='L'), 0) AS no_men,
		coalesce(sum(Gender='P'), 0) AS no_female FROM student_info WHERE Status ='Aktif'";
		$query_no=db_query($sql_no,$conn);
		$row_no=db_fetch_array($query_no);
		$nostudent=$row_no['nostudent']; $no_male=$row_no['no_men']; $no_female=$row_no['no_female'];

if($test==1){

		$sql_up= "Update create_pbsra set no_student='$nostudent',student_out='$sum_out', male_out='$male_out',
female_out='$female_out',student_in='$sum_in',male_in='$male_in',female_in='$female_in',
		no_male='$no_male', no_female='$no_female'
		WHERE id='$id'";
		$query_up=db_exec($sql_up,$conn);

}else if($test!=1){

		if($month==1){
			//jika bulan 1 takperlu tolak bulan lepas
				$pastmonth=12; $pastyear=$year-1;
		}else{ 	$pastmonth=($month-1); $pastyear=$year ;};

	
		//berapa bilangan student bulan lepas
		$sql_no_past= "SELECT no_student AS past_student,no_male AS past_male, no_female AS past_female,
		male_in AS p_male_in, female_in AS p_female_in, male_out AS p_male_out, female_out AS p_female_out
		FROM create_pbsra WHERE pmonth=$pastmonth AND pyear=$pastyear ";
		$query_no_past=db_query($sql_no_past,$conn);
		$row_no_past=db_fetch_array($query_no_past);

		$past_student=$row_no_past['past_student'];
		$current_student=$past_student+$sum_in-$sum_out;

		$past_male=$row_no_past['past_male'];
		$current_student_in_male=$past_male+$male_in-$male_out;

		$past_female=$row_no_past['past_female'];
		$current_student_in_female=$past_female+$female_in-$female_out;



		$sql_up= "Update create_pbsra set no_student='$current_student',student_out='$sum_out',
student_in='$sum_in',no_male='$current_student_in_male', no_female='$current_student_in_female' ,
male_in='$male_in', female_in='$female_in', male_out='$male_out', female_out='$female_out'
WHERE id='$id'";
		$query_up=db_exec($sql_up,$conn);

};




;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
$id=$keys['id'];
$month=$values['pmonth'];
$year=$values['pyear'];


//check berapa berhenti
$sql_out= "SELECT COUNT(StudentID) AS sum_out FROM student_info WHERE month(Dateout)=$month AND year(Dateout)=$year";
$query_out=db_query($sql_out,$conn);
$row_out=db_fetch_array($query_out);
$sum_out=$row_out['sum_out'];

//check berapa masuk 
$sql_in= "SELECT COUNT(StudentID) AS sum_in FROM student_info WHERE month(DateJoin)=$month AND year(DateJoin)=$year";
$query_in=db_query($sql_in,$conn);
$row_in=db_fetch_array($query_in);
$sum_in=$row_in['sum_in'];

//check if data exist or not, if not, the total student will be current student
$sql_check= "SELECT COUNT(id) AS test FROM `create_pbsra` ";
$query_check=db_query($sql_check,$conn);
$row_check=db_fetch_array($query_check);
$test=$row_check['test'];

if($test==1){

		//total student now
		$sql_no= "SELECT COUNT(StudentID) AS nostudent FROM student_info WHERE Status ='Aktif'";
		$query_no=db_query($sql_no,$conn);
		$row_no=db_fetch_array($query_no);
		$nostudent=$row_no['nostudent'];

		$sql_up= "Update create_pbsra set no_student='$nostudent',student_out='$sum_out',student_in='$sum_in' WHERE id='$id'";
		$query_up=db_exec($sql_up,$conn);

}else if($test!=1){

		$pastmonth=($month-1);
		//berapa bilangan student bulan lepas
		$sql_no_past= "SELECT no_student AS past_student FROM create_pbsra WHERE pmonth=$pastmonth AND pyear=$year ";
		$query_no_past=db_query($sql_no_past,$conn);
		$row_no_past=db_fetch_array($query_no_past);

		$past_student=$row_no_past['past_student'];

		$current_student=$past_student+$sum_in-$sum_out;

		$sql_up= "Update create_pbsra set no_student='$current_student',student_out='$sum_out',student_in='$sum_in' WHERE id='$id'";
		$query_up=db_exec($sql_up,$conn);

};




;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
