<?php

  session_start();

   if ((isset($_SESSION['online'])) && ($_SESSION['online']==true))
      {
    header('Location:spanel.php');
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
    <title>Zaloguj się !</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Stylesheet" type="text/css" href="bootstrap-3.3.7/css/style.css" />
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <style >
    
      body {
      margin: 0;
      background: url("img/student.jpg");
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


    <!-- Panel logowania -->
    <div class="container">

    <h2 style="text-align: center; color: white;">Witamy w panelu studenta !</h2><br/><br/><br/>

    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3" style="text-align: center; padding-bottom:80px; ">

    <form class="form-inline" role="form" action="sign_ins.php" method="post">
    <h3 style="text-align: center; color: white;">Zaloguj się na swoje konto</h3> <br/>

      <div class="form-group " >
        <label class="sr-only" for="exampleInputEmail2">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Podaj email">
      </div>
      <div class="form-group" >
        <label class="sr-only" for="exampleInputPassword2">Hasło</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword2" placeholder="Podaj hasło">
      </div>
      
      <button type="submit" class="btn btn-default">Zaloguj</button>
    </form>
    <?php
    if(isset($_SESSION['error'])) echo "<br>".$_SESSION['error'];
    ?>
    </div>

    </div>



  </body>

   <?php
  include ('footer.php');
  ?>

</html>