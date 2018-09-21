<!DOCTYPE html>
<html lang="pl">
  <head>
      <title>Rejestracja na studia</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="Stylesheet" type="text/css" href="bootstrap-3.3.7/css/style.css" />
      <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
      <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
      <style>
        body, html {
          height: 100%;
          margin: 0;
        }

        .bg {
       
          background-image: url("img/gmach.jpg");
          height: 100%; 
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
    </style>
  </head>

  <body>

      <?php 
      session_start();
      include ('menu.php'); 
      ?> 
      <section class="  col-sm-offset col-sm-12 col-sm-offset col-md-offset col-md-12 col-md-offset col-lg-offset col-lg-12 col-lg-offset col-xl-offset col-xl-12 col-xl-offset bg">


        <div style="position:absolute; top: 7%; left: 7.1%; bottom:10%; right:7.1%; color: white;">
     
         <h1 style="text-align: center;" class="">Akademia Górniczo- Hutnicza w Krakowie</h1>
          <br/></br></br></br></br></br>
      
          <div class=" col-md-offset-4 col-md-4 col-md-offset-4 col-sm-offset-4 col-sm-4 col-sm-offset-4 col-lg-offset-4 col-lg-4 col-lg-offset-4 col-xl-offset-4 col-xl-4 col-xl-offset-4">

         <p><h1><a href="registration.php" class="btn btn-success btn-lg btn-block" style="text-align: center;position:relative;">Studiuj u nas !</a></h1></p>
        </div>

       </section>      

  </body>

  <?php
    include ('footer.php'); 
  ?>
</html>
