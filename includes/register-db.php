<?php
require_once('db-conn.php');

$fname=$_POST["fname"];
$lname=$_POST["lname"];

$dob=$_POST["dob"];

$femail=$_POST["email"];
$remail=$_POST["remail"];
if($femail==$remail)
  $email=$remail;
$name=$fname." ".$lname;

$sq=$_POST["sq"];
$sa=$_POST["sa"];
$dp=$_POST["dept"];

$uid=$_POST["uname"];
$pin=$_POST["pwd"];

$pin_hash=password_hash($pin, PASSWORD_DEFAULT);
$sa_hash=password_hash($sa, PASSWORD_DEFAULT);

$sql_qry1="INSERT INTO `auth` (`uid`, `name`, `emailid`, `department`, `dob`, `pin_hash`, `bk_qs`, `bk_ans`, `validate`) VALUES ('$uid', '$name', '$email', '$dp', '$dob', '$pin_hash', '$sq', '$sa_hash', 'N')";
$sql_rgst=mysqli_query($sql_conn, $sql_qry1);
if(!$sql_rgst)
{
  echo "ERROR : ".mysqli_error($sql_conn);
}
else {
  echo "WORKING WELL";
}

 ?>
