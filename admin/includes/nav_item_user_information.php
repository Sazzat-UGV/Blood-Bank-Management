<?php
if(isset($_SESSION["user_id"])){
    $id=$_SESSION["user_id"];
    $showadmin=$obj->showAdmin($id);
}
?>
<li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $showadmin['admin_fname'].' '.$showadmin['admin_lname']; ?></span>
                                <img class="img-profile rounded-circle"
                                src="./upload/<?php echo $showadmin['admin_photo']; ?>" onerror=this.src="img/vecteezy_hacker-avatar.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="admin_profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="admin_change_pass.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="update_admin_profile.php">
                                    <i class="fas fa-fw fa-wrench fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Update Profile
                                </a>
                                
                                <a class="dropdown-item" href="404_page_admin.php">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="?adminlogout=logout" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
