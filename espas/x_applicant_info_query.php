<?php

//select STUDENT INFO
$sql_02 = "SELECT enrolID,
Name,
ICNO,
DOB,
Email,
BranchID,
Date_Apply,
Gender,
married,
Address1,
City,
Postcode,
StateID,
HomeTelephone,
MobileTelephone,
Nationality,
DipID,
Status,
Disability,
MedicalCondition,
race,
Religion,
f1_name,
f1_tel,
f1_relation,
f2_name,
f2_tel,
f2_relation,
blood,
qua_level,
q1_s,
q1_g,
q2_s,
q2_g,
q3_s,
q3_g,
q4_s,
q4_g,
g5_s,
g5_g,
g6_s,
g6_g,
g7_s,
g7_g,
g8_s,
g8_g,
g9_s,
g9_g,
oq_highest,
oq_major,
oq_u,
oq_cgpa,
at_ic,
at_dob,
at_spm,
at_slc,
at_coco,
at_fama,
at_famaic,
at_trans,
at_photo
FROM enroll WHERE enrolID='$enrolID'";
$q_02 = mysql_query($sql_02);
$row=mysql_fetch_array($q_02);

//select program
$sql_03 ="SELECT
enroll.enrolID,
program.Name AS programname
FROM enroll
INNER JOIN program ON enroll.DipID = program.ID
WHERE enroll.enrolID ='$enrolID'"; 
$q_03 = mysql_query($sql_03);
$row3=mysql_fetch_array($q_03);


?>