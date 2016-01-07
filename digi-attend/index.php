<?php
require_once('../includes/db-conn.php');
require_once('../includes/authenticator.php');
include('../includes/modals/logout.php');
?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body>

<nav class="w3-sidenav w3-white w3-card-2" style="display:none">
  <a href="javascript:void(0)" onclick="menu_close()" class="w3-closenav w3-large">Close &times;</a>
  <a href="#">Home</a>
  <a href="#">Attendance</a>
  <a href="#">Reports</a>
  <a href="#">Status</a>
  <a href="#">Marks</a>
  <a href="#" onclick="document.getElementById('id01').style.display='block'">Log Out</a>
</nav>

<header class="w3-container w3-teal">
  <span class="w3-opennav w3-xlarge" onclick="menu_open()">&#9776;</span>
  <h1>Digital Attendance Portal</h1>
</header>
<div class="w3-container">

</div>

<footer class="w3-container w3-teal">
  <p style="text-align:center;">&copy; 2016 JSSV under Attribution Assurance License. All rights reserved</p>
</footer>

<script>
function menu_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}
function menu_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
</script>

</body>
</html>
