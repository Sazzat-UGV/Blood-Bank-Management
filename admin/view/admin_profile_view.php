<?php

if(isset($_SESSION["user_id"])){
    $id=$_SESSION["user_id"];
    $showAdmin=$obj->showAdmin($id);
}


?><div class="container-fluid">
<h1 class="h3 text-gray-800 text-center ">Profile</h1>
<hr>
<!-- Page Heading -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>User Profile</title>
  </head>
  <body>
  <section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-5 py-4">
          <div class="card-body text-center">
            <img src="./upload/<?php echo $showAdmin['admin_photo']; ?>" onerror=this.src="img/vecteezy_hacker-avatar.svg"
              class="rounded-circle img-fluid" style="width: 170px; height: 170px;">
            <h5 class="my-3 text-danger"><?php echo $showAdmin['admin_fname'].' '.$showAdmin['admin_lname']; ?></h5>
            <p class="text-muted mb-1"><?php if($showAdmin['admin_role']==1){
              echo "Admin";
            }elseif($showAdmin['admin_role']==2){
              echo "Moderator";
            } ?></p>
            <p class="text-muted mb-4"><?php echo $showAdmin['admin_street'].', '.$showAdmin['admin_city']; ?></p>
            <div class="d-flex justify-content-center mb-2">
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showAdmin['admin_email']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showAdmin['admin_phn']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date Of Birth</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showAdmin['admin_dob']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Blood Group</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showAdmin['admin_blood_group']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Age</p>
              </div>
              <div class="col-sm-9">
              <p class="mb-0 text-muted">
                <?php
                $dateOfBirth = $showAdmin['admin_dob'];
                $today = date("Y-m-d");
                $diff = date_diff(date_create($dateOfBirth), date_create($today));
                echo $diff->format('%y')." "."Y";
                ?>
              
              </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Street</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showAdmin['admin_street']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Current City</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showAdmin['admin_city']; ?></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>

</div>