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

    

    if(!isset($_SESSION['udanarejestracja']))
      {
        header('Location:index.php');
        exit();
      }
     else
      {
        unset($_SESSION['udanarejestracja']);
      } 

      //Usuwanie zmienych pamiętających wartośći formularza
      if (isset($_SESSION['mfimie'])) unset($_SESSION['mfimie']);
      if (isset($_SESSION['mfnazwisko'])) unset($_SESSION['mfnazwisko']);
      if (isset($_SESSION['mfdurodzenia'])) unset($_SESSION['mfdurodzenia']);
      if (isset($_SESSION['mfemail'])) unset($_SESSION['mfemail']);
      if (isset($_SESSION['mfhaslo'])) unset($_SESSION['mfhaslo']);
      if (isset($_SESSION['mfphaslo'])) unset($_SESSION['mfphaslo']);
      if (isset($_SESSION['mfplace'])) unset($_SESSION['mfplace']);
      if (isset($_SESSION['mfadres'])) unset($_SESSION['mfadres']);
      if (isset($_SESSION['mfndomu'])) unset($_SESSION['mfndomu']);
      if (isset($_SESSION['mfnlokalu'])) unset($_SESSION['mfnlokalu']);
      if (isset($_SESSION['mfkodp'])) unset($_SESSION['mfkodp']);
      if (isset($_SESSION['mftelefon'])) unset($_SESSION['mftelefon']);
      if (isset($_SESSION['mfszkola'])) unset($_SESSION['mfszkola']);
      if (isset($_SESSION['mfpunkty'])) unset($_SESSION['mfpunkty']);
      if (isset($_SESSION['mfkierunek'])) unset($_SESSION['mfkierunek']);
      if (isset($_SESSION['mfregulamin'])) unset($_SESSION['mfregulamin']);

      //Usuwanie błędów rejestracjii
      
      if (isset($_SESSION['eimie'])) unset($_SESSION['enazwisko']);
      if (isset($_SESSION['edurodzenia'])) unset($_SESSION['edurodzenia']);
      if (isset($_SESSION['eemail'])) unset($_SESSION['eemail']);
      if (isset($_SESSION['ehaslo'])) unset($_SESSION['ehaslo']);
      if (isset($_SESSION['ehaslo2'])) unset($_SESSION['ehaslo2']);
      if (isset($_SESSION['eplace'])) unset($_SESSION['eplace']);
      if (isset($_SESSION['eadres'])) unset($_SESSION['eadres']);
      if (isset($_SESSION['endomu'])) unset($_SESSION['endomu']);
      if (isset($_SESSION['ekodp'])) unset($_SESSION['ekodp']);
      if (isset($_SESSION['etelefon'])) unset($_SESSION['etelefon']);
      if (isset($_SESSION['eszkola'])) unset($_SESSION['eszkola']);
      if (isset($_SESSION['epunkty'])) unset($_SESSION['epunkty']);
      if (isset($_SESSION['eregulamin'])) unset($_SESSION['eregulamin']);
      if (isset($_SESSION['ecaptcha'])) unset($_SESSION['ecaptcha']);



      include ('menu.php'); 
      
    ?>



    
    <div class="container">
      <h3 style="color: white;">Dziękujemy za udaną rejestrację ! Możesz juz zalogowac się na swoje konto !</h3>
      <p><a href="student.php" style="color: red;">Zaloguj się na swoje konto !</a></p>

    </div>
  </body>

  <?php
    include ('footer.php'); 
  ?>

</html>
