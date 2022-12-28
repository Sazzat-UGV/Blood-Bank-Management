<?php
if(isset($_POST['add_admin'])){
    $return_msg=$obj->register_new_admin($_POST);
}
?>
<div class="container-fluid">
<h1 class="h3 mb-0 text-gray-800 text-center ">Admin Registration</h1>
<hr class="pb-4">

<?php if(isset($return_msg)){
    echo $return_msg;
}
?>
<form action="" method="POST" enctype="multipart/form-data">

<div class="form-group">
  <div class="row">
  <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">First Name<span style="color:red;">*</span></label>
    <input class="form-control py-4" type="text" name="fname" id="first_name" />
     </div>

    <div class="form-group col-sm">
           <label class="mb-1 text-dark" for="">Last Name<span style="color:red;">*</span></label>
    <input class="form-control py-4" type="text" name="lname" id="last_name" />
     </div>
  </div>
  </div>



<div class="form-group">
<div class="row">
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Date of Birth<span style="color:red;">*</span></label>
    <input  class="form-control py-4" type="date" name="dob" id="dob" />
    </div>
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Blood Group<span style="color:red;">*</span></label>

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
  </div>
</div>



  <div class="form-group">
  <div class="row">
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Phone<span style="color:red;">*</span></label>
    <input class="form-control py-4"type="text" name="phn" id="phone_number" />
     </div>
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Email<span style="color:red;">*</span></label>

    <input class="form-control py-4" placeholder="example@gmail.com" type="email" name="email" id="email" />
     </div>
  </div>
  </div>



  <div class="form-group">
  <label class="mb-1 text-dark" for="">Address<span style="color:red;">*</span></label>
  <div class="row">
    <div class="form-group col-sm">
    <input class="form-control py-4"  placeholder="Street" type="text" name="street" id="saddress" />
     </div>
    <div class="form-group col-sm">
    <input class="form-control py-4"  placeholder="City" type="text" name="city" id="city" />
    
     </div>
  </div>
  </div>



 <div class="form-group">
  <div class="row">
  <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Role<span style="color:red;">*</span></label>

    <select class="form-control " type="text" name="role" id="blood_status">
          <option value="1">Admin</option>
          <option value="2">Moderator</option>

     </select>
     </div>
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Password<span style="color:red;">*</span></label>
    <input class="form-control py-4" type="password" name="password" />
     </div>
  </div>
 </div>


 <div class="form-group">
    <label class="mb-1 text-dark" for="profile">Upload Profile Picture<span style="color:red;">*</span></label><br>
    <input class=" py-4" type="file" name="profile" />
     </div>

     <button type="submit" name="add_admin"  class="from-control btn btn-block btn-warning text-dark">Submit</button>
</form>
</div>