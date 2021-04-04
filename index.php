
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR BANK</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="./logo1.png">
    <script src="index.js"></script>
</head>
<body  style="background-color: rgb(255, 248, 222);" onload="loader()">

    <div class="hero-content">
    <div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; opacity:1;"> 
            <img  height="90"src="./logo1.png">
            &nbsp;
            <div class="navbar-brand font-weight-bold zoomIn animated" id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:black;font-family: 'Times New Roman';font-size:2em;">
                &nbsp;MR BANK
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:pink; "> 
                    <li class="nav-item">
                        
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus" style="color:#271c1c;font-weight:3em;font-size:30px">
                            <div style="padding-left:20px;font-size:20px" >
                               
                            </div>
                            About Us
                        </a> 
                    </li>
                </ul> 
            </div>
        </nav> 
    
    <div>
    
        
               <div class="mainimage" >

                <img id="square"  src="bank.png" alt="" style="align-self: flex-start;margin: auto;height:500px;background-size:cover;background-repeat:no-repeat;background-position:fixed;width:100%";>
               
             
             <p class="zoomIn animated" style="position: absolute;
  left: 20%;
  top: 40%;text-align:center;justify-content: center;color: #271c1c ;font-size:40px;font-family: 'Dela Gothic One', cursive;"> <span class="halfcolour"></span>Changing lives, one member at a time!</p>
            
                <a href="viewcustomers3.php"><button type="button"  value="VCustomers"  id="login" style="border:none;">View Customers</button></a>
            
</img>
            </div>
            <!--
            <div class="col-sm  "  >
                
                <div class="customerform" width="200px">
                <form  action="checkcustomers.php"  method="POST" style="justify-content:center;text-align:center; background: linear-gradient(white, #9198e5);padding-top:5px;padding-bottom:120px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
                <h3 style="text-align:center;color:red;font-weight:light;font-family: 'Playfair Display', serif;"><img  height="40" src="login.jpg" alt="" style="display:inline;">&nbsp;Login As a Customer</h3>
                <input type="text" name="names" id="name" placeholder="Name" style="border:none" required><br><br>
                 <input type="email" name="emailids" id="emails" placeholder="Email-Id" style="border:none" required><br><br>
                 <button type="submit" value="Submit"  id="login" style="border:none;">Submit</button>
                
            </form>
           
             
</div>
-->

            
           
        </div>
        <br>
        <h3 style="text-align:center;font-weight:bolder;font-size:40px;color:#271c1c;font-family: 'Playfair Display', serif;">About our Facilities</h3>
        <div class="flex-container" id="aboutus"> 
        
            <div class="flex-item-left"><img  height="120" src="customers.png" alt="" style="display:inline;border-radius:30px">&nbsp;</img><br>View Customers</div>
            <div class="flex-item-middle"><img  height="120" src="money.png" alt="" style="display:inline;">&nbsp;</img><br>Transfer Money</div>
            <div class="flex-item-right"><img  height="120" src="record1.png" alt="" style="display:inline;">&nbsp;</img><br>Transfer records</div>
</div>
</div>

<script>
setTimeout(function(){$('#loading').hide();}, 500); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>
</html>