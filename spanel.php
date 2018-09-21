<?php
session_start();

 /*odesłanie zalogowanego użytkownika do index.php*/

 if (!isset($_SESSION['online']))
 {
  header('Location:index.php');
  exit();
}


?>


<!DOCTYPE html>
<html lang="pl">

  <head>
    <title>Panel studenta</title>
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
    include ('menu.php');
    ?>
      <div class="container" style="color: white;">
        <?php
        
        /*powitanie i wylogowanie się*/
        
        echo"<h3> Witaj ".$_SESSION['name']." ".$_SESSION['surname']." !  [ <a href='logout.php' style='color:red;'>Wyloguj się</a> ]</h3>"; 
        echo"<h3> Jesteś zarejestrowany na studia o kierunku: "."<span style='color:red;'>" .$_SESSION['field_of_study'];
        /*wylogowanie*/
        



        ?> 
      </div>

  </body>

  <?php
    include ('footer.php'); 
  ?>
</html>