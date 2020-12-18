<?php
include './app.php';

loadHead("Create an account");

LoadNavigation();

include_once './config.php';  
?>

<html>
    <head>
          <link rel="stylesheet" type="text/css" href="newCascadeStyleSheet2.css"/>
          <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

             
        <meta charset="UTF-8">
        <title>Create Account</title>
       
    </head>
    <body>
      
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
        <a href = "Home.php" target = "_self"><img src="Images/ProjectLogo.png" width="150"> </a>
        </div>
          
    <form method="post" action="" class="form-group"> 
        <br>
        <h3>Register Here!</h3>
        <br>
        <input type="text" name="First_Name" placeholder="First Name" class="form-control" required />
        <br/>
        <input type="text" name="Last_Name" placeholder="Last Name" class="form-control" required />
        <br/>
        <input type="Email" name="Email" placeholder="Email" class="form-control" required />
        <br/>
        <input type="text" name="Phone" placeholder="Phone" class="form-control" required />
        <br/>
        <input type="password" name="Password" placeholder="Password" class="form-control" required />
        <br/>
        <div  class="text-right">
       <input type="submit" value="Create Account" name="InsertButton" class="btn btn-info"/>
       <button class="btn btn-dark" type="reset">Reset</button> 
        </div>
        <br>
       Already have an account? <a href="LoginPage.php">Login here</a>    
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
        if (isset($_REQUEST['InsertButton'])) {

            $firstName = $_REQUEST['First_Name'];
            $lastName = $_REQUEST['Last_Name'];
            $email = $_REQUEST['Email'];
            $phone = $_REQUEST['Phone'];
            $password = $_REQUEST['Password'];

            if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone) && !empty($password)) {

                $sql = "INSERT INTO medicalteamlogin(first_name,last_name,email, phone, password)"
                        . "VALUES ('$firstName','$lastName','$email','$phone','$password')";

                if (mysqli_query($conn, $sql)) {
                    echo'<div class="text-center">
                        <div class="alert alert-info alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> Account created successfully.
                        </div>
                        <br>
                        <a href="LoginPage.php"><p style="text-align:center">Click here to login</a>
                        </div>';
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

                mysqli_close($conn);
            } else {
                echo '<div class="text-center">
                       <div class="alert alert-danger alert-dismissible fade show">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                       <strong>Error!</strong> Please fill in all the needed information.
                       </div>
                       </div>';
            }
        }
        ?> 

  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>
