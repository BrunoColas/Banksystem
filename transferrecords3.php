<?php
    $con = mysqli_connect("localhost:3306", "root", "", "bank");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR Bank Transfers</title>
    <link rel="icon" height="50px" href="./logo1.png">
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="logo1.png">
</head>
<body style="background-color:rgb(255, 248, 222)" onload="loader()">

<div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#fff; opacity:1;"> 
            <img  height="90"src="logo1.png">
            &nbsp;
            <div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:black;font-family: 'Times New Roman';font-size:2em;">
                &nbsp;MR Bank Transfers
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
                        <a class="nav-link" href="viewcustomers3.php" style="color:black;font-weight:1em;font-size:20px">
                            <div style="padding-left:20px;" >
                                
                            </div>
                            View Customers
                        </a> 
                    </li>
                </ul> 
            </div>
        </nav> 
    
    <div>

<div class="usertable">

    <h3 class="font-weight-bold"style="text-align:center;color: rgb(25, 26, 92);font-family: 'Times New Roman';font-size:2.2em;padding:3%;"><img  height="60" src="record1.png" alt="" style="display:inline;">&nbsp;Transfer Record</h3>
    <table id="myTable" >
          <tr>
            <th>Transfer ID</th>
            <th>Transfer Date/Time</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            
          </tr>
          <?php
        $sql = "SELECT * FROM `transfer` ";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            
            echo "<td>". $row['transfer_id'] . "</td>
            <td>".$row['Date']."</td>
            <td>". $row['sender'] . "</td>
            <td>". $row['receiver'] . "</td>
            <td>". $row['amount'] . "</td>";
            
         echo  "</tr>";
        }
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