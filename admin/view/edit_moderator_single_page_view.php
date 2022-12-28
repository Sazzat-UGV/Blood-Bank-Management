<?php

if(isset($_GET['status'])){
    if(isset($_GET['status'])=='edit'){
        $editID=$_GET['id'];
        $showAdmin=$obj->showAdmin($editID);
    }
}

if(isset($_POST['update'])){
    $return=$obj->updateModeratorProfile($_POST);
  }
  
  if(isset($_POST['update_profile'])){
    $return=$obj->update_admin_Profile_picture($_POST);
  }
?><div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800 text-center">Update Moderator</h1>
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
    <?php
if(isset($return)){
  echo $return;
}

?>
  <section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4 py-5">
          <div class="card-body text-center">
            <img src="./upload/<?php echo $showAdmin['admin_photo']; ?>" onerror=this.src="img/vecteezy_hacker-avatar.svg"
              class="rounded-circle img-fluid" style="width: 170px; height: 170px;">
            <h5 class="my-3 text-danger"><?php echo $showAdmin['admin_fname'].' '.$showAdmin['admin_lname']; ?></h5>
            <p class="text-muted mb-1">Blood Donar</p>
            <p class="text-muted mb-4"><?php echo $showAdmin['admin_street'].','.$showAdmin['admin_city']; ?></p>
           
           
           
           
            <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="edit_admin_id" value="<?php echo $editID ?>">
            <div class="d-flex justify-content-center mb-2">
              <!-- <button  class="btn btn-primary"></button> -->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
              Update Profile Picture
            </button>
            </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <input class=" py-4" type="file" name="profile" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update_profile" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
      <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <input type="hidden" name="edit_admin_id" value="<?php echo $editID ?>">
    <div class="row">

    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">First Name</label>
    <input class="form-control py-4"  type="text" value="<?php echo $showAdmin['admin_fname']; ?>" name="fname" />
     </div>

    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Last Name</label>
    <input class="form-control py-4"  type="text" value="<?php echo $showAdmin['admin_lname']; ?>" name="lname" />
     </div>
  </div>
     </div>




<div class="form-group">
<div class="row">
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Date of Birth</label>
    <input class="form-control py-4" type="date" value="<?php echo $showAdmin['admin_dob']; ?>" name="dob" />
     </div>
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Blood Group</label>
    <select class="form-control " type="text" name="bgrp" value="<?php echo $showAdmin['admin_blood_group']; ?>" id="blood_status">
                          <?php
                          if($showAdmin['admin_blood_group']=='A+')
                              {
                                echo " <option value='A+' selected>A+</option>
                                <option value='A-'>A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              } elseif($showAdmin['admin_blood_group']=='A-'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' selected>A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              } elseif($showAdmin['admin_blood_group']=='B+'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-'>A-</option>
                                <option value='B+' selected>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              }elseif($showAdmin['admin_blood_group']=='B-'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' >A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-' selected>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              }elseif($showAdmin['admin_blood_group']=='O+'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' >A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'selected>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              }elseif($showAdmin['admin_blood_group']=='O-'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' >A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'selected>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              }elseif($showAdmin['admin_blood_group']=='AB+'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' >A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+' selected>AB+</option>
                                <option value='AB-' >AB-</option>";
                              }elseif($showAdmin['admin_blood_group']=='AB-'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' >A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' selected>AB-</option>";
                              }
                                ?>
                          </select>

 

     </div>
  </div>
</div>



  <div class="form-group">
  <div class="row">
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Phone</label>
    <input class="form-control py-4" type="text" value="<?php echo $showAdmin['admin_phn']; ?>" name="phn" />
     </div>
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Email</label>
    <input class="form-control py-4"  value="<?php echo $showAdmin['admin_email']; ?>" type="email" name="email" />
     </div>
  </div>
  </div>



  <div class="form-group">
  <div class="row">
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Address</label>
    <input class="form-control py-4"  value="<?php echo $showAdmin['admin_street']; ?>" type="text" name="street" />
     </div>
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">City</label>
    <input class="form-control py-4"  type="text" value="<?php echo $showAdmin['admin_city']; ?>" name="city" />
     </div>
  </div>
  </div>


  <div class="form-group">
  <div class="row">
  <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">User Type</label>
    <select class="form-control " type="text" name="role" value="<?php echo $showAdmin['admin_role']; ?>" id="blood_status">
                          <?php
                          if($showAdmin['admin_role']=='1')
                              {
                                echo " <option value='1'selected>Admin</option>
                                <option value='2'>Moderator</option>";
                              } elseif($showAdmin['admin_role']=='2'){
                                echo "<option value='1'>Admin</option>
                                <option value='2' selected>Moderator</option>";
                              }
                                ?>
                          </select>

 

     </div>


  </div>
 </div>


     <button type="submit" name="update"  class="from-control btn btn-block btn-success">Update</button>
</form>
      </div>
    </div>
  </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>

</div>