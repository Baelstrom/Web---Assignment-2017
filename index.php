<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <link href="StyleSheet.css" rel="stylesheet" />
  <meta charset="utf-8" />
  <title>National Disaster Management</title>
</head>

<body style margin: 0 auto;>

  <div class="container1">
    <div id="topmenudiv">
      <div id="topmenu">
        <ul>
          <h1>National Disaster Management</h1>
            <?php
              if (isset($_SESSION['email'])){
                echo "<li><a href='logout.php'>Logout</a></li>";
                $account = $_SESSION['account_type'];
                switch($account){
                  case 'user':{
                    echo "<li><a href='write_report.php'>Report</a></li>";
                    break;
                  }
                  case 'incidentmanager':{
                    echo "<li><a href='check_report.php'>Review</a></li>";
                    break;
                  }
                  case 'admin':{
                    echo "<li><a href='backend.php'>Backend</a></li>";
                    break;
                  }
                }
              } else {
                echo "<li><a href='login.php'>Login</a></li>";
              }
            ?>
        </ul>
      </div>
    </div>
  </div>

  <hr>

  <div class="alertBox" style="border-style:solid; border-width:5px; border-color:red; margin:10px; ">
    <div class="alertTop" style="background-color:yellow  ">
        <h1> TITLE <small>in</small> LOCATION <small>at</small> TIME </h1>
    </div>
    <div class="alertMiddle" style="background-color:pink">
        <div align="left" style="height:50px; background-color:green">
          <h4> Description </h4>
        </div>
        <div>
          <img align="left" style="width:40%; height:300px" src="http://www.weatherwizkids.com/wp-content/uploads/2015/04/landslide9.jpg" alt="Dead People!">
        </div>
				<div class="google-maps" align="right">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.148882466041!2d79.88148151419448!3d6.872758120912636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a48d2a0302d%3A0xddb466719c0595db!2sNational+School+Of+Business+Management+%7C+School+Of+Business!5e0!3m2!1sen!2slk!4v1470652218701" width="50%" height="300px" frameborder="5" allowfullscreen=""></iframe>
				</div>
    </div>
  </div>


  <div class="alertBox" style="border-style:solid; border-width:5px; border-color:red; margin:10px; ">
    <div class="alertTop" style="background-color:yellow  ">
        <h1> TITLE <small>in</small> LOCATION <small>at</small> TIME </h1>
    </div>
    <div class="alertMiddle" style="background-color:pink">
        <div align="left" style="height:50px; background-color:green">
          <h4> Description </h4>
        </div>
        <div>
          <img align="left" style="width:40%; height:300px" src="http://www.weatherwizkids.com/wp-content/uploads/2015/04/landslide9.jpg" alt="Dead People!">
        </div>
				<div class="google-maps" align="right">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.148882466041!2d79.88148151419448!3d6.872758120912636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a48d2a0302d%3A0xddb466719c0595db!2sNational+School+Of+Business+Management+%7C+School+Of+Business!5e0!3m2!1sen!2slk!4v1470652218701" width="50%" height="300px" frameborder="5" allowfullscreen=""></iframe>
				</div>
    </div>
  </div>

</body>
</html>
