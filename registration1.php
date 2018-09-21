<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Zarejestruj się !</title>
  <script src='https://www.google.com/recaptcha/api.js'></script>
<head>

  <title>Rejestracja na studia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Stylesheet" type="text/css" href="bootstrap-3.3.7/css/style.css" />
<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<style >
  
  body {
  margin: 0;
  background: url("img/rejestracjas.jpg");
   /*background-repeat: round;*/
   background-size: cover;
   background-position: center;

  }

.wh {
  color: white;
}
</style>

</head>

<?php

session_start();

 /*odesłanie zalogowanego użytkownika do index.php*/

 if (isset($_SESSION['online']))
 {
  header('Location:registered.php');
  exit();
}

/*walidacja*/

if (isset($_POST['femail'])) {
 $all_ok=true;

$wimie=$_POST['fimie'];
      if ((strlen($wimie)<3) || (strlen($wimie)>20)) 
        {
          $all_ok=false;
          $_SESSION['eimie']='<div class="alert alert-danger" style= "margin-top: 10px;">Imie musi posiadać od 3 do 20 znaków !</div>';
        }

$wnazwisko=$_POST['fnazwisko'];
      if ((strlen($wnazwisko)<3) || (strlen($wnazwisko)>20)) 
        {
          $all_ok=false;
          $_SESSION['enazwisko']='<div class="alert alert-danger" style= "margin-top: 10px;">Nazwisko musi posiadać od 3 do 20 znaków !</div>';
        }

$wdurodzenia=$_POST['fdurodzenia'];
      
     $dzis = new DateTime();
     $dzisiaj=$dzis->format('Y-m-d');
     $pozostalo=strtotime($wdurodzenia) - strtotime($dzisiaj);


     
    
      

     
     if (($pozostalo>=0) || (strlen($wdurodzenia)<1))
     {
  $all_ok=false;
  $_SESSION['edurodzenia']='<div class="alert alert-danger" style= "margin-top: 10px;">Podaj datę urodzenia !</div>';


}  

$wemail = $_POST['femail'];
  
    //sanityzajca pola emial
    $emailb= filter_var($wemail, FILTER_SANITIZE_EMAIL);
    //walidajca pola emial
    if ((filter_var($emailb, FILTER_VALIDATE_EMAIL)==false) || ($emailb!=$wemail) || (strlen($emailb)<1))
    {  
      $all_ok=false;
  $_SESSION['eemail']='<div class="alert alert-danger" style= "margin-top: 10px;">Podaj poprawny adres e-mail !</div>';

  }


  $whaslo = $_POST['fhaslo'];
  $wphaslo = $_POST['fphaslo'];

    if ((strlen($whaslo)<8) || (strlen($whaslo)>20)) {

      $all_ok=false;
      $_SESSION['ehaslo']='<div class="alert alert-danger" style= "margin-top: 10px;">Hasło musi posiadać od 8 do 20 znaków !</div>';

    }
    if ($whaslo!=$wphaslo) {
      $all_ok=false;
      $_SESSION['ehaslo2']='<div class="alert alert-danger" style= "margin-top: 10px;">Podane hasła nie są identyczne !</div>';
    }
    $haslo_hash=password_hash($whaslo,PASSWORD_DEFAULT);

$wplace=$_POST['fplace'];
      if ((strlen($wplace)<3) || (strlen($wplace)>30)) 
        {
          $all_ok=false;
          $_SESSION['eplace']='<div class="alert alert-danger" style= "margin-top: 10px;">Podaj nazwę miejscowości !</div>';
        }
    

$wadres=$_POST['fadres'];
      if ((strlen($wadres)<3) || (strlen($wadres)>30)) 
        {
          $all_ok=false;
          $_SESSION['eadres']='<div class="alert alert-danger" style= "margin-top: 10px;">Podaj nazwę ulicy !</div>';
        }

$wndomu=$_POST['fndomu'];
      

      
    
     if (($wndomu<1) || (empty($wndomu)))
     {
  $all_ok=false;
  $_SESSION['endomu']='<div class="alert alert-danger" style= "margin-top: 10px;">Podaj numer domu !</div>';

    }


 
$wnlokalu=$_POST['fnlokalu'];
$wkodp=$_POST['fkodp'];


if ( !preg_match('/^[0-9]{2}-?[0-9]{3}$/Du', $wkodp) )

{
$all_ok=false;
  $_SESSION['ekodp']='<div class="alert alert-danger" style= "margin-top: 10px;">Podaj kod pocztowy (xx-xxx) !</div>';
}

$wtelefon=$_POST['ftelefon'];

if (empty($wtelefon)) {
   $all_ok=false;
  $_SESSION['etelefon']='<div class="alert alert-danger" style= "margin-top: 10px;">Podaj numer telefonu (xxx-xxx-xxx) !</div>';

  
}

$wszkola=$_POST['fszkola'];

if (strlen($wszkola)<3) 
  {
          $all_ok=false;
          $_SESSION['eszkola']='<div class="alert alert-danger" style= "margin-top: 10px;">Podaj nazwę ukończonej szkoły średniej !</div>';
        }
  


$wpunkty=$_POST['fpunkty'];

  if (empty($wpunkty)) {

    $all_ok=false;
          $_SESSION['epunkty']='<div class="alert alert-danger" style= "margin-top: 10px;">Podaj liczbę punktów uzyskanych na maturze (1-100) ! </div>';
  }

if (!isset($_POST['regulamin'])) {
  $all_ok=false;
          $_SESSION['eregulamin']='<div class="alert alert-danger" style= "margin-top: 10px;">Zaakceptuj regulamin ! </div>';
}


$wkierunek=$_POST['fkierunek'];

// walidacja reCaptchy
$secret="6LeDPTQUAAAAAEWwksYK8gcSh-GeUgX8qLG8ZsW6";
$check=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
//dekodowanie odpowiedzi w Json
$reply=json_decode($check);
if ($reply->success==false) {
  $all_ok=false;
          $_SESSION['ecaptcha']='<div class="alert alert-danger" style= "margin-top: 10px;">Potwierdź że nie jesteś bootem ! </div>';
}

//zapamiętaj wprowadzone dane
$_SESSION['mfimie']=$wimie;
$_SESSION['mfnazwisko']=$wnazwisko;
$_SESSION['mfdurodzenia']=$wdurodzenia;
$_SESSION['mfemail']=$wemail;
$_SESSION['mfhaslo']=$whaslo;
$_SESSION['mfphaslo']=$wphaslo;
$_SESSION['mfplace']=$wplace;
$_SESSION['mfadres']=$wadres;
$_SESSION['mfndomu']=$wndomu;
$_SESSION['mfnlokalu']=$wnlokalu;
$_SESSION['mfkodp']=$wkodp;
$_SESSION['mftelefon']=$wtelefon;
$_SESSION['mfszkola']=$wszkola;
$_SESSION['mfpunkty']=$wpunkty;
$_SESSION['mfkierunek']=$wkierunek;
if (isset($_POST['regulamin']))$_SESSION['mfregulamin']=true;





//rzucanie wyjątkiem w przypadku błędu serwera

require_once "connect.php";
mysqli_report(MYSQLI_REPORT_STRICT);
try {
  $connection = @new mysqli($host,$db_user,$db_password,$db_name);
  if($connection->connect_errno!=0) 
  {
  throw new Exception(mysqli_connect_errno());
   }

  

//walidacja powtarzlności adresu email
  else {
    $result=$connection->query("SELECT id FROM candidates WHERE e_mail='$wemail'");
      if (!$result) throw new Exception($connection->error);
      $how_many_mails=$result->num_rows;
        if ($how_many_mails>0) {
          $all_ok=false;
           $_SESSION['eemail']='<div class="alert alert-danger" style= "margin-top: 10px;">Istnieje już konto przypisane do tego adresu e-mail !</div>';
         }
  if($all_ok==true) 
    {
      //kodowanie znaków podczas połączenia
      $connection->set_charset("utf8");

      if ($connection->query("INSERT INTO candidates VALUES(NULL, '$wimie','$wnazwisko','$haslo_hash','$wdurodzenia','$wplace','$wadres','$wndomu','$wnlokalu', '$wkodp','$wtelefon','$wemail','$wszkola','$wpunkty','$wkierunek')")) 
      {
        $_SESSION['udanarejestracja']=true;

          header('Location:welcome.php');
      }
      else {
        throw new Exception($connection->error);
        
      }

    }

$connection->close();
  }
}


 catch (Exception $e) {
  echo '<div class="alert alert-danger" style= "margin-top: 10px;">Błąd serwera. Przepraszamy za niedogodnośći i prosimy o rejestrację w  innmym terminie.<br/> Informacja developerska: registraion1.php</div>';

//Informacja developerska - w razie potrzeby do odkomentwania
  //echo '<br/>Informacja developerska : '.$e;
  
  }

}

?>






<body class="wh">
 <div style="margin-bottom: 40px;">
  <?php 
  

  include ('menu.php'); 

  ?>
</div>


<br/><br/>


<div class=" container col-lg-offset-4 col-lg-4 col-lg-offset-4
col-md-offset-4 col-md-4 col-md-offset-4
col-sm-offset-4 col-sm-4 col-sm-offset-4
 " style="padding-bottom: 100px;">
<form role="form" method="post">
  <div class="form-group">
    <h3 style="padding-bottom: 20px; text-align: center;">Rejestracja na studia 1 stopnia</h3>
    <label for="usr">Imie:</label>

  <input type="text" value="
<?php
if (isset($_SESSION['mfimie'])) {
echo $_SESSION['mfimie'];
unset($_SESSION['mfimie']);}
?>
" class="form-control" name="fimie" placeholder="Podaj imię">
  <?php
        if (isset($_SESSION['eimie'])) 
        {
          echo '<div class="error">'.$_SESSION['eimie'].'</div>';
          unset($_SESSION['eimie']);
          
        }
      ?>
  </div>
  <div class="form-group" >
    <label for="usr">Nazwisko:</label>
  <input type="text" value="
<?php
if (isset($_SESSION['mfnazwisko'])) {
echo $_SESSION['mfnazwisko'];
unset($_SESSION['mfnazwisko']);}
?>
" class="form-control" name="fnazwisko" placeholder="Podaj nazwisko">
  <?php
        if (isset($_SESSION['enazwisko'])) 
        {
          echo '<div class="error">'.$_SESSION['enazwisko'].'</div>';
          unset($_SESSION['enazwisko']);
          
        }
      ?>
  </div>
    <div class="form-group">
    <label for="usr">Data urodznia:</label>
  <input type="date" value="
<?php
if (isset($_SESSION['mfdurodznia'])) {
echo $_SESSION['mfdurodznia'];
unset($_SESSION['mfdurodznia']);}
?>
"  min="1890-01-01" 
  class="form-control" name="fdurodzenia">
  <?php
      

        if (isset($_SESSION['edurodzenia'])) 
        {
          echo '<div class="error">'.$_SESSION['edurodzenia'].'</div>';
          unset($_SESSION['edurodzenia']);
          
        }
      ?>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" value="
<?php
if (isset($_SESSION['mfemail'])) {
echo $_SESSION['mfemail'];
unset($_SESSION['mfemail']);}
?>
" class="form-control" name="femail" placeholder="Podaj adres Email">
     <?php
      

        if (isset($_SESSION['eemail'])) 
        {
          echo '<div class="error">'.$_SESSION['eemail'].'</div>';
          unset($_SESSION['eemail']);
          
        }
      ?>

  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Hasło:</label>
    <input type="password" value="
<?php
if (isset($_SESSION['mfhaslo'])) {
echo $_SESSION['mfhaslo'];
unset($_SESSION['mfhaslo']);}
?>
" class="form-control" name="fhaslo" placeholder="Twoje tajne hasło">
<?php
      

        if (isset($_SESSION['ehaslo'])) 
        {
          echo '<div class="error">'.$_SESSION['ehaslo'].'</div>';
          unset($_SESSION['ehaslo']);
          
        }
      ?>

  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Powtórz hasło:</label>
    <input type="password" value="
<?php
if (isset($_SESSION['mfphaslo'])) {
echo $_SESSION['mfphaslo'];
unset($_SESSION['mfphaslo']);}
?>
" class="form-control" name="fphaslo" placeholder="Powtórz hasło">
<?php
      

        if (isset($_SESSION['ehaslo2'])) 
        {
          echo '<div class="error">'.$_SESSION['ehaslo2'].'</div>';
          unset($_SESSION['ehaslo2']);
          
        }
      ?>

  </div>

  <div class="form-group">
    <label for="usr">Adres zamieszkania</label><br/>
    <label for="usr"> Miejscowowść:</label>
    <textarea 

 class="form-control"  rows="1" name="fplace" placeholder="Podaj nazwę miejscowości"><?php
if (isset($_SESSION['mfplace'])) {
echo $_SESSION['mfplace'];
unset($_SESSION['mfplace']);}
?></textarea>
    <?php
      

        if (isset($_SESSION['eplace'])) 
        {
          echo '<div class="error">'.$_SESSION['eplace'].'</div>';
          unset($_SESSION['eplace']);
          
        }
      ?>
  </div>
  <div class="form-group">
    <label for="usr">Ulica: </label>
    <textarea 

 class="form-control" rows="1" name="fadres" placeholder="Podaj nazwę ulicy"><?php
if (isset($_SESSION['mfadres'])) {
echo $_SESSION['mfadres'];
unset($_SESSION['mfadres']);}
?></textarea>
     <?php
      

        if (isset($_SESSION['eadres'])) 
        {
          echo '<div class="error">'.$_SESSION['eadres'].'</div>';
          unset($_SESSION['eadres']);
          
        }
      ?>
  </div>
  <div class="form-group">
    <label for="usr">Numer domu:</label><br/>
  <input type="varchar" value="
<?php
if (isset($_SESSION['mfndomu'])) {
echo $_SESSION['mfndomu'];
unset($_SESSION['mfndomu']);}
?>
"  min="1" name="fndomu" style="width: 100px; color: black;" >
  <?php
      

        if (isset($_SESSION['endomu'])) 
        {
          echo '<div class="error">'.$_SESSION['endomu'].'</div>';
          unset($_SESSION['endomu']);
          
        }
      ?>
  </div>
   <div class="form-group">
    <label for="usr">Numer lokalu:</label><br/>
  <input  type="varchar" value="
<?php
if (isset($_SESSION['mfnlokalu'])) {
echo $_SESSION['mfnlokalu'];
unset($_SESSION['mfnlokalu']);}
?>
"   min="1" name="fnlokalu" style="width: 100px; color: black;">
  </div>
  <div class="form-group">
    <label for="usr">Kod pocztowy:</label><br/>
 <input type="varchar" value="
<?php
if (isset($_SESSION['mfkodp'])) {
echo $_SESSION['mfkodp'];
unset($_SESSION['mfkodp']);}
?>
"  name="fkodp" pattern="^[0-9]{2}-[0-9]{3}$" placeholder="__-___" style="width: 100px; color: black;">
 <?php
      

        if (isset($_SESSION['ekodp'])) 
        {
          echo '<div class="error">'.$_SESSION['ekodp'].'</div>';
          unset($_SESSION['ekodp']);
          
        }
      ?>
  </div>
 <div class="form-group">
    <label for="usr">Numer telefonu:</label><br/>
 <input type="tel" value="
<?php
if (isset($_SESSION['mftelefon'])) {
echo $_SESSION['mftelefon'];
unset($_SESSION['mftelefon']);}
?>
"  name="ftelefon" style="width: 100px; color: black;" placeholder="___-___-___" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" />

  <?php
      

        if (isset($_SESSION['etelefon'])) 
        {
          echo '<div class="error">'.$_SESSION['etelefon'].'</div>';
          unset($_SESSION['etelefon']);
          
        }
      ?>
  </div>

 
   <div class="form-group">
    <label for="usr">Ukończona szkoła średnia:</label>
    <textarea class="form-control" rows="2" name="fszkola" placeholder="Podaj nazwę ukończonej szkoły średniej"><?php
if (isset($_SESSION['mfszkola'])) {
echo $_SESSION['mfszkola'];
unset($_SESSION['mfszkola']);}
?></textarea>
<?php
      

        if (isset($_SESSION['eszkola'])) 
        {
          echo '<div class="error">'.$_SESSION['eszkola'].'</div>';
          unset($_SESSION['eszkola']);
          
        }
      ?>

  </div>
  <div class="form-group">
    <label for="usr">Liczba uzyskanych punktów na maturze:</label><br/>
  <input type="number" value="
<?php
if (isset($_SESSION['mfpunkty'])) {
echo $_SESSION['mfpunkty'];
unset($_SESSION['mfpunkty']);}
?>
"  min="1" max="100"  name="fpunkty" style=" color: black; ">
  <?php
      

        if (isset($_SESSION['epunkty'])) 
        {
          echo '<div class="error">'.$_SESSION['epunkty'].'</div>';
          unset($_SESSION['epunkty']);
          
        }
      ?>

  </div>
  <div class="form-group">
    <label for="usr">Kierunek studiów:</label>
  <select value="
<?php
if (isset($_SESSION['mfkierunek'])) {
echo $_SESSION['mfkierunek'];
unset($_SESSION['mfkierunek']);}
?>
"  class="form-control" name="fkierunek"  style="width: auto;"> 

  <option>Informatyka</option>
  <option>Elektronika</option>
  <option>Matematyka</option>
  </select>
  </div>




  <div class="checkbox">
    <label>
      <input type="checkbox" name="regulamin" <?php
if (isset($_SESSION['mfregulamin'])) 
{
echo "checked";
unset($_SESSION['fr_regulamin']);
}
?>
 > Akceptuje regulamin
    </label>
 <?php
      

        if (isset($_SESSION['eregulamin'])) 
        {
          echo '<div class="error">'.$_SESSION['eregulamin'].'</div>';
          unset($_SESSION['eregulamin']);
          
        }
      ?>
  </div>
  <div class="g-recaptcha" data-sitekey="6LeDPTQUAAAAALasWoQG7s_L0fK0VbRf0AYe1WVp" style="padding-bottom: 20px;">
  </div>
   <?php
      

        if (isset($_SESSION['ecaptcha'])) 
        {
          echo '<div class="error">'.$_SESSION['ecaptcha'].'</div>';
          unset($_SESSION['ecaptcha']);
          
        }
        ?>
  <button type="submit" name="regulations" class="btn btn-primary">Zarejestruj się !</button>
</form>
</div>







</body>
<div style="color: black;">
 <?php
include ('footer.php');
?>
</div>
</html>