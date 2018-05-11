<!doctype html>
<html lang="en">
	<head>
    		<!-- Required meta tags -->
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    		<!-- Bootstrap CSS -->
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    		<title>Buy-Used</title>
  	</head>
  	<body>
    		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> <img src="img/myLOGO.jpg"width="80" height="42" style="margin-right:20px;">
            <a class="navbar-brand" href="#">SBP - Sell Buy Phones</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Buy
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="buy.php">New</a>
                            <a class="dropdown-item" href="buy.php">Used</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sell.php">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help.html">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wallet.php">Wallet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
                </ul>
                
            </div>
            </nav>
            <br><br><br><br>
            <div class="container">
                <div class="row">
                    <!--
                    <div class="col-md-6 align-self-center"><div class="text-center"><img src="img/iphone6.jpg" class="rounded" alt="image-iphone 6" width="300"></div><br><button type="button" id="iphone6" onclick="Buy(this.id)" class="btn btn-outline-primary btn-sm btn-block">Apple iPhone 6 <br>Price: €350</button></div>
                    
                    <div class="col-md-6 align-self-center"><div class="text-center"><img src="img/sasmungA7.jpg" class="rounded" alt="image-samsung A7" width="300"></div><br><button type="button" id="samsungA7" onclick="Buy(this.id)" class="btn btn-outline-primary btn-sm btn-block">Samsung A7 <br>Price: €399</button></div>
                    
                    <div class="w-100"></div>
                    
                    <div class="col-md-6 align-self-centre"><div class="text-center"><img src="img/htc%20desire.jpg" class="rounded" alt="image-HTC desire 300" width="175"></div><br><button type="button" id="htc610"  onclick="Buy(this.id)" class="btn btn-outline-primary btn-sm btn-block">HTC Desire 610 <br>Price: €199</button></div>
                    
                    <div class="col-md-6 align-self-end"><div class="text-center"><img src="img/iphone%20se.jpg" class="rounded" alt="image-iphone se" width="200"></div><br><button type="button" id="iphoneSE" onclick="Buy(this.id)" class="btn btn-outline-primary btn-sm btn-block">Apple iPhone SE <br>Price: €250</button></div>
                    
                    

                    -->
                    <form action="buy.php" method="post">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit 
                        Information</button>
                        
                        <button type="submit" name="test" class="btn btn-primary btn-lg btn-block">test</button>
                    </form>
                    <!--List from Database-->
                
                 <?php
                    
                    /*
                    $conn = mysqli_connect("localhost", "root", "", "sell_db", "3307");
                    if (mysqli_connect_errno()){
                    echo "Error: Could not connect to database. Please try again
                    later";
                    //exit;
                    }
                    //create query
                    $query = "SELECT * FROM userCredentials";
                    
                    //sends query
                    //$result = mysqli_query($conn, $query)
                        //or die("Error in query: ". mysqli_error($conn));
                    
                    //The variable $result contains a resource that allows other PHP MySQL functions to get individual rows and fields in the database.
                    while ($row = mysqli_fetch_assoc($result)){
                       
                        ?>    
                        <div class="col-md-6 align-self-end"><div class="text-center"><img src="<?php echo $row['image']; ?>" class="rounded" alt="image from DB" width="300"></div><br><button type="button" name="upload" class="btn btn-outline-primary btn-sm btn-block"><?php echo "$row[brand] $row[model]"; ?><br>Price: €<?php  echo $row['price']; ?></button></div>
                        <?php
                        //on button click
                        if(isset($_POST['upload'])){
                            /*
                            $conn = mysqli_connect("localhost", "root", "", "cart_db", "3307");
                            if (mysqli_connect_errno()){
                            echo "Error: Could not connect to database. Please try again
                            later";
                            exit;
                            }
                            
                            echo"TEST";
                            $get="$row[brand] $row[model] $row['price']";
                        }
                    }
                    */
                    if(isset($_POST['submit'])){
                        
                        function test(){
                            echo"TEST";
                        }
                        test();
                    }
                    if(isset($_POST['test'])){
                        echo"TEST2";
                    }
                        
                    
                        ?>
                    </div>
                <br>
            </div>
    		<!-- Optional JavaScript -->
            <script src="js/script.js"></script>  
    		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	</body>
</html>