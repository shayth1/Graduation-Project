<?php
include './app.php';

loadHead("Login");

LoadNavigation();

include_once './config.php';  

include 'session.php';
?>

<html>
    <head>
         <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="newCascadeStyleSheet2.css"/>

       <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
   
    <div class="container">
      <div class="row">
      <div class="col-lg-4">
      <a href = "Home.php" target = "_self"><img src="Images/ProjectLogo.png" width="150"> </a>
      </div>

    <form method="post" action="" class="form-group"> 
        <br>
        <h3>Welcome Back!</h3>
        <br>
        <input type="Email" name="Email" placeholder="Email" class="form-control" required/>
        <br>
        <input type="password" name="Password" placeholder="Password" class="form-control" required/>
        <br>
        Forgot Password?<a href="ContactUs.php"> Contact Us</a>
        <br> <br> 
        <div  class="text-right">
        <input type="submit" value="Login" name="InsertButton" class="btn btn-info"/> 
        <button class="btn btn-dark" type="reset">Reset</button> 
        </div>
        <br>
        Don't have an account yet?<a href="CreateAccount.php"> Register now!</a>
    </form>

        <div class="col-lg-4">
            <div class="col-lg-4">
                <div style="position: relative">
                    <p style="position: fixed; bottom: 0; width:100%; text-align: right">
                        <img src="Images/Background.png">
                    </p>
                </div>
            </div>
        </div>
       </div>
    </div>
        
        
        
        <?php
        
        
    $Email = @$_POST["Email"];
    $password = @$_POST["Password"];
    $button = @$_POST["InsertButton"];
    
    $_SESSION['Email']="$Email";
  

    if (isset ($_POST["InsertButton"])){    
        $select = "SELECT * FROM  medicalteamlogin WHERE Email = '$Email' and Password ='$password'";

        $result10 = mysqli_query($conn , $select);
        
        if (mysqli_num_rows($result10)==1){
            header("location:Dashboard.php");
        }
       
        else {
                    echo '<div class="text-center">
                       <div class="alert alert-danger alert-dismissible fade show">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                       <strong>Error!</strong> Wrong email or password, please try again.
                       </div>
                       </div>';
                }
            

                    mysqli_close($conn);
                } 
            ?>
        

      <script src="vendor/jquery/jquery.slim.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
     
    </body>
</html>
