<?php
include './app.php';

loadHead("Home");

LoadNavigation();
?>

<html>
    <head>
        <!--Bootstrap-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        -->
        <!--ToUseIcons-->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!--Cascading sheet-->
        <link rel="stylesheet" type="text/css" href="newCascadeStyleSheet.css"/>
        <!--Favicon-->     
        <link rel="shortcut icon" href="favicon.ico" />
        
        <meta charset="UTF-8">
        
        <title>Home</title>
    </head>
    <body>
            <div class="container">
             <div class="text-left">
                <div class="row">
                    <div class="col-lg-6">
                    <a href = "Home.php" target = "_self"><img src="Images/ProjectLogo.png" width="150"> </a>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4"></div>

                </div>
            </div>        
                <div class="text-center" style="font-family: Garamond">
                    <h1><b>Stay Safe, Stay Home</b></h1>
                    <h5>Quarantine Partner is the efficient system for a healthy society.</h5>
                </div> 
            </div>
       
        <div class="text-center" style="font-family: Garamond">
                 
        </div> 
            
      <div class="Form">
        <div style="position: relative">
            <p style="position: fixed; bottom: 0; width:100%; text-align: center">
                © 2020 Copyright: <a href="https://www.wise.edu.jo/" target = "_blank"> WISE University </a>
                <br>
                <i style="font-size:15px" class="fa">&#xf879; +962791444372</i>
                &nbsp;
                <i style="font-size:15px" class="fa">&#xf0e0; partner.quarantine@gmail.com</i>
        </div> 
      </div>  
      </body>
</html>

