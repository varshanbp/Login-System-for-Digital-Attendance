<?php
include('db-conn.php');

$dept=$_GET["dept"];
$ckname=$_GET["ckname"];

if(isset($_COOKIE["PHPSESSID"])) {
  $ssid=$_COOKIE["PHPSESSID"];
}
else {
  $ssid="";
}

if(!isset($_COOKIE[$ckname])) {
  session_write_close();
  session_unset();
  unset($_COOKIE[$ckname]);
  # trigger_error("408 Timeout, Please Login Again");
  include('header.php');
  echo "<p class='w3-xxxlarge' style='text-align: center;'>408 TIMEOUT</p>
  <p class='w3-xlarge' style='text-align: center;'>Please Login Again. Please Enable cookies for this website in your browser.</p>";
  include('footer.php');
  exit();
} elseif(!password_verify($ssid, $_COOKIE[$ckname])) {
  session_write_close();
  session_unset();
  unset($_COOKIE[$ckname]);
  # trigger_error("401 Unauthorized, Please Login Again");
  include('header.php');
  echo "<p class='w3-xxxlarge' style='text-align: center;'>401 UNAUTHORIZED</p>
  <p class='w3-xlarge' style='text-align: center;'>Please Login Again. Please Enable cookies for this website in your browser.</p>";
  include('footer.php');
  exit();
} else {
  session_start();
}
 ?>
