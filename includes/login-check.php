<?php
include('db-conn.php');

$uid=$_POST['uname'];
$pwd=$_POST['pwd'];

$sql_arr1=mysqli_query($sql_conn, "SELECT pin_hash FROM auth WHERE uid='$uid'");
$phash=mysqli_fetch_assoc($sql_arr1);

if(!$phash)
  echo "INVALID RETURNED";
if(password_verify($pwd, $phash['pin_hash']))
  echo "VALID";
else
  echo "ERROR";

/*
if($sql_arr1=mysqli_query($sql_conn, "SELECT pin_hash FROM auth WHERE uid='$uid'"))
{
  $phash=mysqli_fetch_assoc($sql_arr1);
  if(password_verify($pwd, $phash['pin_hash']))
    echo "VALID";
  else
    echo "ERROR";
}*/

 ?>
