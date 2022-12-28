<?php

if(isset($_SESSION["user_id"])){
    $id=$_SESSION["user_id"];
    $showdonor=$obj->showDonorEditPage($id);
}


?><div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 text-center">Donor's Profile</h1>
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
  <div class="container py-3">

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4 py-5">
          <div class="card-body text-center">
            <img src="./admin/upload/<?php echo $showdonor['donor_profile']; ?>" onerror=this.src="img/vecteezy_hacker-avatar.svg"
              class="rounded-circle img-fluid" style="width: 170px; height: 170px;">
            <h5 class="my-3 text-danger"><?php echo $showdonor['donor_fname'].' '.$showdonor['donor_lname']; ?></h5>
            <p class="text-muted mb-1">Blood Donar</p>
            <p class="text-muted mb-4"><?php echo $showdonor['donor_street'].', '.$showdonor['donor_city']; ?></p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-success">Online</button>
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
                <p class="text-muted mb-0"><?php echo $showdonor['donor_email']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showdonor['donor_phone']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date Of Birth</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showdonor['donor_dob']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Blood Group</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showdonor['donor_blood_group']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Age</p>
              </div>
              <div class="col-sm-9">
              <p class="mb-0">
                <?php
                $dateOfBirth = $showdonor['donor_dob'];
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
                <p class="text-muted mb-0"><?php echo $showdonor['donor_street']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Current City</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showdonor['donor_city']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Last Donation  Date</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $showdonor['donor_last_donation']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Donation Status</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php 
                 $date1 = $showdonor['donor_last_donation'];
                 $date2 = date("Y-m-d");
                 $d1=new DateTime($date2); 
                 $d2=new DateTime($date1);                                  
                 $Months = $d2->diff($d1); 
                 $howeverManyMonths = (($Months->y) * 12) + ($Months->m);
                 if($howeverManyMonths>3){
                    echo "Available";
                 }else{
                    echo " Not Available";
                 }
                 
                ?></p>
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