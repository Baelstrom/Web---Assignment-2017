<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$fn=$_POST["fn"];
$ln=$_POST["ln"];
$Nic=$_POST["Nic"];
$em=$_POST["em"];
$at=$_POST["at"];
$em=$_POST["em"];
$pass=$_POST["pass"];

mysql_connect("localhost","root","");
mysql_select_db("webdb");
mysql_query("insert into register(first_name,last_name,nic,account_type,email,password) values('$fn','$ln','$Nic','$at','$em','$pass')");

?>
</body>
</html>