<?php

function loadHead($title)
{
    echo'<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>'.$title.'</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
    
}
Function LoadNavigation()
{
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="Home.php">Quarantine Partner</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="Home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="loginModal" href="LoginPage.php">Login</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AboutUs.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ContactUs.php">Contact Us</a>
          </li>         
        </ul>
      </div>
    </div>
  </nav>';
}

Function LoadFooter()
{
    echo ' <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>'; 
}
