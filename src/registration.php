<?php
session_start();

 /*odesłanie zalogowanego użytkownika do index.php*/

 if (isset($_SESSION['online']))
 {
	header('Location:registered.php');
	exit();
}
if ((isset($_SESSION['onlineb'])) && ($_SESSION['onlineb']==true))
    {
  header('Location:registered.php');
  exit();
  }

?>



<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>Zarejstruj się !</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Stylesheet" type="text/css" href="bootstrap-3.3.7/css/style.css" />
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <style >
      body {
      margin: 0;
      background: url("img/rejestracja.jpg");
       /*background-repeat: round;*/
       background-size: cover;
       background-position: center;
      }
    </style>

  </head>

  <body>


    <div style="margin-bottom: 40px;">
      <?php 
      include ('menu.php'); 
      ?>
    </div>



    <div class="container">

      <h1 style="text-align: center; color: white;">Witamy w panelu rejestracji !</h1><br/><br/><br/>
      <div class="row">
        <div class="col-md-offset-3 col-md-6 col-md-offset-3 col-sm-offset-3 col-sm-6 col-sm-offset-3">
        <a href="registration1.php" class="btn btn-primary btn-lg btn-block"  style="text-decoration: none;" role="button">Rejestracja na studia I stopnia</a><br/><br/><br/>
        <a href="registration2.php" class="btn btn-primary btn-lg btn-block"  style="text-decoration: none;" role="button">Rejestracja na studia II stopnia</a><br/><br/><br/>
        <a href="registration3.php" class="btn btn-primary btn-lg btn-block"  style="text-decoration: none;" role="button">Rejestracja na studia podyplomowe</a>
        </div>
      </br></br></br></br></br></br></br>
      </div>



    </div>



  </body>
  <?php
    include ('footer.php'); 
  ?>
</html>