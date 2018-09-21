<?php
session_start();
if ((!isset($_POST['login'])) || (!isset($_POST['passw']))) {
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
require_once "connect.php";
$con2= @new MySQLi($host,$db_user,$db_password,$db_name);
if($con2->connect_errno!=0)
{
	echo "Error: ".$con2->connect_errno;

}

else
{
$login=$_POST['login'];
$passw=$_POST['passw'];
mysqli_set_charset($con2,"utf8");

//sanityzacja kodu
$login = htmlentities($login, ENT_QUOTES, "UTF-8");

//dodawanie ręczne nowego konta admina z hashownaym hasłem - echo  hasloc w bpanel.php
$_SESSION['hasloc']=$passw;
$_SESSION['haslo_hash2']= password_hash($_SESSION['hasloc'],PASSWORD_DEFAULT);

if ($result2= @$con2->query(sprintf("SELECT * FROM backoffice WHERE user='%s'",
	mysqli_real_escape_string($con2,$login))))


	{ $howm_users2=$result2->num_rows;
			if($howm_users2>0)
			{ 
				$row2=$result2->fetch_assoc();

				if (password_verify($passw,$row2['passw'])) {
					
				

				$_SESSION['onlineb']=true;
				$_SESSION['$user']=$row2['user'];
				unset($_SESSION['errorb']);
				



				$result2->free_result();

			
				header('Location:bpanel.php');
					}
					else /* Użytkownika nie ma w bazie, zły login złe hasło*/
			 	{ $_SESSION['errorb']=  
			'<div class="alert alert-danger alert-dismissable"  style="position: absolute; display: table;
	 		 width:100%; right: 0px; left: 0px;">
	         <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
	         Nie poprawny login lub hasło !
	        </div>';
			header('Location:backoffice.php');
			}	
				}
			 else /* Użytkownika nie ma w bazie, zły login złe hasło*/
			 	{ $_SESSION['errorb']=  
			'<div class="alert alert-danger alert-dismissable"  style="position: absolute; display: table;
	 		 width:100%; right: 0px; left: 0px;">
	         <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
	         Nie poprawny login lub hasło !
	        </div>';
			header('Location:backoffice.php');
			}	
		}



$con2->close();
}


?>
</body>
</html>