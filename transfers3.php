<?php
session_start();
$server="localhost:3306";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"bank");
if(!$con){
    die("Connection failed");
} 


$flag=false;



if (isset($_POST['transfers']))
{

$sender=$_SESSION['sender'];
$receiver=$_POST["reciever"];
$amount=$_POST["amount"];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR Bank</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="logo1.png">
</head>
<body style="background-color: #fff" onload="loader()">
<!-- loader for splash screen -->
<div id="loading">
    <div class="wrapper flex-center">
        <div class="container">
            <div class="container-dot dot-a">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-b">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-c">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-d">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-e">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-f">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-g">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-h">
            <div class="dot"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#fff; opacity:1;"> 
            <img  height="90"src="logo1.png">
            &nbsp;
            <div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:#800000;font-family: 'Times New Roman';font-size:2em;">
                &nbsp;MR Bank
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:pink; "> 
                <li class="nav-item">
                        <a class="nav-link " href="index.php" style="color:#800000;font-weight:1em;">
                            <div style="padding-right:0px;" >
                                
                            </div>
                            <span style="padding-right:20px;" >&nbsp;&nbsp;Home</span>
                        </a> 
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="viewcustomers3.php" style="color:#800000;font-weight:1em;">
                            <div style="padding-left:20px;" >
                               
                            </div>
                            View Customers
                        </a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transferrecords3.php" style="color:#800000;font-weight:1em;">
                            <div style="padding-left:20px;" >
                              
                            </div>
                            Transfer Records
                        </a> 
                    </li>  
                </ul> 
            </div>
        </nav> 
    
    <div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
setTimeout(function(){$('#loading').hide();}, 3000); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>
</body>
</html>
<?php date_default_timezone_set('Asia/Kolkata');
        $datetime=date("Y-m-d h:i:s A");
?>
<?php
$sql = "SELECT current_balance FROM customers WHERE name='$sender'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 if($amount>$row["current_balance"] or $row["current_balance"]-$amount<100){
    echo "<script>swal( 'Error','Insufficient Balance!','error' ).then(function() { window. location = 'viewcustomers3.php'; });;</script>";
   
 }
else{
    $sql = "UPDATE `customers` SET current_balance=(current_balance-$amount) WHERE name='$sender'";
    

if ($con->query($sql) === TRUE) {
  $flag=true;
} else {
  echo "Error updating record: " . $conn->error;
}
 }
 
  }
}
    else {
      echo "0 results";
   } 

if($flag==true){
$sql = "UPDATE `customers` SET current_balance=(current_balance+$amount) WHERE name='$receiver'";

if ($con->query($sql) === TRUE) {
  $flag=true;  
  
} else {
  echo "Error updating record: " . $con->error;
}
}
 if($flag==true){
   // date_default_timezone_set('Asia/Kolkata');
    //$datetime=date("Y-m-d h:i:s A");
    $transferId= uniqid();
    
    
    $sql = "INSERT INTO `transfer` (`transfer_id`,`Date` ,`sender`, `receiver`, `amount`) VALUES ('$transferId','$datetime', '$sender','$receiver','$amount')";
    if ($con->query($sql) === TRUE) {
            echo"<script>swal('Transfered!', '$transferId')</script> ";
        } 
    }
  
   else 
  {
    echo "Error updating record: " . $con->error;
  }
 }

if($flag==true){
echo "<script>swal('Transfered!' ,'Sucessful ').then(function() { window. location = 'viewcustomers3.php'; });;</script>";
}
elseif($flag==false)
{
    echo "<script>
        $('#text2').show()
     </script>";
}
?>