<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php 
require "../config.php";

    $ID = $_POST['ide'];
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];

    $query = "UPDATE medicalteamlogin SET First_Name = '$First_Name', Last_Name = '$Last_Name', Phone = '$Phone', Email = '$Email'
    WHERE ID = '$ID' ";
    $update = mysqli_query($conn, $query);
    if ($update) {
        header("Location: ../ModifyUsers.php");
    }else{
        echo '<div class="alert alert-danger" role="alert">
       Oops Someting went wrong';
    }


?>