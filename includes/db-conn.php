<!-- LICENSED AS OPEN SOURCE UNDER ATTRIBUTION ASSURANCE LICENSE
Made by "Johnson S, Suraj P, Suvith Kumar CV, Varshan BP"
See "LICENSE.MD" file present in Root Folder -->

<?php
require_once('db-data.php');

$dbname1=DBNAME1;
$tbname1=TBNAME1;

$sql_conn1=mysqli_connect(DBHOST, DBUNAME, DBPASS, DBNAME1);
$sql_conn2=mysqli_connect(DBHOST, DBUNAME, DBPASS, DBNAME2);

 ?>
