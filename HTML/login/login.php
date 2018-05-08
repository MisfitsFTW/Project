<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Create an account:</h1>
            <br>
            <form action="login.php" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Name:</label>
                            <input maxlength="30" type="text" class="form-control" name="firstName" placeholder="Enter name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Surname:</label>
                                <input maxlength="30" type="text" class="form-control" name="surname" placeholder="Enter surname" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input maxlength="30" type="password" class="form-control" name="password" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input maxlength="30" type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input maxlength="30" type="text" class="form-control" name="address" placeholder="Enter address" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number:</label>
                        <input type="number" class="form-control" name="phoneNumber" placeholder="Enter phone number" required>
                    </div>
                    <div class="form-group">
                        <label>Account Name:</label>
                        <input maxlength="30" type="text" class="form-control" name="accountName" placeholder="Enter account name" required>
                    </div>
                    <fieldset class="form-group">
                        <legend>Gender</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="male" checked>
                            Male
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="female">
                            Female
                            </label>
                        </div>
                    </fieldset>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" >Submit Information</button>
                </div>
            </form>
            <br>
            <a href="signIn.php">Go Back</a>
          </div>
        </div>
      
      <!--PHP-->
      <?php
      if(isset($_POST['submit'])){
          //Retrieve values from form
	      $name=$_POST['firstName'];
          $surname=$_POST['surname'];
          $password=$_POST['password'];
          $email=$_POST['exampleInputEmail1'];
          $address=$_POST['address'];
          $phoneNumber=$_POST['phoneNumber'];
          $accountName=$_POST['accountName'];
          $gender=$_POST['optionsRadios'];
          
          //TEST
          echo $name;
          echo"<br>";
          echo $surname;
          echo"<br>";
          echo $password;
          echo"<br>";
          echo $email;
          echo"<br>";
          echo $address;
          echo"<br>";
          echo $phoneNumber;
          echo"<br>";
          echo $accountName;
          echo"<br>";
          echo $gender;
          echo"<br>";
          //1 - Conectio with db
          $conn = mysqli_connect("localhost", "root", "", "login_db","3307");
          if (mysqli_connect_errno()){
                echo "Error: Could not connect to database. Please try again later";
                exit;
          }
          //Insert Query
          $query = "INSERT INTO userCredentials (name, surname, password,email,address,phoneNumber,accountName,gender)  VALUES ('$name', '$surname', '$password','$email','$address','$phoneNumber', '$accountName','$gender')";
          
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