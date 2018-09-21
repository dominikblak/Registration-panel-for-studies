
<?php
session_start();

/*odesłanie od index.php użytkownika który nie podał hasła i loginu a adres wpisał " z palca" */
if ((!isset($_POST['email'])) || (!isset($_POST['password']))) {
	header('Location:index.php');
	exit();
}


?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Zaloguj się !</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="Stylesheet" type="text/css" href="bootstrap-3.3.7/css/style.css" />
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>



	<?php

	/*połączenie z bazą*/

	require_once "connect.php";
	/*obsługa błędów z połaczeniem za pomocą try&catch*/
	mysqli_report(MYSQLI_REPORT_STRICT);
	try {
		$connection = new mysqli($host,$db_user,$db_password,$db_name);
		if ($connection->connect_errno!=0) {
			throw new Exception(mysqli_connect_errno());
		}
		
	 


	else
	{


	$e_mail=$_POST['email'];
	$password=$_POST['password'];

	mysqli_set_charset($connection,"utf8");

	/*Sanityzacja kodu - enjce, funckja sprintf*/

		$e_mail = htmlentities($e_mail, ENT_QUOTES, "UTF-8");
		

		if ($result= @$connection->query(sprintf("SELECT * FROM candidates WHERE e_mail='%s' ",
			mysqli_real_escape_string($connection,$e_mail))))


	{

	$howm_users=$result->num_rows;

		if($howm_users>0)
			{
				
				$row=$result->fetch_assoc();

					if (password_verify($password, $row['pass'])) {
						
					
						

				$_SESSION['online']=true;
				$_SESSION['id']=$row['id'];
				$_SESSION['name']=$row['name'];
				$_SESSION['surname']=$row['surname'];
				$_SESSION['field_of_study']=$row['field_of_study'];
				
				unset($_SESSION['error']);
				$result->free_result();
				header('Location:spanel.php');
				}

			


			else

				//Poprawny login, nie poprawne hasło
			{
				 $_SESSION['error']=  
			'<div class="alert alert-danger alert-dismissable"  style="position: absolute; display: table;
	 		 width:100%; right: 0px; left: 0px;">
	         <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
	         Nie poprawny login lub hasło !
	        </div>';
			header('Location:student.php');


			}
		}
			
		else 
			{ 
				
				/* Użytkownika nie ma w bazie, zły login złe hasło*/
				 $_SESSION['error']=  
			'<div class="alert alert-danger alert-dismissable"  style="position: absolute; display: table;
	 		 width:100%; right: 0px; left: 0px;">
	         <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
	         Nie poprawny login lub hasło !
	        </div>';
			header('Location:student.php'); 
			
			
				
				


	          

			}	

	}
	else

			{
			throw new Exception($connection->error);	
			}
	$connection->close();

	}

	} //end try

	catch(Exception $e)
		{
			echo'<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o wizytę w innym terminie ! </br> Informacja developerska (sign_in.php - wiersz 146)</span>';
			// informacja developerska - w razie potrzeby do odkomentowania
			//echo '<br/>Informacja developerska: '.$e;
			
		}

	?>

</body>
</html>