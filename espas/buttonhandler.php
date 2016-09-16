<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/button.php");
	
$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];

// proccess table events
if($buttId=='Import_Darjah_5')
{
	include("include/student_course_variables.php");
	buttonHandler_Import_Darjah_5($params);
}
if($buttId=='Darjah_1')
{
	include("include/student_course_variables.php");
	buttonHandler_Darjah_1($params);
}
if($buttId=='Darjah_2')
{
	include("include/student_course_variables.php");
	buttonHandler_Darjah_2($params);
}
if($buttId=='Darjah_3')
{
	include("include/student_course_variables.php");
	buttonHandler_Darjah_3($params);
}
if($buttId=='Darjah_6')
{
	include("include/student_course_variables.php");
	buttonHandler_Darjah_6($params);
}
if($buttId=='Darjah_4')
{
	include("include/student_course_variables.php");
	buttonHandler_Darjah_4($params);
}
if($buttId=='UP1')
{
	include("include/student_course_variables.php");
	buttonHandler_UP1($params);
}
if($buttId=='PPT')
{
	include("include/student_course_variables.php");
	buttonHandler_PPT($params);
}
if($buttId=='UP2')
{
	include("include/student_course_variables.php");
	buttonHandler_UP2($params);
}
if($buttId=='PAT')
{
	include("include/student_course_variables.php");
	buttonHandler_PAT($params);
}
if($buttId=='Import_Item_Standard_Kawasan_Sekolah')
{
	include("include/aset_variables.php");
	buttonHandler_Import_Item_Standard_Kawasan_Sekolah($params);
}
if($buttId=='Import_Item_Standard_Keselamatan')
{
	include("include/aset_variables.php");
	buttonHandler_Import_Item_Standard_Keselamatan($params);
}
if($buttId=='Submit_Ke_JAWI')
{
	include("include/create_pbsra_variables.php");
	buttonHandler_Submit_Ke_JAWI($params);
}
if($buttId=='Import_Senarai_Nama_Darjah_6_')
{
	include("include/student_upsra_variables.php");
	buttonHandler_Import_Senarai_Nama_Darjah_6_($params);
}
if($buttId=='Hantar_Senarai_Nama_Ke_JAWI')
{
	include("include/student_upsra_variables.php");
	buttonHandler_Hantar_Senarai_Nama_Ke_JAWI($params);
}
if($buttId=='Cetak_Resit')
{
	include("include/student_payment_variables.php");
	buttonHandler_Cetak_Resit($params);
}
if($buttId=='Cetak_Notis_Yuran')
{
	include("include/student_billing_variables.php");
	buttonHandler_Cetak_Notis_Yuran($params);
}
if($buttId=='PROFIL')
{
	include("include/student_info_variables.php");
	buttonHandler_PROFIL($params);
}
if($buttId=='RITEN_SRI_')
{
	include("include/create_pbsra_variables.php");
	buttonHandler_RITEN_SRI_($params);
}
if($buttId=='Caj')
{
	include("include/bill_record_variables.php");
	buttonHandler_Caj($params);
}
if($buttId=='Reset_Password')
{
	include("include/admin_users_variables.php");
	buttonHandler_Reset_Password($params);
}

// proccess non table events


// create table and non table handlers
function buttonHandler_Import_Darjah_5($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$tahun=5;
$result["txt"] = $params["txt"]. $tahun;
global $conn;

$sql_guru= "SELECT StudentID FROM student_info WHERE tahun=$tahun AND Status='Aktif'";
$query_guru=mysql_query($sql_guru,$conn);
$row=mysql_fetch_assoc($query_guru);



do{
$student=$row['StudentID'];

$sql_1= "INSERT INTO student_course (StudentID,etype) VALUES('$student','$_SESSION[exam]')";
db_exec($sql_1,$conn);
}while($row=mysql_fetch_assoc($query_guru));;
	echo my_json_encode($result);
}
function buttonHandler_Darjah_1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$tahun=1;
$result["txt"] = $params["txt"]. $tahun;
global $conn;

$sql_guru= "SELECT StudentID FROM student_info WHERE tahun=$tahun AND Status='Aktif'";
$query_guru=mysql_query($sql_guru,$conn);
$row=mysql_fetch_assoc($query_guru);


do{
$student=$row['StudentID'];

$sql_1= "INSERT INTO student_course (StudentID,etype) VALUES('$student','$_SESSION[exam]')";
db_exec($sql_1,$conn);
}while($row=mysql_fetch_assoc($query_guru));;
	echo my_json_encode($result);
}
function buttonHandler_Darjah_2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$tahun=2;
$result["txt"] = $params["txt"]. $tahun;
global $conn;

$sql_guru= "SELECT StudentID FROM student_info WHERE tahun=$tahun AND Status='Aktif'";
$query_guru=mysql_query($sql_guru,$conn);
$row=mysql_fetch_assoc($query_guru);



do{
$student=$row['StudentID'];

$sql_1= "INSERT INTO student_course (StudentID,etype) VALUES('$student','$_SESSION[exam]')";
db_exec($sql_1,$conn);
}while($row=mysql_fetch_assoc($query_guru));;
	echo my_json_encode($result);
}
function buttonHandler_Darjah_3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$tahun=3;
$result["txt"] = $params["txt"]. $tahun;
global $conn;

$sql_guru= "SELECT StudentID FROM student_info WHERE tahun=$tahun AND Status='Aktif'";
$query_guru=mysql_query($sql_guru,$conn);
$row=mysql_fetch_assoc($query_guru);



do{
$student=$row['StudentID'];

$sql_1= "INSERT INTO student_course (StudentID,etype) VALUES('$student','$_SESSION[exam]')";
db_exec($sql_1,$conn);
}while($row=mysql_fetch_assoc($query_guru));;
	echo my_json_encode($result);
}
function buttonHandler_Darjah_6($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$tahun=6;
$result["txt"] = $params["txt"]. $tahun;
global $conn;

$sql_guru= "SELECT StudentID FROM student_info WHERE tahun=$tahun AND Status='Aktif'";
$query_guru=mysql_query($sql_guru,$conn);
$row=mysql_fetch_assoc($query_guru);



do{
$student=$row['StudentID'];

$sql_1= "INSERT INTO student_course (StudentID,etype) VALUES('$student','$_SESSION[exam]')";
db_exec($sql_1,$conn);
}while($row=mysql_fetch_assoc($query_guru));;
	echo my_json_encode($result);
}
function buttonHandler_Darjah_4($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$tahun=4;
$result["txt"] = $params["txt"]. $tahun;
global $conn;

$sql_guru= "SELECT StudentID FROM student_info WHERE tahun=$tahun AND Status='Aktif'";
$query_guru=mysql_query($sql_guru,$conn);
$row=mysql_fetch_assoc($query_guru);



do{
$student=$row['StudentID'];

$sql_1= "INSERT INTO student_course (StudentID,etype) VALUES('$student','$_SESSION[exam]')";
db_exec($sql_1,$conn);
}while($row=mysql_fetch_assoc($query_guru));;
	echo my_json_encode($result);
}
function buttonHandler_UP1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." UP1 telah diset!";

$_SESSION['exam']='UP1';;
	echo my_json_encode($result);
}
function buttonHandler_PPT($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." PPT telah diset!";

$_SESSION['exam']='PPT';;
	echo my_json_encode($result);
}
function buttonHandler_UP2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." UP2 telah diset!";

$_SESSION['exam']='UP2';;
	echo my_json_encode($result);
}
function buttonHandler_PAT($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." PAT telah diset!";

$_SESSION['exam']='PAT';;
	echo my_json_encode($result);
}
function buttonHandler_Import_Item_Standard_Kawasan_Sekolah($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";

global $conn;

$sql_at= "SELECT Field_Name AS item FROM setting WHERE Class='54'";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);

do{
$item=$row_at['item'];
$sql_1= "INSERT INTO aset (name,cat) VALUES('$item','Kawasan Sekolah')";
db_exec($sql_1,$conn);
}while($row_at=db_fetch_array($query_at));;
	echo my_json_encode($result);
}
function buttonHandler_Import_Item_Standard_Keselamatan($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";

global $conn;

$sql_at= "SELECT Field_Name AS item FROM setting WHERE Class='55'";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);

do{
$item=$row_at['item'];
$sql_1= "INSERT INTO aset (name,cat) VALUES('$item','Keselamatan')";
db_exec($sql_1,$conn);
}while($row_at=db_fetch_array($query_at));;
	echo my_json_encode($result);
}
function buttonHandler_Submit_Ke_JAWI($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$data = $button->getCurrentRecord();
$result['pmonth']=$data['pmonth'] ;
$result['pyear']=$data['pyear'] ;;
	echo my_json_encode($result);
}
function buttonHandler_Import_Senarai_Nama_Darjah_6_($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.


$tahun=6;
$syear=date('Y');

global $conn;

mysql_select_db('srasys_iqra'); 
$sql_at= "SELECT sek_kod FROM campus_setting WHERE id=1";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);

$sek_kod=$row_at['sek_kod'];

$sql_guru= "SELECT Name,ICNO FROM student_info WHERE tahun='$tahun' AND Status='Aktif'";
$query_guru=mysql_query($sql_guru,$conn);
$row=mysql_fetch_array($query_guru);


do{
$name=$row['Name'];$icno=$row['ICNO'];
$sql_1= "INSERT INTO student_upsra (name,icno,scode,sstatus,syear) VALUES('$name','$icno','$sek_kod','Tidak','$syear')";
db_exec($sql_1,$conn);
}while($row=mysql_fetch_array($query_guru));

$result["txt"] = $params["txt"];

;
	echo my_json_encode($result);
}
function buttonHandler_Hantar_Senarai_Nama_Ke_JAWI($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.


global $conn;
$syear=date('Y');
$sql_at= "SELECT name,icno,scode,sstatus,syear FROM student_upsra WHERE sstatus='Tidak' AND syear=$syear";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);



do{

$sys_dbname="espas_jawi";
mysql_select_db($sys_dbname); 
$sql_1= "INSERT INTO student_upsra (name,icno,scode,syear) VALUES('$row_at[name]','$row_at[icno]','$row_at[scode]','$row_at[syear]')";
db_exec($sql_1,$conn);

}while($row_at=db_fetch_array($query_at));

mysql_select_db('srasys_iqra'); 
$sql_up= "UPDATE student_upsra SET sstatus ='YA' WHERE sstatus='Tidak' AND syear=$syear";
$query_up=db_exec($sql_up,$conn);

$result["txt"] = $params["txt"]." world!";



;
	echo my_json_encode($result);
}
function buttonHandler_Cetak_Resit($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$data = $button->getCurrentRecord();
$result['pay_id']=$data["pay_id"] ;
$result['sid']=$data["sid"] ;;
	echo my_json_encode($result);
}
function buttonHandler_Cetak_Notis_Yuran($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$data = $button->getCurrentRecord();
$result['sid']=$data["sid"] ;

;
	echo my_json_encode($result);
}
function buttonHandler_PROFIL($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$data = $button->getCurrentRecord();
$result['StudentID']=$data["StudentID"] ;

;
	echo my_json_encode($result);
}
function buttonHandler_RITEN_SRI_($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$data = $button->getCurrentRecord();
$result['pmonth']=$data['pmonth'] ;
$result['pyear']=$data['pyear'] ;;
	echo my_json_encode($result);
}
function buttonHandler_Caj($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

if($data['sstatus']==1){

$result['txt']='<font color=red>Gagal, proses caj telah dilakukan. </font> ';

}else{ 
//starting charging to specific murid
$bid=$data['bid'];
$darjah=$data['darjah'];
$itemid=$data['itemid']; 
$amount=$data['amount'];
$bill_date=$data['bill_date'];
$bill_no=$data['bill_no'];

//select darjah terlibat
$sql_darjah="SELECT StudentID FROM student_info WHERE tahun=$darjah";
$q_darjah=db_query($sql_darjah,$conn);
$row=db_fetch_array($q_darjah);

do{
$StudentID=$row['StudentID'];
$sql_add1="INSERT INTO student_billing (studentID,itemid,amount,balance,bill_date,bill_no,bid,sstatus) VALUES('$StudentID','$itemid','$amount','$amount','$bill_date','$bill_no','$bid','Tertunggak')";
db_exec($sql_add1,$conn);
}while($row=db_fetch_array($q_darjah));

$sql_up= "UPDATE bill_record SET sstatus =1 WHERE bid='$bid'";
$query_up=db_exec($sql_up,$conn);




$result['txt']='<font color=green>Proses caj berjaya </font>'; };
;
	echo my_json_encode($result);
}
function buttonHandler_Reset_Password($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;
$data = $button->getCurrentRecord();

$id=$data['id'];
$pass=md5(1234);
$sql_up= "UPDATE user SET pass ='$pass' WHERE id='$id'";
$query_up=db_exec($sql_up,$conn);;
	echo my_json_encode($result);
}
?>
