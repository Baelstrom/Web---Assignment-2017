<?php
if(isset($_POST['submit'])){
header("Location: http://localhost/test/webpro/register_user.php/");
exit;
}?>

<?php
if(isset($_POST['submit1'])){
header("Location: http://localhost/test/webpro/check_report.php/");
exit;}?>

<?php
if(isset($_POST['submit2'])){
header("Location: http://localhost/test/webpro/write_report.php/");
exit;}?>

<?php
if(isset($_POST['submit3'])){
header("Location: http://localhost/test/webpro/frontend.php/");
exit;}?>

<!DOCTYPE html>
<html>
<head>
	<title>backend of the website</title>
	<style type="text/css">
	div{
		 border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	}
	
</style>
</head>
<body>
<h1 align="center"><strong>National Disaster Managemant</strong><h1>
<div  align="center">
	<form action="" method="post">
	<input type="submit" name="submit" value="Register user"><br>
	<input type="submit" name="submit1" value="check report"><br>
	<input type="submit" name="submit2" value="write report"><br>
	<input type="submit" name="submit3" value="home"><br>
	</form>
	
</form>
<div>
</body>
</html>