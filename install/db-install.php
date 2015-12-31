<!-- LICENSED AS OPEN SOURCE UNDER ATTRIBUTION ASSURANCE LICENSE
Made by "Johnson S, Suraj P, Suvith Kumar CV, Varshan BP"
See "LICENSE.MD" file present in Root Folder -->

<?php
require_once('db-data.php');
$dbhost=DBHOST;
$dbuname=DBUNAME;
$dbpass=DBPASS;
$dbname=DBNAME;

$sql_conn=mysqli_connect($dbhost, $dbuname, $dbpass);
$sql_mkdb=mysqli_select_db($sql_conn, $dbname);
if (!$sql_conn) {
    die("Connection failed : " . mysqli_connect_error());
}
else {
    echo "SUCCESSFULLY CONNECTED TO HOST SERVER. <br><br>";
    echo "SECURITY CHECK COMPLETE SUCCESSFULLY. <br><br>";
    if (!$sql_mkdb) {
        die("Unable to select db : " . mysqli_error($sql_conn));
    }
    else {
        echo "SUCCESSFULLY CONNECTED TO DATABASE. <br><br>";
    }
}
$sql_ctb1="CREATE TABLE IF NOT EXISTS `login`.`auth` ( `uid` VARCHAR(6) NOT NULL , `name` VARCHAR(25) NOT NULL ,
 `emailid` VARCHAR(75) NOT NULL , `department` CHAR(2) NOT NULL , `dob` DATE NOT NULL ,
  `pin_hash` VARCHAR(255) NOT NULL , `bk_qs` TEXT NOT NULL , `bk_ans` VARCHAR(255) NOT NULL ,
   PRIMARY KEY (`uid`(6)), UNIQUE (`emailid`(75)), FULLTEXT (`bk_qs`)) ENGINE = MyISAM;";
mysqli_query($sql_conn, $sql_ctb1) or die("Unable to create table : " . mysqli_error($sql_conn));
echo("SUCCESSFULLY CREATED TABLE");
 ?>
