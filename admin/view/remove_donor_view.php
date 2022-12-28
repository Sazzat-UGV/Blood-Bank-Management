<?php
$Display_Donors=$obj->showDonor();

if(isset($_GET['status'])){
    if(isset($_GET['status'])=='delete'){
        $deleteID=$_GET['id'];
        $retursms=$obj->deletedonor($deleteID);
    }
}

?>

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800 text-center">Remove Donor's</h1>
<hr>
<?php if(isset($retursms)){
    echo $retursms;
}
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Photos</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Blood Group</th>
                        <th>Address</th>
                        <th>Last Donation</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
            while($showdonor=mysqli_fetch_assoc($Display_Donors)){
            ?>
                    <tr>
                        <td><?php echo $showdonor['donor_id']; ?></td>
                        <td><?php echo $showdonor['donor_fname'].' '.$showdonor['donor_lname']; ?></td>
                        <td><img height="100px" src="./upload/<?php echo $showdonor['donor_profile']; ?>" onerror=this.src="img/vecteezy_hacker-avatar.svg">
                        <td><?php echo $showdonor['donor_phone']; ?></td>
                        <td><?php echo $showdonor['donor_email']; ?></td>
                        <td><?php echo $showdonor['donor_dob']; ?></td>
                        <td><?php echo $showdonor['donor_blood_group']; ?></td>
                        <td><?php echo $showdonor['donor_street'].','.$showdonor['donor_city']; ?></td>
                        <td><?php echo $showdonor['donor_last_donation']; ?></td>
                        <td>
                        <a class="btn btn-danger" href="?status=delete&&id=<?php echo $showdonor['donor_id'];?>">Delete</a>
            </td>
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