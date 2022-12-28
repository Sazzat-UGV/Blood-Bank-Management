<?php
$conn=mysqli_connect("localhost","root","","blood_bank")or die("Connection Failed :" .mysqli_connect_error());
$sql= "SELECT * FROM donor_info";
$result= mysqli_query($conn, $sql) or die("Query Failed");
$return=mysqli_num_rows($result);

$sql1= "SELECT * FROM admin_info WHERE admin_role=1";
$result1= mysqli_query($conn, $sql1) or die("Query Failed");
$return1=mysqli_num_rows($result1);

$sql2= "SELECT * FROM admin_info WHERE admin_role=2";
$result2= mysqli_query($conn, $sql2) or die("Query Failed");
$return2=mysqli_num_rows($result2);


$newDonor=$obj->Dashboard_donar_table();
$newController=$obj->Dashboard_controller_table();


?><div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Donor's</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $return;?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Moderator's</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $return2;?></div>
                    </div>
                    <div class="col-auto">
                    
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Administrator
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $return1;?></div>
                            </div>
        
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-shield fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Active Donor's</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $return;?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-globe fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">New Added Donar's</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Last Donate</th>
    </tr>
  </thead>
  <tbody>
  <?php

            $i=0;
            while($showdonor=mysqli_fetch_assoc($newDonor)){
                $i++;
            ?>
    <tr>
    <th scope="row"><?php echo $i;?></th>
      <td><?php echo $showdonor['donor_fname'].' '.$showdonor['donor_lname']; ?></td>
      <td><?php echo $showdonor['donor_blood_group']; ?></td>
      <td><?php echo $showdonor['donor_last_donation']; ?></td>

    </tr>
    <?php 
            }?>
  </tbody>
</table>
        </div>
    </div>
</div>

<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">New Page Controller</h6>

        </div>
        <!-- Card Body -->
        <div class="card-body">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
    <?php

    $i=0;
    while($showcontroller=mysqli_fetch_assoc($newController)){
        $i++;
    ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $showcontroller['admin_fname'].' '.$showcontroller['admin_lname']; ?></td>
      <td><?php 
      if($showcontroller['admin_role']=='1'){
      echo "Admin";
      }if($showcontroller['admin_role']=='2'){
        echo "Moderator";
      } ?></td>

    </tr>
<?php
}
?>
  </tbody>
</table>
        </div>
    </div>
</div>
</div>

</div>