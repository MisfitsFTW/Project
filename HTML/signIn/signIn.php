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

    <title>sign in</title>
  </head>
  <body>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">SIGN IN:</h1>
            <br>
            <form action="signIn.php" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Email</label>
                            <input maxlength="30" type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password:</label>
                                <input maxlength="30" type="password" class="form-control" name="password" placeholder="Enter password" required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit Information</button>
                </div>
            </form>
            <br>
            <a href="login.php">Create a new account</a>
          </div>
        </div>
      
      <!--PHP-->
      <?php
      if(isset($_POST['submit'])){
          //Retrieve values from form
          $email=$_POST['exampleInputEmail1'];
          $password=$_POST['password'];
          //if(empty($name) && empty($password)){
            //echo"Both values must be set";
          //}else{
          //1 - Conectio with db
          $conn = mysqli_connect("localhost", "root", "", "login_db","3307");
          if (mysqli_connect_errno()){
                echo "Error: Could not connect to database. Please try again later";
                exit;
          }
          $query="select count(*) from userCredentials where email ='$email' and password='$password'";
            
          //Step 3 - send query to db
          $result = mysqli_query($conn, $query)or die("Error in query: ". mysqli_error($conn));

            //mysqli_fetch_row fetches one row of data from the result set and returns it as an enumerated array
            $row=mysqli_fetch_row($result);
            $count=$row[0];

            if($count>0){
                //visitors U&&P are not correct
                echo"<h1>You are logged in</h1>
                <p>Members only content...</p>";
            }else{
                //Visitors must need to enter username and password
                echo"<h1>You are not logged in</h1>
                <p>You are not authorized...</p>";
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