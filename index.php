<!DOCTYPE html>
<html>

<head>
  <link href="StyleSheet.css" rel="stylesheet" />
  <meta charset="utf-8" />
  <title>National Disaster Management</title>
  <script>

    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: {lat: 6.882413, lng: 79.896693}
    });

    var redCar = {
      path: 'M213 1946 c-27 -24 -28 -28 -34 -148 -5 -106 -10 -134 -37 -206 -44 -115 -54 -163 -53 -272 0 -125 18 -189 96 -345 155 -312 319 -585 374 -622 75 -51 246 -73 566 -73 320 0 491 22 566 73 55 37 219 310 374 622 77 155 95 219 96 345 0 110 -9 158 -53 272 -27 72 -32 100 -37 206 -6 120 -7 124 -34 148 -26 22 -36 24 -138 24 -109 0 -111 0 -140 -29 -26 -27 -29 -36 -29 -95 l0 -66 -605 0 -605 0 0 66 c0 59 -3 68 -29 95 -29 29 -31 29 -140 29 -102 0 -112 -2 -138 -24z m261 -560 c51 -21 76 -60 76 -119 0 -111 -113 -171 -208 -109 -77 50 -64 190 21 227 41 18 69 18 111 1z m1004 5 c8 -5 12 -21 10 -37 l-3 -29 -360 0 -360 0 -3 29 c-2 16 2 32 10 37 17 11 689 11 706 0z m407 -5 c87 -37 101 -177 23 -228 -95 -62 -208 -2 -208 109 0 100 91 158 185 119z m-260 -530 c66 -9 123 -16 128 -16 15 0 6 -25 -53 -145 -79 -162 -106 -187 -221 -206 -116 -19 -592 -19 -708 0 -115 19 -142 44 -221 206 -33 67 -60 127 -60 133 0 11 36 17 185 32 61 5 128 12 150 14 100 10 686 -4 800 -18z',
      fillColor: 'red',
      fillOpacity: 0.8,
      scale: 0.02,
      strokeColor: 'red',
      strokeWeight: 1
    };

    var marker = new google.maps.Marker({
      position: map.getCenter(),
      icon: redCar,
      map: map
    });
    }

  </script>
</head>

<body style margin: 0 auto;>

  <div class="container1">
    <div id="topmenudiv">
      <div id="topmenu">
        <ul>
          <h1>National Disaster Management</h1>
          <li><a href="login.php">Login</a></li>
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
          <img align="left" style="width:50%; height:300px" src="http://www.weatherwizkids.com/wp-content/uploads/2015/04/landslide9.jpg" alt="Dead People!">
        </div>
        <div id="map" align="right" style="height:300px; width:50%;"></div>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCM8jr1_V0DhZs6tKO4c2vNUUy5qd2SzBI&callback=initMap">
        </script>
    </div>
  </div>

</body>
</html>
