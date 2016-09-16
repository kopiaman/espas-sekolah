<?php 

	//--------------------------------------------------------------------------
	// 1) Connect to mysql database
	//--------------------------------------------------------------------------
	require_once("db/db.php");

	//--------------------------------------------------------------------------
	// 2) Query database for data
	//--------------------------------------------------------------------------
	$date = $_GET['date'];
	
	//$result = mysql_query("SELECT * FROM event WHERE date_start LIKE '$date%' OR ( date_start < $date && $date < date_end"); //query
	$result = mysql_query("SELECT * FROM event WHERE date_start LIKE '$date%' OR date_start < '$date' && '$date' <= date_end");
	
	$data = array();
	while ( $row = mysql_fetch_array($result, MYSQL_ASSOC) ) {
		$data[] = $row;
	}
		
	//--------------------------------------------------------------------------
	// 3) echo result as json 
	//--------------------------------------------------------------------------
	echo json_encode( $data );	
?>