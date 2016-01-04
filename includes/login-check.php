<?php
require_once('db-data.php');
$dbhost=DBHOST;
$dbuname=DBUNAME;
$dbpass=DBPASS;
$dbname=DBNAME;
$tbname=TB1NAME;

$sql_conn=mysqli_connect($dbhost, $dbuname, $dbpass);
$sql_mkdb=mysqli_select_db($sql_conn, $dbname);
if (!$sql_conn) {
    die("Connection failed : " . mysqli_connect_error());
}
if (!$sql_mkdb) {
    die("Unable to select db : " . mysqli_error($sql_conn));
}

$uid=$_POST['uname'];
$pwd=$_POST['pwd'];
echo $uid,$pwd;

$sql_qr1="SELECT uid, pin_hash FROM $tbname;";
$sql_arr1=mysqli_query($sql_conn, $sql_qr1);
while ($u_ph_array=mysqli_fetch_array($sql_arr1)) {
  $db_ft_pwd=$u_php_array['uid'];
  if(password_verify($pwd, $db_ft_pwd)) {
    echo "Password is valid";
  } else {
    echo "Password is invalid";
  }
}

 ?>
