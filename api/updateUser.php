<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php 
require "../config.php";
 
    
    $First_Name = $_POST['First_Name'];
    // $ID = $_POST['ide'];
    $Last_Name = $_POST['Last_Name'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];

    $query = "UPDATE medicalteamlogin SET First_Name = '$First_Name', Last_Name = '$Last_Name', Phone = '$Phone', Email = '$Email'
    WHERE Email = '$Email' AND Phone = '$Phone' ";
    $update = mysqli_query($conn, $query);
    if ($update) {
        header("Location: ../ModifyUsers.php");
        
    }else{
        echo '<div class="alert alert-danger" role="alert">
       Oops Someting went wrong';
    }


?>
<script src="../vendor/jquery/jquery.slim.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 