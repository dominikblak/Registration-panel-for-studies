<?php
  session_start();
   if (!isset($_SESSION['onlineb']))
   {
    header('Location:index.php');
    exit();
  }
 
?>


<!DOCTYPE html>
<html lang="pl">

<head>
  <title>Panel backoffice</title>

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

      .wh {
        color: white;
      }
  </style>
</head>


<body>


    <?php
    include ('menu.php');
    ?>


    <div class="container wh">

      <h3 style="text-align: center;"><?php
          echo"<p> Witaj "."<span style='color:red;'>".$_SESSION['$user'].""."</span> w panelu backoffice ! [ <a href='logout.php' style='color: red;' >Wyloguj się</a> ]";
          ?></h3><br/><br/><br/>
      <div class="row">
        <div class="col-md-offset-3 col-md-6 col-md-offset-3 col-sm-offset-3 col-sm-6 col-sm-offset-3">


        <a href="list1.php" class="btn btn-info btn-lg btn-block"  style="text-decoration: none;" role="button">Kandydaci na studia I stopnia</a><br/><br/><br/>
        <a href="list2.php" class="btn btn-info btn-lg btn-block"  style="text-decoration: none;" role="button">Kandydaci na studia II stopnia</a><br/><br/><br/>
        <a href="list3.php" class="btn btn-info btn-lg btn-block"  style="text-decoration: none;" role="button">Kandydaci na studia podyplomowe</a>

        <?php
        //dla deva: hashowane hasło:
        //echo $_SESSION['haslo_hash2'];
        ?>

        </div>
      </div>

    </div>



</body>

<?php
  include ('footer.php'); 
?>
</html>