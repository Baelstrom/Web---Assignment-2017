<?php  //Start the Session
session_start();
require('dbconnect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['email']) and isset($_POST['password'])){
  //3.1.1 Assigning posted values to variables.
  $email = $_POST['email'];
  $password = $_POST['password'];
  //3.1.2 Checking the values are existing in the database or not
  $query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";

  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $count = mysqli_num_rows($result);
  //3.1.2 If the posted values are equal to the database values, then session will be created for the user.



  if ($count == 1){
  $_SESSION['email'] = $email;
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    if($row['account_type'] == 'user') {
      $_SESSION['account_type'] ='user';
      echo 'isUser';
      header('Location: index.php');
    } else if ( $row['account_type'] == 'admin') {
      $_SESSION['account_type'] ='admin';
      echo 'isAdmin';
      header('Location: backend.php');
    } else if ( $row['account_type'] == 'incidentmanager') {
      $_SESSION['account_type'] ='incidentmanager';
      echo 'isModerator';
      header('Location: index.php');
    }
   }
  }else{
  //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
    echo'email or password is incorrect';
    echo'<br>';
    echo'<a href=\'login.php\'>back to login page</a>';
  }
}


//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  $query = "SELECT * FROM `user` WHERE email='$email'";

  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $count = mysqli_num_rows($result);
  //3.1.2 If the posted values are equal to the database values, then session will be created for the user.



  if ($count == 1){
  $_SESSION['email'] = $email;
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    if($row['account_type'] == 'user') {
      $_SESSION['account_type'] ='user';
      echo 'isUser';
      header('Location: index.php');
    } else if ( $row['account_type'] == 'admin') {
      $_SESSION['account_type'] ='admin';
      echo 'isAdmin';
      header('Location: backend.php');
    } else if ( $row['account_type'] == 'incidentmanager') {
      $_SESSION['account_type'] ='incidentmanager';
      echo 'isModerator';
      header('Location: index.php');
    }
   }
  }else{
  //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
    echo'email or password is incorrect';
    echo'<br>';
    echo'<a href=\'login.php\'>back to login page</a>';
  }

}else{
  echo'email or password is incorrect';
  echo'<br>';
  echo'<a href=\'login.php\'>back to login page</a>
';
}
?>
