<!DOCTYPE html>
<html lang="pl">
  <head>
      <title>Rejestracja na studia</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="Stylesheet" type="text/css" href="bootstrap-3.3.7/css/style.css" />
      <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
      <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
      <style >
      
        body {
        margin: 0;
        background: url("img/bpanel.jpg");
         /*background-repeat: round;*/
         background-size: cover;
         background-position: center;

        }


    </style> 
  </head>

  <body>
       <div style="margin-bottom: 40px;">
          <?php 
          session_start();
          include ('menu.php'); 
          ?>
       </div>


      
    <div class="container" style=" color: white;">
        <h3>Akademia Górniczo-Hutnicza
      im. Stanisława Staszica w Krakowie </h3>
        <p>al. Mickiewicza 30
      30-059 Kraków. Telefon: +48 12 617 22 22 </p>

    </div>
     
    <div id="map"  class="col-sm-offset col-sm-12 col-sm-offset col-md-offset col-md-12 col-md-offset col-lg-offset col-lg-12 col-lg-offset col-xl-offset col-xl-12 col-xl-offset" style="width:100%; height:400px; margin-bottom: 140px; background:yellow">

      <script>
        function myMap() {
          var mapCanvas = document.getElementById("map");
          var mapOptions = {
            center: new google.maps.LatLng(50.0651008,19.9211097), zoom: 15
          };
          var map = new google.maps.Map(mapCanvas, mapOptions);
          var punkt  = new google.maps.LatLng(50.0651008,19.9211097);
          var markerImage = 'img/agh-mapa.png';
                var opcjeMarkera =
                {
                  position: punkt,
                  map: map,
                  title: "Pierwszy marker!",
                  icon: markerImage
                }
                var marker = new google.maps.Marker(opcjeMarkera);
        }
      </script>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBa1Md1fi1KVSwIRjYZ4PITeWzXNrjo9jQ&callback=myMap"></script>
    </div>


  </body>

  <?php
    include ('footer.php'); 
  ?>

</html>
