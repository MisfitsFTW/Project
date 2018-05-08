<!doctype html>
<html lang="en">
	<head>
    		<!-- Required meta tags -->
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    		<!-- Bootstrap CSS -->
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    		<title>Wallet</title>
  	</head>
  	<body>
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
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
                            <a class="dropdown-item" href="home.html">New</a>
                            <a class="dropdown-item" href="buyUsed.html">Used</a>
                        </div>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="sell.php">Sell</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="wallet.php">Wallet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help.html">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.html">About Us</a>
                    </li>
                </ul>
          </div>
        </nav>
        <br><br>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Add funds to your SBP Wallet</h1>
                <hr class="my-4">
                <p class="lead">Funds in your SBP Wallet may be used for the purchase of any smartphone on SBP.</p>
                <br>
                <form enctype="multipart/form-data" action="wallet.php" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <input type="number" class="form-control" name="amount" placeholder="Enter funds" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input maxlength="30" type="text" class="form-control" name="password" placeholder="Enter password" required>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" name="submit" class="btn btn-outline-primary btn-lg btn-block">Add funds</button>
                </form>
            </div>
        </div>
        <?php
        if(isset($_POST['submit'])){
            $amount=$_POST['amount'];
            $password=$_POST['password'];
            

            
            //1 - Conectio with db
            $conn = mysqli_connect("localhost", "root", "", "login_db","3307");
            if (mysqli_connect_errno()){
                echo "Error: Could not connect to database. Please try again later";
                exit;
            }
            $query="select count(*) from userCredentials where password ='$password'";
            
            //Step 3 - send query to db
            $result = mysqli_query($conn, $query)or die("Error in query: ". mysqli_error($conn));

            //mysqli_fetch_row fetches one row of data from the result set and returns it as an enumerated array
            $row=mysqli_fetch_row($result);
            $count=$row[0];

            if($count>0){
                echo"<h1>Correct credentials</h1>
                <p>Funds added</p>";
                //Step 2 - Query
                $query = "UPDATE userCredentials SET accountBalance = '$amount' WHERE password = $password";

                //Step 3 - send query to db
                $result = mysqli_query($conn, $query)or die("Error in query: ". mysqli_error($conn));
                
            }else{
    
                echo"<h1>incorrect credentials</h1>
                <p>Funds not added</p>";
            }
            
            
        }
        ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	</body>
</html>