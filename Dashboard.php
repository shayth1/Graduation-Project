<?php
include './app_1.php';

loadHead("Dashboard");

LoadNavigation();

include 'session.php';

?>

<html>
    <head>
<!--       Css link 
      <link rel="stylesheet" type="text/css" href="dashboard.css"/> -->
      <!-- Bootstrap links for cards -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <div class="container">
             <div class="text-left">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-4">
                        <h1 style="font-family: Garamond"><b> Dashboard </b></h1>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>   
         </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <br> <br>
                    <div class="card" style="background-color: #EDF3FF;" >
                        <div class="card-body" style="font-family: Garamond">
                            <h5><b> Welcome back to your dashboard! </b></h5>
                            Feel free to follow up on your dearest patients on a daily basis, you efforts are very much appreciated.  
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"><img src="Images/Dashboard2.jpg" width="170"></div>
            </div>
                
        <div class="row">
            <div class="col-lg-2 text-center" style="padding: 10px;"></div>
            <div class="col-lg-4 text-center" style="padding: 10px;">
                <div class="card" >
                    <img class="card-img-top" src="images/c99172c17b83d3c620b997858351b2a5.gif" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Total Cases in Jordan</h4>
                        <p class="card-text">The total number of cases:<b> 269,806 </b></p>
                        <p class="card-text">The total number of cases for today:<b> 2221 </b></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center" style="padding: 10px;">
                <div class="card" >
                    <img class="card-img-top" src="images/mark.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Mark Zuckerberg</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>  
            </div>
            <div class="col-lg-2 text-center" style="padding: 10px;"></div>
        </div>
            
        <div class="row">      
       <div class="col-lg-3 text-center" style="padding: 10px;">
      <div class="card" >
      <img class="card-img-top" src="images/mark.jpg" alt="Card image" style="width:100%">
      <div class="card-body">
      <h4 class="card-title">Mark Zuckerberg</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
      </div>
  </div>
     <div class="col-lg-3 text-center" style="padding: 10px;">
      <div class="card" >
      <img class="card-img-top" src="images/mark.jpg" alt="Card image" style="width:100%">
      <div class="card-body">
      <h4 class="card-title">Mark Zuckerberg</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
      </div>
  </div>
               <div class="col-lg-3 text-center" style="padding: 10px;">
      <div class="card" >
      <img class="card-img-top" src="images/mark.jpg" alt="Card image" style="width:100%">
      <div class="card-body">
      <h4 class="card-title">Mark Zuckerberg</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
      </div>
  </div>
     <div class="col-lg-3 text-center" style="padding: 10px;">
      <div class="card" >
      <img class="card-img-top" src="images/mark.jpg" alt="Card image" style="width:100%">
      <div class="card-body">
      <h4 class="card-title">Mark Zuckerberg</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
      </div>
  </div>
  </div>
</div>
    </body>
</html>
