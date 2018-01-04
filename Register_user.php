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
<h1 align="center"><strong>Register User</strong><h1>
	<div>
		<form action="register.php" method="post">
			<table align="center">
				<tr><td>First name:</td>
					<td><input type="text" name="firstname" id="firstname" value=""></td>
				</tr>

  			<tr>
  				<td>Last name:</td>
  				<td><input type="text" name="lastname" id="lastname" value=""></td>
  			</tr>

  			<tr>
  				<td>NIC:</td>
  				<td><input type="text" name="nic" id="nic" value=""></td>
 			</tr>

  			<tr>
  				<td>Account Type:</td>
  				<td><select name="accounttype" id="accounttype">
    				 <option value="user">user</option>
   					 <option value="admin">admin</option>
   					 <option value="incidenmanager">incidenmanager</option>
  					</select></td>
  				</tr>

  			<tr>
  				<td>Email:</td>
  				<td><input type="text" name="email" id="email" value=""></td>
 			</tr>

  			<tr>
  				<td>Password:</td>
  				<td><input type="text" name="password" id="password" value=""></td>
			</tr>
  			<tr><td><input type="submit" value="Create User"></td></tr>
			</table>

		</form>
	</div>

</body>
</html>
