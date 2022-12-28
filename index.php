<?php
$conn=mysqli_connect("localhost","root","","blood_bank")or die("Connection Failed :" .mysqli_connect_error());
include "admin/Class/function.php";
$obj1=new bloodbank();

if(!isset($_SESSION)) { 
  session_start(); 
} 
if(isset($_SESSION["user_id"])){
  $id=$_SESSION["user_id"];
}
if(isset($id)){
  header("location: dashboard.php");
}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Donor Sign In</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/Tiny cartoon nurses with patient card and blood from donor.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In to <strong>UGV Blood Bank</strong></h3>
              <p class="mb-4">Welcome Donor, We are waiting for you..</p>
            </div>

            <form action="#" method="POST">
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" name="email" class="form-control" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="pass" class="form-control" id="password">
                
              </div>

              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="404.php" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" name="login" class="btn text-white btn-block btn-primary">

              <span class="d-block text-center my-2 text-muted">Don't have an account?<a href="donor_reg_form.php"> Sign up</a></span>
              <?php
                            if(isset($_POST['login'])){
                                $username= $_POST['email'];
                                $password= $_POST['pass'];

                                $sql= "SELECT * FROM donor_info WHERE donor_email = '$username' AND pass = '$password'";
            
                                $result=mysqli_query($conn,$sql) or die ("Query Failed.");

                                if(mysqli_num_rows($result)>0){

                                    while($row=mysqli_fetch_assoc($result)){
                                        session_start();
                                        $_SESSION["username"]=$row['donor_fname'];
                                        $_SESSION["lusername"]=$row['donor_lname'];
                                        $_SESSION["user_id"]=$row['donor_id'];
      

                                        header("location:dashboard.php");

                                    }

                                }else{
                                    echo '<div class="text-danger">Username and password are not match.</div>';
                                }
                            }

                        ?>
 
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>