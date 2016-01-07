<!-- LICENSED AS OPEN SOURCE UNDER ATTRIBUTION ASSURANCE LICENSE
Made by "Johnson S, Suraj P, Suvith Kumar CV, Varshan BP"
See "LICENSE.MD" file present in Root Folder -->

<?php
require_once('../includes/db-data.php');
$dbname1=DBNAME1;
$dbname2=DBNAME2;
$tbname1=TBNAME1;
$tbname2=TBNAME2;
$tbname3=TBNAME3;

$sql_conn=mysqli_connect(DBHOST, DBUNAME, DBPASS);
$sql_mkdb="CREATE DATABASE IF NOT EXISTS `$dbname1`";
$sql_mkdb2="CREATE DATABASE IF NOT EXISTS `$dbname2`";
if (mysqli_query($sql_conn, $sql_mkdb)) {
    echo "Database 1 created successfully <br><br>";
} else {
    echo "Error creating database: " . mysqli_error($sql_conn);
  }

if (mysqli_query($sql_conn, $sql_mkdb2)) {
    echo "Database 2 created successfully <br><br>";
} else {
    echo "Error creating database: " . mysqli_error($sql_conn);
  }

$sql_sldb=mysqli_select_db($sql_conn, DBNAME1);
if (!$sql_conn) {
    die("Connection failed : " . mysqli_connect_error());
}
else {
    echo "SUCCESSFULLY CONNECTED TO HOST SERVER. <br><br>";
    echo "SECURITY CHECK COMPLETE SUCCESSFULLY. <br><br>";
    if (!$sql_sldb) {
        die("Unable to select db : " . mysqli_error($sql_conn));
    }
    else {
        echo "SUCCESSFULLY CONNECTED TO DATABASE. <br><br>";
    }
}
$sql_ctb1="CREATE TABLE IF NOT EXISTS `$dbname1`.`$tbname1` ( `uid` VARCHAR(6) NOT NULL , `name` VARCHAR(100) NOT NULL ,
 `emailid` VARCHAR(100) NOT NULL , `department` CHAR(2) NOT NULL , `dob` DATE NOT NULL ,
  `pin_hash` VARCHAR(255) NOT NULL , `bk_qs` TEXT NOT NULL , `bk_ans` VARCHAR(255) NOT NULL , `validate` CHAR(1) NOT NULL,
   PRIMARY KEY (`uid`(6))) ENGINE = MyISAM;";

$sql_ctb2="CREATE TABLE IF NOT EXISTS `$dbname1`.`$tbname2` ( `uid` VARCHAR(6) NOT NULL , `department` CHAR(2) NOT NULL ,
  `role` CHAR(3) NOT NULL , `dacc` VARCHAR(17) NOT NULL, PRIMARY KEY (`uid`(6))) ENGINE = MyISAM;";

$sql_ctb3="CREATE TABLE IF NOT EXISTS `$dbname2`.`$tbname3` ( `name` VARCHAR(100) NOT NULL , `regno` VARCHAR(10) NOT NULL ,
  `department` CHAR(2) NOT NULL , `sem` INT(1) NOT NULL, `dob` DATE NOT NULL , `sex` CHAR(1) NOT NULL ,
  `emailid` VARCHAR(100) NOT NULL , `phone` VARCHAR(10) NOT NULL , `validate` CHAR(1) NOT NULL,
  PRIMARY KEY (`regno`(10))) ENGINE = MyISAM;";

mysqli_query($sql_conn, $sql_ctb1) or die("Unable to create table 1 : " . mysqli_error($sql_conn));
mysqli_query($sql_conn, $sql_ctb2) or die("Unable to create table 2 : " . mysqli_error($sql_conn));
mysqli_query($sql_conn, $sql_ctb3) or die("Unable to create table 3 : " . mysqli_error($sql_conn));
echo("SUCCESSFULLY CREATED TABLES");

# BACKUP CODE - START
# UNIQUE (`emailid`(75)), FULLTEXT (`bk_qs`)
# BACKUP CODE - END
 ?>
