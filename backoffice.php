<?php

session_start();
if ((isset($_SESSION['online'])) && ($_SESSION['online']==true))
    {
  header('Location:registered.php');
  exit();
  }
  if ((isset($_SESSION['onlineb'])) && ($_SESSION['onlineb']==true))
    {
  header('Location:bpanel.php');
  exit();
  }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
<title>Zaloguj się !</title>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Stylesheet" type="text/css" href="bootstrap-3.3.7/css/style.css" />
  <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <style >
    
    body {
    margin: 0;
    background: url("img/backoffice.jpg");
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

  <h2 style="text-align: center; color: white;">Witamy w panelu backoffice !</h2><br/><br/><br/>

  <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3" style="text-align: center; padding-bottom:80px; ">

  <form class="form-inline" role="form" action="sign_inb.php" method="post">
      <h3 style="text-align: center; color: white;">Zaloguj się na swoje konto</h3> <br/>

        <div class="form-group ">
          <label class="sr-only" >Login</label>
          <input type="text" class="form-control" name="login"  placeholder="Podaj login">
        </div>
        <div class="form-group" >
          <label class="sr-only" >Hasło</label>
          <input type="password" class="form-control" name="passw"  placeholder="Podaj hasło">
        </div>
        
        <button type="submit" class="btn btn-default">Zaloguj</button>
  </form>

  <?php
  if(isset($_SESSION['errorb'])) echo "<br>".$_SESSION['errorb'];
  ?>
  </div>

  </div>



</body>

<?php
include ('footer.php');
?>

</html>