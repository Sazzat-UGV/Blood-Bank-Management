
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800 ">Update Donation Date</h1>
<hr>

<?php

if(isset($_SESSION["user_id"])){
    $id=$_SESSION["user_id"];
    $showdonor=$obj->showDonorEditPage($id);
}

if(isset($_POST['update_date'])){
    $return=$obj->update_donation_date($_POST);
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

    <title>Change Donation Date</title>
  </head>
  <body>
  <section style="background-color: FFFF;">
  <?php
  if(isset($return)){
    echo $return;
  }
?>
  <div class="container py-5">

      <div class="col-lg-8">
      <form action="" method="POST">
    <div class="form-group">
    <input type="hidden" name="edit_donor_id" value="<?php echo $id ?>">
    <div class="row">

  <div class="row">
    <div class="form-group col-sm">
    <label class="mb-1 text-dark" for="">Last Donation Date</label>
    
    <input class="form-control py-4" type="date" value="<?php echo $showdonor['donor_last_donation']; ?>" name="ldonation" />
    <button type="submit" name="update_date"  class="from-control my-3 btn btn-block btn-success">Update Date</button>
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
<!-- DataTales Example -->