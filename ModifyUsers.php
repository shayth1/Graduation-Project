<?php 
require './config.php';

include './app.php';

loadHead("Modify Users");

LoadNavigation();

?>



<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="newCascadeStyleSheet2.css"/>
  
    </head>
    <body>
        
        <div class="container">
            <br/>
            <div class="row">
                <div class="col-lg-3">
                <a href = "Home.php" target = "_self"><img src="Images/ProjectLogo.png" width="150"> </a>
                <br> <br>
                <p><b>Note:</b> <br> Please click on record to modify</p>
                </div>
                <div class="col-lg-8">
                          
    <?php
        
        $sql = "SELECT * FROM medicalteamlogin";
        $result = mysqli_query($conn, $sql);
        

        if (mysqli_num_rows($result) > 0) {
            
    echo '<table class="table" id="Table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>

      </tr>
    </thead>
    <tbody>';
            
            
        while($row = mysqli_fetch_assoc($result)) {
            
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>";
            echo "<td>".$row["First_Name"]."</td>";
            echo "<td>".$row["Last_Name"]."</td>";
            echo "<td>".$row["Phone"]."</td>";
            echo "<td>".$row["Email"]."</td>";
            echo "</tr>";
          
         }
         
         
         echo "</tbody> </table>";
         
         
            } else {
              echo "0 results";
            }

                 
    ?>
                    
         
        
        
        
              
  <div class="container">            
    <form method="POST" action="api/updateUser.php" class="form-group"> 
        <br>
        <input autocomplete="off" disabled="true" type="text" name="ide" value="ID" class="form-control" id="x0"/>
        <br>
        <input autocomplete="off" type="text" name="First_Name" value="First Name" class="form-control" id="x1"/>
        <br>
        <input autocomplete="off" type="text" name="Last_Name" value="Last Name" class="form-control" id="x2"/>
        <br>
        <input autocomplete="off" type="text" name="Phone" value="Phone" class="form-control" id="x3"/>
        <br>
        <input autocomplete="off" type="email" name="Email" value="Email" class="form-control" id="x4"/>
        <br>
        <div  class="text-right">
            <input type="submit" name="Update" value="Update" class="btn btn-outline-info"/> 
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
              Delete
            </button>
        </div>
    </form>
  </div> 
                </div>
            </div>
        </div>

     



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="api/deleteUser.php">
      <div class="modal-body">
        <div class=" col-lg-8 alert alert-danger" role="alert">
        Warning:<br> if you delete this user all data will removed forever!.
    </div>
        
            <br>
              <input placeholder="Enter User ID to comfirm" type="text" name="id" class="form-control" autocomplete="off" />
            <br>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete</button> 
      </div>
      </form>
    </div>
  </div>
</div>
   
    <script>
                        var test = document.getElementById("Table");


                        for (var x = 0 ;x<test.rows.length ;x++){
                            test.rows[x].onclick = function(){
                                document.getElementById("x0").value = this.cells["0"].innerHTML;
                                document.getElementById("x1").value = this.cells["1"].innerHTML;
                                document.getElementById("x2").value = this.cells["2"].innerHTML;
                                document.getElementById("x3").value = this.cells["3"].innerHTML;
                                document.getElementById("x4").value = this.cells["4"].innerHTML;
                               
                            }
                        }                        
    </script>
    
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 

    </body>
</html>





