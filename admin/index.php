<?php
$conn=mysqli_connect("localhost","root","","blood_bank")or die("Connection Failed :" .mysqli_connect_error());
include "Class/function.php";
$obj1=new bloodbank();

if(!isset($_SESSION)) { 
  session_start(); 
} 
if(isset($_SESSION["user_id"])){
  $id=$_SESSION["user_id"];
  $role=$_SESSION["role"];
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


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Sign In</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/Tiny cartoon nurses with patient card and blood from donor.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>Sign In to <strong>UGV Blood Bank</strong></h3>
            </div>
            <form action="#" method="post">
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
              </div>

              <input type="submit" value="Log In" name="login" class="btn btn-block btn-primary">
              <?php
                            if(isset($_POST['login'])){
                                $username= $_POST['email'];
                                $password= $_POST['pass'];

                                $sql= "SELECT * FROM admin_info WHERE admin_email = '$username' AND admin_pass = '$password'";
            
                                $result=mysqli_query($conn,$sql) or die ("Query Failed.");

                                if(mysqli_num_rows($result)>0){

                                    while($row=mysqli_fetch_assoc($result)){
                                        session_start();
                                        $_SESSION["user_id"]=$row['admin_id'];
                                        $_SESSION["role"]=$row['admin_role'];
      

                                        header("location:dashboard.php");

                                    }

                                }else{
                                    echo '<div class="text-danger pt-2">Username and password are not match.</div>';
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

  
    <script src="js/jquery1-3.3.1.min.js"></script>
    <script src="js/popper1.min.js"></script>
    <script src="js/bootstrap1.min.js"></script>
    <script src="js/main1.js"></script>
  </body>
</html>