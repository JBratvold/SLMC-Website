<?php include 'elements/variables.php'; ?>
<?php include 'elements/incrementViewCount.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- HEAD -->
  <?php include 'elements/head.php'; ?>

</head>
<body>

  <!-- NAV BAR -->
  <?php include 'elements/navbar.php'; ?>

  <!-- CAROUSEL -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/carousel_ship1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carousel_ship2.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carousel_ship3.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- MAIN MESSAGE -->
  <div class="container">
    <div class="jumbotron" style="background:transparent !important">
      <h1>Sacred Legends Mining Corporation</h1>
      <p>Friendly players who strive to learn the game while having fun.</p>
    </div>
  </div>

  <!-- COLUMNS -->
  <div class="container">
    <div class="row">
      <!-- COLUMN 1 -->
      <div class="column"> 
        <hr><h1 >Featured Review</h1><hr>
        <p><i>Coming Soon...</i></p>
      </div>  
      <!-- COLUMN 2 -->
      <div class="column">
        <hr><h1>Like our Corporation?</h1><hr>
        <div class="rating">
          <!-- Thumbs up -->
          <div class="like grow">
            <form method="post">
              <button style="background: transparent;" name="thumbUp" id="thumbUp" class="fa fa-thumbs-up fa-2x like" aria-hidden="true"></button>
              <p id="numberOfUps"><?php get_up(); ?></p>
            </form>
          </div>
          <!-- Thumbs down -->
          <div class="dislike grow">
            <form method="post">
              <button style="background: transparent;" name="thumbDown" id="thumbDown" class="fa fa-thumbs-down fa-2x like" aria-hidden="true"></button>
              <p id="numberOfUps"><?php get_down(); ?></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <!-- SCRIPTS -->
  <?php include 'elements/scripts.php'; ?>
</body>
  <!-- FOOTER -->
  <?php include 'elements/footer.php'; ?>
</html>