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
<h1 align="center"><strong>Check report</strong><h1>
	<div>
		<form action="/action_page.php">
  		<table align="center">
       <tr> 
        <td>Date/Time:</td>
  			<td><input type="text" name="data/time" value=""></td>
      </tr>
 			
  			<tr>
          <td>Threatlevel:</td>
        <td><select name="accounttype">
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
        </select></td>
  			</tr>
  			
        <tr>
        <td>Description:</td>
  			<td><input type="text" name="desc" value=""></td>
      </tr>
  			
        <tr><td>Location:</td>
  				<td><iframe src="https://www.google.lk/maps/place/Colombo/@6.9219226,79.8211859,13z/data=!3m1!4b1!4m5!3m4!1s0x3ae253d10f7a7003:0x320b2e4d32d3838d!8m2!3d6.9270786!4d79.861243?hl=en"></iframe></td>
        </tr>
 			
  			<tr><td>Photos:</td>
  			<td><input type="text" name="password" value=""></td>
        </tr>
        <tr><td><input type="submit" value="Aprrove Post"></td></tr>
        <tr><td><input type="submit" value="Edit Post"></td></tr>
        <tr><td> <input type="submit" value="Reject Post"></td></tr>
      </table>
		</form> 
	</div>
</body>
</html>