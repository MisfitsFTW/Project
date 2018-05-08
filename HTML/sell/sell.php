<!doctype html>
<html lang="en">
	<head>
    		<!-- Required meta tags -->
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    		<!-- Bootstrap CSS -->
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    		<title>Sell</title>
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
                        <a class="nav-link" href="sell.html">Sell</a>
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
        <br>
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Sell Phone:</h1>
            <br>
            <form enctype="multipart/form-data" action="sell.php" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Brand:</label>
                            <input maxlength="30" type="text" class="form-control" name="brand" placeholder="Enter phone brand" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Model:</label>
                                <input maxlength="30" type="text" class="form-control" name="model" placeholder="Enter phone model" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter phone price" required>
                    </div>
                    <fieldset class="form-group">
                        <legend>Condition</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="new" checked>
                            New
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="used">
                            Used
                            </label>
                        </div>
                    </fieldset>
                    <br>
                    <legend>Image</legend>
                    <input type="hidden"name="MAX_FILE_SIZE" value="10000000000">
                    Upload image: <input name="userfile" type="file">
                    <br><br>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sell Phone</button>
                </div>
            </form>
          </div>
        </div>
        <?php
        if(isset($_POST['submit'])){
            $brand=$_POST['brand'];
            $model=$_POST['model'];
            $price=$_POST['price'];
            $condition=$_POST['optionsRadios'];
            
            //Upload the image
            //name of folder where files will be stored['userfile'] and file name['name']
            $upfile='images/'.$_FILES['userfile']['name'];

            //This function checks that file is a valid upload file. If the file
            //is valid it will be moved to the filename given by destination/
            if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upfile)){
                echo"file uploaded succesfully";
            }else{
                echo"Problem: Could not move file to destination";
}
            
            //1 - Conectio with db
            $conn = mysqli_connect("localhost", "root", "", "sell_db","3307");
            if (mysqli_connect_errno()){
                echo "Error: Could not connect to database. Please try again later";
                exit;
            }
            //$query = "INSERT INTO userCredentials (brand,model,price,image)
            //VALUES ('$brand','$model','$price','$upfile')";
            
            //Step 2 - Query
            $query = "INSERT INTO userCredentials (brand, model, price, phoneCondition, image) VALUES ('$brand', '$model','$price','$condition','$upfile')";

            //Step 3 - send query to db
            $result = mysqli_query($conn, $query)or die("Error in query: ". mysqli_error($conn));
            
        }
        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	</body>
</html>