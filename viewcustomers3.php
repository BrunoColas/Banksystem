<?php
     
    $con = mysqli_connect("localhost:3306", "root", "", "bank");
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR Bank</title>
    <link rel="icon" height="50px" href="./logo1.png">
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    
    
</head>
<body style="background-color: rgb(255, 248, 222)" onload="loader()">

<div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#fff; opacity:1;"> 
            <img  height="90"src="logo1.png">
            &nbsp;
            <div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:black;font-family: 'Times New Roman';font-size:2em;">
                &nbsp;MR Bank
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:pink; "> 
                <li class="nav-item">
                        <a class="nav-link " href="index.php" style="color:black;font-weight:1em;">
                            <div style="padding-right:0px;" >
                               

                            </div>
                            <span style="padding-right:20px;font-size:20px" >&nbsp;&nbsp;Home</span>
                        </a> 
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="transferrecords3.php" style="color:black;font-weight:1em;font-size:20px">
                            <div style="padding-left:20px;" >
                                
                            </div>
                            Transfer Records
                        </a> 
                    </li>  
                </ul> 
            </div>
        </nav> 
    
    <div>

<div class="usertable">

    <h3 class="font-weight-bold"style="text-align:center;color:black;font-family: 'Times New Roman';font-size:2.2em;padding:3%;"><img  height="50" src="customers.png" alt="" style="display:inline;border-radius:10px">&nbsp;Customers</h3>
    <table id="myTable">
          <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Current Balance</th>
            <th>Action</th>
          </tr>
          <?php
          //echo "<script>swal('Welcome','$username');;</script>";
        $sql = "SELECT * FROM `customers`";
        $result = mysqli_query($con, $sql);
        //$sql1 = "SELECT * FROM `customers`  "; 
        //$result1 = mysqli_query($con, $sql1);
         
        
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post'  action='acustomers3.php'>";
            echo "<td>". $row['customer_id'] . "</td>
            <td>". $row['name'] . "</td>
            <td>". $row['email'] . "</td>
            <td>". $row['current_balance'] . "</td>";
            echo "<td> <a href='acustomers3.php'><button type='submit'  class='btn btn-default' name='user'  id='users1' value= '{$row['name']}' >Transfer Money</button></a></td>";
            
        
        
        
        
        
       
          
        //function checkuser1(){ echo 'true'};
        //$check=checkuser1();
         //  echo '$check'  ;
         
        
          
            
           echo "</form>";
           echo  "</tr>";
        }
        
        /*function checkuser1(){
        $sql1 = "SELECT name FROM `customers`";
        $result1 = mysqli_query($con, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        //$admincheck=$row1['name'];
        
        //$check="<script>function checkuser1(){ return 'true';}</script>";
        echo $check  ;
        if($admincheck==$username ){
            echo "<script>swal('Transfer','PAGE').then(function() { window. location = 'acustomers3.php'; });;</script>";
        }
        else{
            echo "<script>swal('Error','NO RIGHTS').then(function() { window. location = 'viewcustomers3.php'; });;</script>";
        }
    }*/
        ?>
          
    </table>
    
</div>
<br><br>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
setTimeout(function(){$('#loading').hide();}, 3000); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>


</html>