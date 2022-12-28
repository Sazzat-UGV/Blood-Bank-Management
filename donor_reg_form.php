<?php
include "admin/Class/function.php";
$obj=new bloodbank();
if(isset($_POST['submit'])){
   $return=$obj->donor_Registration($_POST);
   if($return){
    header("location: index.php");
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donor Registration Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="images/form-img.jpg" alt="">
                <div class="signup-img-content">
                    <h2>Sign up </h2>
                    <p>UGV Blood Bank</p>
                </div>
            </div>
            <div class="signup-form">
                <form method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-input">
                                <label for="first_name" class="required">First name</label>
                                <input type="text" name="fname" id="first_name" />
                            </div>


                            <div class="form-input">
                                <label for="last_name" class="required">Last name</label>
                                <input type="text" name="lname" id="last_name" />
                            </div>


                            <div class="form-input">
                                <label for="date_of_birth" class="required">Date of Birth</label>
                                <input type="date" name="dob" id="dob" />
                            </div>


                            <div class="form-input">
                                <label for=blood_group" class="required">Blood Group</label>
                                <select class="form-control " type="text" name="bgrp" id="blood_status">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-" >AB-</option>
                                </select>
                            </div>


                            <div class="form-input">
                                <label for="phone_number" class="required">Phone number</label>
                                <input type="text" name="phn" id="phone_number" />
                            </div>


                            <div class="form-input">
                                <label for="email" class="required">Email</label>
                                <input placeholder="example@gmail.com" type="email" name="email" id="email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-input">
                                <label for="sadd" class="required">Street Address</label>
                                <input  type="text" name="street" id="saddress" />
                            </div>
                            <div class="form-input">
                                <label for="city" class="required">City</label>
                                <input  type="text" name="city" id="city" />
                            </div>
                            <div class="form-input">
                                <label for="ldonate" class="required">Last Donation Date</label>
                                <input type="date" name="ldonation" id="ldonate" />
                            </div>
                            <div class="form-input">
                                <label for="pass" class="required">Password</label>
                                <input type="password" name="password" />
                            </div>


                            <div class="form-input">
                            <label class="required" for="profile">Upload Profile Picture</label><br>
                            <input  type="file" name="profile" />
                            </div>


                        </div>
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                        <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                    </div>

                    <div class="text-left">
            <a href="index.php">&larr; Already have an account?</a>
        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>