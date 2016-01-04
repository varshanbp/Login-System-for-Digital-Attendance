<!-- LICENSED AS OPEN SOURCE UNDER ATTRIBUTION ASSURANCE LICENSE
Made by "Johnson S, Suraj P, Suvith Kumar CV, Varshan BP"
See "LICENSE.MD" file present in Root Folder -->

<?php
require_once('db-data.php');

$dbname1=DBNAME1;
$tbname1=TBNAME1;

$sql_conn=mysqli_connect(DBHOST, DBUNAME, DBPASS);
$sql_sldb=mysqli_select_db($sql_conn, DBNAME1);

 ?>
