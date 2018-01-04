<?php
// include dbconnect
require 'dbconnect.php';

// get data from POST
$incidentDate=$_POST['incidentDate'];
$Threat_level=$_POST['Threat_level'];
$description=$_POST['description'];
$Disaster_Type=$_POST['Disaster_Type'];
$longitude=$_POST['long'];
$lat=$_POST['lat'];
$approved=0;

$sql="INSERT INTO report(`date`,Disaster_Type,Threat_level,description,longitude,lat,approved)
VALUE('$incidentDate','$Disaster_Type','$Threat_level','$description','$longitude','$lat','$approved')";

if($conn->query($sql)===True){
	echo "Thank you ! your info has been entered into the database, you may close this window!";
}else{
	echo "error".$sql."<br>".$conn->error;
}

$conn->close();
?>
