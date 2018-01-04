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
<h1 align="center"><strong>Write Report</strong><h1>
	<div align="center">
		<form method="post" action="submitReport.php">
      <table> <tr>
      <td>Disaster Type:</td>
      <td><select name="Disaster_Type">
             <option value="Road_accients">Road Accients</option>
             <option value="electrical_breakdowns">electrical Breakdowns</option>
             <option value="Floods">Floods</option>
             <option value="Landslides">Landslides</option>
             <option value="Other">Other</option>
        </select></td>
        </tr>

        <tr>
          <td>Date/Time:</td>
          <td><input name="incidentDate"type="text" name="data/time" value=""></td>
        </tr>

        <tr>
          <td>Threatlevel:</td>
        <td><select name="Threat_level">
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
        </select></td>
        </tr>

        <tr>
        <td>Description:</td>
        <td><input type="text" name="description" value=""></td>
				<td>Latittude:</td>
        <td><input type="text" name="lat" value=""></td>
				<td>Longitude:</td>
        <td><input type="text" name="long" value=""></td>
      </tr>

        <tr><td>Location:</td>
          <td><iframe src="https://www.google.lk/maps/place/Colombo/@6.9219226,79.8211859,13z/data=!3m1!4b1!4m5!3m4!1s0x3ae253d10f7a7003:0x320b2e4d32d3838d!8m2!3d6.9270786!4d79.861243?hl=en"></iframe></td>
        </tr>

        <tr><td>Photos:</td>
        <td><input type="text" name="password" value=""></td>
        </tr>

        <tr>
        <td><input type="submit" value="submit Report"></table></td>
        </tr>
		</form>
	</div>

</body>
</html>
