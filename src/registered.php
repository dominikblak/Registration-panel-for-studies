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
    <?php 
    session_start();
    include ('menu.php'); 
    ?>

    <div class="container" style="color: white;">
    <h3>Jesteś już zalogowany ! <a href='logout.php' style="color: red;">[Wyloguj się]</a> </h3>
    </div>

  </body>

  <?php
    include ('footer.php'); 
  ?>

</html>
