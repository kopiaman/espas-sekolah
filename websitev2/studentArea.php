<?php
$noteStudent=" Sila masukkan no kad pengenalan murid dengan tanda dash. Contoh 050125-02-5237 ";
$ICNO=secure($_POST['icno']);
if ((isset($_POST["MM_POST"])) && ($_POST["MM_POST"]=="postform")) 
{

$sql_exist= "SELECT COUNT(StudentID) AS exist, StudentID FROM student_info WHERE ICNO='$ICNO'";
$query_exist=mysql_query($sql_exist,$conn);
$student_exist=mysql_fetch_array($query_exist);


if($student_exist['exist']==0){
$noteStudent='Murid ini tiada dalam rekod';
}else if($student_exist['exist']==1){

$StudentID=$student_exist['StudentID'];	
$studentProfil='<a href="../espas/x_student_info.php?StudentID='.$StudentID.'" class="btn btn-lg" target="_blank">BUKA FAIL MURID</a>';
$noteStudent='Rekod dijumpai. Sila klik link di bawah untuk rekod keseluruhan. <br/>'. $studentProfil ;
}

}
?>
<section id="studentArea"> 
  <div class="container">
    <div class="text">
      <div class="row text-center">
        <div class="col-md-12">
          <h1>Semak Rekod Murid</h1>
          <span class="border"> <i class="fa fa-plane"></i> </span>
        
     </div>
        
        <style>
        input.edit-btn-large {
   padding: 11px 25px;
   font-size: 17.5px;
}
</style>
 
 
 <h2><?php echo $noteStudent ?> </h2>
 
<form method='post' name="studentForm" class="form-horizontal" role="form">
  <div class="input-append">
 
     <input type="text" class="span8 search-query btn-large" placeholder="No Kad Pengenalan Murid" style="padding: 15px 15px;font-size: 25px; width:450px;" id="icno" name="icno" required>
        <input type="hidden"  class="form-control" id="MM_POST" name="MM_POST" value="postform" >
       <button type="submit" class="btn btn-large">
          <i class="fa fa-search fa-lg"></i>
          Search
      </button>
   </div>
</form>

        
      </div>
    </div>
  </div>
</section>
