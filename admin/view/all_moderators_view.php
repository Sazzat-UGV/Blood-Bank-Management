<?php
$Display_Moderator=$obj->showmoderator();
?>
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800 text-center">All Moderator's</h1>
<hr>
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
                        <th>Blood Group</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
            while($showmoderator=mysqli_fetch_assoc($Display_Moderator)){
            ?>
                    <tr>
                        <td><?php echo $showmoderator['admin_id']; ?></td>
                        <td><?php echo $showmoderator['admin_fname'].' '.$showmoderator['admin_lname']; ?></td>
                        <td><img height="100px" src="./upload/<?php echo $showmoderator['admin_photo']; ?>" onerror=this.src="img/vecteezy_hacker-avatar.svg" >
                        <td><?php echo $showmoderator['admin_phn']; ?></td>
                        <td><?php echo $showmoderator['admin_blood_group']; ?></td>
                        <td><?php echo $showmoderator['admin_street'].', '.$showmoderator['admin_city']; ?></td>
                        <td><?php if($showmoderator['admin_role']==1){
                            echo "Admin";}elseif($showmoderator['admin_role']==2){
                                echo "Moderator";
                            } ?></td>
                        <td>
                        <a class="btn btn-warning" href="moderator_full_profile.php?id=<?php echo $showmoderator['admin_id'];?>">View</a>
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