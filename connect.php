<?php
$severname="localhost";
$dbusername="root";
$dbpassword="";
$dbname="webdb";

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$nic=$_POST['nic'];
$accountname=$_POST['accounttype'];
$email=$_POST['email'];
$password=$_POST['password'];

//create conection
$conn=new mysqli($severname,$dbusername,$dbpassword,$dbname);

//check connection
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);

}
if(empty($fname)){
	echo "First name is blank";
	die();
}

$sql="INSERT INTO register(first_name,last_name,nic,account_type,email,password) VALUE('$fname','$lname','$nic','$accountname','$email','$password')";
if($conn->query($sql)===True){
	echo "Thank you ! your info has been entered into the database, you may close this window!";
}else{
	echo "error".$sql."<br>".$conn->error;
}
$conn->close();
?>