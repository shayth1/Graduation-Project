<?php
$con = mysqli_connect("localhost", "root", "", "register");
$sel = "SELECT * FROM users";

$que = mysqli_query($con, $sel);
?>



<?php
if (isset($_POST["add-button"])) {
    $z1 = $_POST["name1"];
    $z2 = $_POST["name2"];
    $z3 = $_POST["name3"];
    $z4 = $_POST["name4"];
    $z5 = $_POST["name5"];
    $z6 = $_POST["name6"];


    $ins = "INSERT INTO users (id , firstName , lastName , username , email ,Password) VALUES ('$z1' , '$z2' , '$z3' , '$z4' , '$z5','$z6') ";
    mysqli_query($con, $ins);
}






$t1 = "";
$t2 = "";
$t3 = "";
$t4 = "";
$t5 = "";
$t6 = "";

if (isset($_POST["name1"])) {
    $t1 = $_POST["name1"];
}

if (isset($_POST["name2"])) {
    $t2 = $_POST["name2"];
}

if (isset($_POST["name3"])) {
    $t3 = $_POST["name3"];
}

if (isset($_POST["name4"])) {
    $t4 = $_POST["name4"];
}

if (isset($_POST["name5"])) {
    $t5 = $_POST["name5"];
}

if (isset($_POST["name6"])) {
    $t6 = $_POST["name6"];
}


if (isset($_POST["delet-button"])) {
    $delete = "DELETE FROM users WHERE id = $t1 ";
    mysqli_query($con, $delete);
}







$h1 = "";
$h2 = "";
$h3 = "";
$h4 = "";
$h5 = "";
$h6 = "";


if (isset($_POST["name1"])) {
    $h1 = $_POST["name1"];
}

if (isset($_POST["name2"])) {
    $h2 = $_POST["name2"];
}

if (isset($_POST["name3"])) {
    $h3 = $_POST["name3"];
}

if (isset($_POST["name4"])) {
    $h4 = $_POST["name4"];
}

if (isset($_POST["name5"])) {
    $h5 = $_POST["name5"];
}
if (isset($_POST["name6"])) {
    $h6 = $_POST["name6"];
}

if (isset($_POST["modify-button"])) {
    $amman = "UPDATE users SET  firstName = '$h2' ,lastName ='$h3' , username = '$h4' , email = '$h5' ,Password = '$h6' WHERE id = '$h1' ";
    mysqli_query($con, $amman);
}
?>




<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <title>SignUP</title>

        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="Css-index.css">
        <link href="css/form-validation.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            body {
                background-image: url("img/img\ 28.jpg");
                width: 100%;
                height: 100%;
                background-size: cover;
            }

            .container {
                color: black;
            }

            .text-muted {
                color: black;
            }

            .FoFo {
                margin-left: 100px;
                margin-top: 40px;
                size: 100px;
            }

            .section1212 {
                width: 100%;
                height: 100%;
                background-image: url(333123.png);
                background-size: cover;
                background-attachment: fixed;
            }
            .table{
                color:blue,green;
            }
        </style>

    </head>

    <body class="bg-light">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top ">
            <a class="navbar-brand" href="https://www.nike.com/" id="nav-title">Nike</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Nike.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">AboutUs</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                        <a class="nav-link" href="Login.php">LogIn</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="#Swiper12">Best Choice</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#Mix12"> <span>Collection</span> </a>
                            <div class="dropdown-divider"></div>

                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">

                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                </form>
            </div>
        </nav>

        <!-- *** End Nav **** -->
        <br>
        <br>



        <section class="section1212">

            <div class="container">
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">

                    </div>




                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3"></h4>
                        <br>
                        <br>
                        <br><br><br><br><br>
                        <form class="FoFo  needs-validation" method="POST" novalidate>
                            <div class="row">


                                <div class="col-md-12 mb-3">
                                    <label >ID</label>
                                    <input type="number" class="form-control" Id="id1" name="name1" placeholder="ID"  value="" required>
                                    <div class="invalid-feedback">
                                        Valid ID is required.
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" name="name2" placeholder="First Name" id="id2" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>



                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" name="name3" placeholder="Last Name" id="id3" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" name="name4" id="id4" placeholder="Username" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email </label>
                                <input type="email" class="form-control" name="name5" id="id5" placeholder="you@example.com" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            <div class="form-group cmd-3">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" name="name6" id="id6" placeholder="Password" equired>
                                <div class=" invalid-feedback ">
                                    Valid Password is required.
                                </div>
                            </div>




                            <button name="add-button"> add Items</button>
                            <button name="delet-button">delet items</button>
                            <button name="modify-button">modify items</button> <br> <br> <br>

                            <table class="table" border="2" id="Table">
                                <tr>
                                    <th>id</th>
                                    <th>firstName</th>
                                    <th>lastName</th>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>Password</th>
                                </tr>

<?php
while (@$test = mysqli_fetch_array($que)) {
    echo "<tr>";
    echo "<td>" . @$test["id"] . "</td>";
    echo "<td>" . $test["firstName"] . "</td>";
    echo "<td>" . $test["lastName"] . "</td>";
    echo "<td>" . $test["username"] . "</td>";
    echo "<td>" . $test["email"] . "</td>";
    echo "<td>" . $test["Password"] . "</td>";
    echo "</tr>";
}
?>
                            </table>

                        </form>



                        <script>
                            var test = document.getElementById("Table");


                            for (var x = 1; x < test.rows.length; x++) {
                                test.rows[x].onclick = function () {

                                    document.getElementById("id1").value = this.cells["0"].innerHTML;
                                    document.getElementById("id2").value = this.cells["1"].innerHTML;
                                    document.getElementById("id3").value = this.cells["2"].innerHTML;
                                    document.getElementById("id4").value = this.cells["3"].innerHTML;
                                    document.getElementById("id5").value = this.cells["4"].innerHTML;
                                    document.getElementById("id6").value = this.cells["5"].innerHTML;
                                }
                            }


                        </script>

                        <script>
                                    var test = document.getElementById("Table");
        

        for (var x = 1; x < test.rows.length; x++){
                                test. r o ws[x].onclick = fu nction(){

                                document.getElementById("id1").value = this.cells["0"].innerHTML;
                                        document.getElementById("id2").value = this.cells["1"].innerHTML;
                                        document.getElementById("id3").value = this.cells["2"].innerHTML;
                                        document.getElementById("id4").value = this.cells["3"].innerHTML;
                                        document.getElementById



                                        


                                        < /div>
                                        </div>
                                        </div>
                                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><b><br><br><br><br><br><br></b>
                </section>
        
                
            
        <!-- ****** Staet Footer  ********** -->
                <footer class="page-footer font-small stylish-color-dark pt-4 " id="footer ">
                
                <!-- Call to action -->
                <ul class="list-unstyled list-inline text-center py-2 ">
                <li class="list-inline-item ">
        <h5 class="mb-1 ">Register for free</h5>
</li>
    <li class="list-inline-item ">
    <a href="Signup.php " class="btn btn-outline-primary ">Sign up!</a>
        </li>
            </ul>
            <!-- Call to action -->

                <hr>
            
            <!-- Social buttons -->
                <ul class="list-unstyled list-inline text-center ">
            <li class="list-inline-item ">
            <a class="btn-floating btn-fb mx-1 ">
            <i class="fab fa-facebook-f "> </i>
                        </a>
                    </li>
                    <li class="list-inline-item ">
                        <a class="btn-floating btn-tw mx-1 ">
                            <i class="fab fa-twitter "> </i>
                        </a>
                    </li>
                    <li class="list-inline-item ">
                        <a class="btn-floating btn-gplus mx-1 ">
                            <i class="fab fa-google-plus-g "> </i>
                        </a>
                    </li>
                    <li class="list-inline-item ">
                        <a class="btn-floating btn-li mx-1 ">
                            <i class="fab fa-linkedin-in "> </i>
                        </a>
                    </li>
                    <li class="list-inline-item ">
                        <a class="btn-floating btn-dribbble mx-1 ">
                            <i class="fab fa-dribbble "> </i>
                        </a>
                    </li>
                </ul>
                <!-- Social buttons -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3 ">©️ 2020 Copyright:
                    <a href="https://web.facebook.com/rihan.foudeh/ "> RihanFoudeh@gmail.com</a>
                </div>
                <!-- Copyright -->

            </footer>

            <!-- ****** End Footer ********* -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
            <script>
            window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js "><\/script>')
            </script>
        <script src="../assets/dist/js/bootstrap.bundle.min.js "></script>
        <script src="js/form-validation.js "></script>
        <script src="js/jquery-3.4.1.js "></script>
        <script src="js/bootstrap.min.js "></script>
</body>

</html>