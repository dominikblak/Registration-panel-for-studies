<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>Rejestracja na studia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="menu/css/sm-core-css.css" rel="stylesheet" type="text/css" />
    <link href="menu/addons/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="menu/jquery.smartmenus.js"></script>
    <script type="text/javascript" src="menu/addons/bootstrap/jquery.smartmenus.bootstrap.js"></script>
  </head>

  <body>
    <div class="navbar navbar-default navbar-fixed-top " role="navigation" style="padding-right:20px;">
      <div class="navbar-header ">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"> <img src="img/agh-logo.png" class="img-fluid"></a>

              <a class="navbar-brand" href="index.php">Panel rejestracji AGH</a>
      </div>

      <div class="navbar-collapse collapse">

              <!-- Left nav -->
        <ul class="nav navbar-nav">
                <li><a href="school.php">O uczelni</a></li>
                <li><a href="gallery.php">Galeria</a></li>
                <li><a href="contact.php">Kontakt</a></li>
                <li><a href="#">Kierunki <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Studia I stopnia<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="courses/informatyka.php">Informatyka</a></li>
                        <li><a href="courses/elektronika.php">Elektronika</a></li>
                        <li><a href="courses/matematyka.php">Matematyka</a></li>
                        
                      </ul>
                    </li>
                    <li><a href="#">Studia II stopnia<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                         <li><a href="courses/teleinformatyka.php">Teleinformatyka</a></li>
                         <li><a href="courses/elektrotechnika.php">Elektrotechnika</a></li>
                         <li><a href="courses/zarzadzanie.php">Zarządzanie</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Studia podyplomowe<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="courses/programowanie.php">Programowanie</a></li>
                        <li><a href="courses/zarzadzaniep.php">Zarządzanie projektami</a></li>
                        <li><a href="courses/systemybd.php">Systemy baz danych</a></li>
                      </ul>
                    </li>      

                  </ul>
                </li>
        </ul>

              <!-- Right nav -->
        <ul class="nav navbar-nav navbar-right">
                <li><a href="registration.php"><span class="glyphicon glyphicon-pencil"></span> Zarejestruj się !</a></li>
                <li><a href="student.php"><span class="glyphicon glyphicon-education"></span> Panel studenta</a></li>
          <li><a href="backoffice.php"><span class="glyphicon glyphicon-briefcase"></span> Panel Backoffice</a></li>
                
        </ul>

      </div><!--/.nav-collapse -->
          
    </div>
          
   
  </body>
</html>



