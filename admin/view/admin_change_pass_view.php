<div class="container-fluid">
<h1 class="h3 text-gray-800">Change Password</h1>
<hr>

<?php

if(isset($_SESSION["user_id"])){
    $id=$_SESSION["user_id"];
}

if(isset($_POST['change_pass'])){
    $return=$obj->changeAdminPass($_POST);
  }

?>

<!-- Page Heading -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Change Password</title>
  </head>
  <body>
  <section style="background-color: FFFF;">
  <?php
  if(isset($return)){
    echo $return;
  }

?>
  <div class="container py-2">
      <div class="col-lg-8">
      <form action="" method="POST">
    <div class="form-group">
    <input type="hidden" name="edit_admin_id" value="<?php echo $id ?>">
    <div class="row">

  <div class="row">
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Current</label>
    <input class="form-control py-4" type="password" value="" name="current_pass" />
    
    <label class="mb-1 text-dark" for="">New</label>
    <input class="form-control py-4" type="password" value="" name="new_pass" />
    
    <label class="mb-1 text-dark" for="">Retype New</label>
    <input class="form-control py-4" type="password" value="" name="retype_new" />
    
    
    <button type="submit" name="change_pass"  class="from-control my-3 btn btn-block btn-primary">Save changes</button>
</form>
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