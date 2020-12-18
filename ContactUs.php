<?php
include './app.php';

loadHead("Contact Us");

LoadNavigation();

include_once './config.php';

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="newCascadeStyleSheet2.css"/>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- To use icons -->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <!-- Css sheet -->
  <link rel="stylesheet" type="text/css" href="newCascadeStyleSheet.css"/>

<title>Contact Us Form</title>
<link rel="stylesheet" type="text/css" href="ContactFormCSS.css" />
</head>
<body>
    <div class="text-left">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
          <a href = "Home.php" target = "_self"><img src="Images/ProjectLogo.png" width="150"> </a>
          </div>
          <div class="col-lg-5">
           <br>
          <div class="form-container">
          <form method="post" action="" class="form-group">

            <div class="input-row">
                <label style="padding-top: 20px;"><b>Name</b></label>
                <br/> 
                <input type="text" class="input-field" name="Name" required/>
            </div>
            <div class="input-row">
                <label><b>Email</b></label>
                <br/> 
                <input type="text" class="input-field" name="Email" required/>
            </div>
            <div class="input-row">
                <label><b>Subject</b></label> 
                <br/> 
                <input type="text" class="input-field" name="Subject" required/>
            </div>
            <div class="input-row">
                <label><b>Message</b></label> 
                <br/>
                <textarea name="Message" class="input-field" cols="60" rows="6" required></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit" value="Send" />
            </div>
              <div>
                  <br>
                  <p> <b> The team will be in contact with you at the soonest! </b> </p>
              </div>
          </form>
          </div>
          </div>
          </div>
     </div>  
    </div>
    
    <div class="col-lg-4 text-center" style="padding: 10px;">
      <h4>Contact Us!</h4>
      <p class="card-text"><i style="font-size:15px" class="fa">&#xf879; +962791444372</i>
      <br>
      <i style="font-size:15px" class="fa">&#xf0e0; partner.quarantine@gmail.com</i></p>
    </div>
    
    <script src="vendor/jquery/jquery.slim.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php          
          if (isset($_REQUEST['send'])) {

                $Name = $_REQUEST['Name'];
                $Email = $_REQUEST['Email'];
                $Subject = $_REQUEST['Subject'];
                $Message = $_REQUEST['Message'];

                if (!empty($Name) && !empty($Email) && !empty($Subject) && !empty($Message)) {

                    $sql = "INSERT INTO contacttable(Name, Email, Subject, Message)"
                            . "VALUES ('$Name', '$Email','$Subject','$Message')";

                    if (mysqli_query($conn, $sql)) {
                        echo'<div class="text-center">
                        <div class="alert alert-info alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> Your Message has been sent successfully.
                        ';
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
        