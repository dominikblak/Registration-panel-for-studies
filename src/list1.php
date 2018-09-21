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
    <title>Rejestracja na studia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Stylesheet" type="text/css" href="bootstrap-3.3.7/css/style.css" />
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container">
      <h3>Lista zarejestrowanych kandydatów na studia 1 stopnia</h3>
        <p><div class=" col-md-offset-4 col-md-4 col-md-offset-4 col-sm-offset-4 col-sm-4 col-sm-offset-4 col-lg-offset-4 col-lg-4 col-lg-offset-4 col-xl-offset-4 col-xl-4 col-xl-offset-4">

        <p><h1><a href="bpanel.php" class="btn btn-primary btn-lg btn-block" style="text-align: center;position:relative;">Powrót</a></h1></p>
        </div></p>

    <?php
      include ('base_pdo.php');
      $dane= $pdo->query( "SELECT * FROM candidates where field_of_study='Informatyka'or field_of_study='Elektronika' or field_of_study='Matematyka' " );

          echo '<table border=3>';
          echo '<tr>';
              echo '<th>Imie</th>';
              echo '<th>Nazwisko</th>';
              echo '<th>Data urodzenia</th>';
              echo '<th>Miasto</th>';
              echo '<th>Ulica</th>';
              echo '<th>Nr domu</th>';
              echo '<th>Nr lokalu</th>';
              echo '<th>Kod pocztowy</th>';
              echo '<th>Telefon</th>';
              echo '<th>E-mail</th>';
              echo '<th>Szkoła wyższa</th>';
              echo '<th>Liczba pkt.</th>';
              echo '<th>Kierunek</th>';
              echo '<th>Opcje</th>';

          echo '</tr>';    

        foreach($dane->fetchAll() as $value) {
          
        
          //wiersze wstawiane przez pętle
          echo "<tr>";  
              echo "<td>".$value['name']."</td>";
              echo "<td>".$value['surname']."</td>";
              echo "<td>".$value['date_of_birth']."</td>";
              echo "<td>".$value['city']."</td>";
              echo "<td>".$value['street']."</td>";
              echo "<td>".$value['no_house']."</td>";
              echo "<td>".$value['no_premises']."</td>";
              echo "<td>".$value['postal_code']."</td>";
              echo "<td>".$value['telephone']."</td>";
              echo "<td>".$value['e_mail']."</td>";
              echo "<td>".$value['high_school']."</td>";
              echo "<td>".$value['amount_of_points']."</td>";
              echo "<td>".$value['field_of_study']."</td>";
              echo '<td><a href="delete1.php?id='.$value['id'].'">Usuń</a></td>';

          echo "</tr>";

        }
      echo "</table>";
   
    ?>

    </div>
  </body>



</html>
