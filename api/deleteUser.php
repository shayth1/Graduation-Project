<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php 
require "../config.php";

//get the user id from form

$ID = $_POST['id'];

$query = "DELETE  FROM medicalteamlogin WHERE ID = $ID";
$delete = mysqli_query($conn, $query);
if ($delete) {
	header("Location: ../ModifyUsers.php");
} else {
	echo'<div class="alert alert-danger" role="alert">
       Oops Someting went wrong, Please go back and try again';
}

?>