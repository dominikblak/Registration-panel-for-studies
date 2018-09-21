<DOCTYPE html>
<html lang="en" >

  <head>
      <meta charset="UTF-8">
      <title>Galeria</title>
      <link rel="stylesheet" href="bootstrap-3.3.7/css/stylec.css">
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

      include ('menu.php'); 

      ?>
      <header>

        <div class="" style="margin-top: 70px; margin-bottom: 50px; "  >

          <div id="myCarousel" class="carousel slide" data-ride="carousel" >
          <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/1s.jpg" alt="">
              </div>

              <div class="item">
                <img src="img/2s.jpg" alt="">
              </div>

              <div class="item">
                <img src="img/3s.jpg" alt="">
              </div>

              <div class="item">
                <img src="img/4s.jpg" alt="">
              </div>

               <div class="item">
                <img src="img/5s.jpg" alt="">
              </div>

            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>  
      </div>

    </header>



  </body>


  <div >
  <?php
    include ('footer.php'); 
  ?>
   
  </div>
    
</html>
