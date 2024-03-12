<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top" id="navbar">
  <!-- Logo -->
  <div class="logo-image"><a href="index.php"><img id="logo" src="img/logo.png"></a></div>
  <a class="navbar-brand" href="index.php">Sacred Legends Mining Corporation</a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item <?php if ($activePage =="Members") {?> active <?php } ?>"><a class="nav-link" href="Members.php">Members</a></li>
    <li class="nav-item <?php if ($activePage =="Other") {?> active <?php } ?>"><a class="nav-link" href="#">Other</a></li>
    <!-- Dropdown -->
    <li class="nav-item dropdown <?php if ($activePage =="MiningOverview"||$activePage =="PriceCalculator"||$activePage =="YieldCalculator") {?> active <?php } ?>">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Mining</a>
      <div class="dropdown-menu">
        <a class="dropdown-item <?php if ($activePage =="MiningOverview") {?> active <?php } ?>" href="MiningOverview.php">Overview</a>
        <a class="dropdown-item <?php if ($activePage =="PriceCalculator") {?> active <?php } ?>" href="PriceCalculator.php">Price Calculator</a>
        <a class="dropdown-item <?php if ($activePage =="YieldCalculator") {?> active <?php } ?>" href="YieldCalculator.php">Yield Calculator</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown <?php if ($activePage =="CombatSitesOverview") {?> active <?php } ?>">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Combat Sites</a>
      <div class="dropdown-menu">
        <a class="dropdown-item <?php if ($activePage =="CombatSitesOverview") {?> active <?php } ?>" href="CombatSitesOverview.php">Overview</a>
      </div>
    </li>
    <li class="nav-item <?php if ($activePage =="Feedback") {?> active <?php } ?>"><a class="nav-link" href="Feedback.php">Feedback</a></li>
  </ul>
</nav>