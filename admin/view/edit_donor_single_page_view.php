<?php

if(isset($_GET['status'])){
    if(isset($_GET['status'])=='edit'){
        $editID=$_GET['id'];
        $showdonor=$obj->showDonorEditPage($editID);
    }
}

if(isset($_POST['update'])){
    $return=$obj->editdonor($_POST);
}
?>
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Edit Donor's Information</h1>
<hr>
<?php
    if(isset($return)){
        echo $return;
    }
    ?>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <input type="hidden" name="edit_donor_id" value="<?php echo $editID ?>">
    <div class="row">

    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">First Name</label>
    <input class="form-control py-4"  type="text" value="<?php echo $showdonor['donor_fname']; ?>" name="fname" />
     </div>

    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Last Name</label>
    <input class="form-control py-4"  type="text" value="<?php echo $showdonor['donor_lname']; ?>" name="lname" />
     </div>
  </div>
     </div>




<div class="form-group">
<div class="row">
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Date of Birth</label>
    <input class="form-control py-4" type="date" value="<?php echo $showdonor['donor_dob']; ?>" name="dob" />
     </div>
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Blood Group</label>
    <select class="form-control " type="text" name="bgrp" value="<?php echo $showdonor['donor_blood_group']; ?>" id="blood_status">
                          <?php
                          if($showdonor['donor_blood_group']=='a+')
                              {
                                echo " <option value='A+' selected>A+</option>
                                <option value='A-'>A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              } elseif($showdonor['donor_blood_group']=='A-'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' selected>A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              } elseif($showdonor['donor_blood_group']=='B+'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-'>A-</option>
                                <option value='B+' selected>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              }elseif($showdonor['donor_blood_group']=='B-'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' >A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-' selected>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              }elseif($showdonor['donor_blood_group']=='O+'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' >A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'selected>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              }elseif($showdonor['donor_blood_group']=='O-'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' >A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'selected>O-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-' >AB-</option>";
                              }elseif($showdonor['donor_blood_group']=='AB+'){
                                echo "<option value='A+'>A+</option>
                                <option value='A-' >A-</option>
                                <option value='B+'>B+</option>
                                <option value='B-'>B-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                                <option value='AB+' selected>AB+</option>
                                <option value='AB-' >AB-</option>";
                              }elseif($showdonor['donor_blood_group']=='AB-'){
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
    <input class="form-control py-4" type="text" value="<?php echo $showdonor['donor_phone']; ?>" name="phn" />
     </div>
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Email</label>
    <input class="form-control py-4"  value="<?php echo $showdonor['donor_email']; ?>" type="email" name="email" />
     </div>
  </div>
  </div>



  <div class="form-group">
  <div class="row">
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Address</label>
    <input class="form-control py-4"  value="<?php echo $showdonor['donor_street']; ?>" type="text" name="street" />
     </div>
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">City</label>
    <input class="form-control py-4"  type="text" value="<?php echo $showdonor['donor_city']; ?>" name="city" />
     </div>
  </div>
  </div>



 <div class="form-group">
  <div class="row">
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Last Donation Date</label>
    <input class="form-control py-4" type="date" value="<?php echo $showdonor['donor_last_donation']; ?>" name="ldonation" />
     </div>
  </div>
 </div>


 <div class="form-group">
    <label class="mb-1 text-dark" for="profile">Upload Profile Picture<span style="color:red;">*</span></label><br>
    <input class=" py-4" type="file" name="profile" />
     </div>

     <button type="submit" name="update"  class="from-control btn btn-block btn-primary">Update</button>
</form>
