<?php
$sqli= new mysqli('localhost','root','','webdb');
if($mysqli->connect_error){die('Error'.('.$mysql->connect_errorno.'))'.$mysql->connect_error');}else{
	echo "connected to database";
}
?>