<?php
include "Class/function.php";
$obj=new bloodbank();

session_start();
if(isset($_SESSION["user_id"])){
    $id=$_SESSION["user_id"];
    $role=$_SESSION["role"];
  }
if($id==null){
    header("location: index.php");
}
if(isset($_GET['adminlogout'])){
    if($_GET['adminlogout']=='logout'){
        $obj->adminlogout();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
<?php include_once"includes/sidebar.php";?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->        
                    <?php include_once"includes/topbar_search.php";?>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <?php include_once"includes/nav_item_search_dropdown.php";?>
                        <!-- Nav Item - Alerts -->
                        
                        <?php include_once"includes/nav_item_alerts.php";?>

                        <!-- Nav Item - Messages -->
                        <?php include_once"includes/nav_item_messages.php";?>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <?php include_once"includes/nav_item_user_information.php";?>


                    </ul>

                </nav>
                <!-- End of Topbar -->






               




                <!-- Begin Page Content -->
                <?php
                            if(isset($view)){
                                if($view=="dashboard"){
                                    include "view/dashboard_view.php";
                                }
                                elseif($view=="add_donor"){
                                    include "view/add_donor_view.php";
                                }
                                elseif($view=="all_donor"){
                                    include "view/all_donor_view.php";
                                }
                                elseif($view=="edit_donor"){
                                    include "view/edit_donor_view.php";
                                }
                                elseif($view=="remove_donor"){
                                    include "view/remove_donor_view.php";
                                }
                                elseif($view=="404_page"){
                                    include "view/404_page_view.php";
                                }
                                elseif($view=="blank_page"){
                                    include "view/blank_page_view.php";
                                }
                                elseif($view=="edit_donar_single_page"){
                                    include "view/edit_donor_single_page_view.php";
                                }
                                elseif($view=="donorProfile"){
                                    include "view/donorProfile_view.php";
                                }
                                elseif($view=="404_page_admin"){
                                    include "view/404_page_admin_view.php";
                                }
                                elseif($view=="admin_register"){
                                    if($role==1){
                                        include "view/admin_register_view.php";
                                    }elseif($role==2){
                                        include "view/null_admin_register_view.php";
                                    }  
                                }elseif($view=="profile"){
                                    include "view/admin_profile_view.php";
                                }
                                elseif($view=="change_pass"){
                                    include "view/admin_change_pass_view.php";
                                }
                                elseif($view=="update_admin_profile"){
                                    include "view/update_admin_profile_view.php";
                                }
                                elseif($view=="all_moderators"){
                                    include "view/all_moderators_view.php";
                                }
                               
                                elseif($view=="moderatorProfile"){
                                    include "view/moderatorProfile_view.php";
                                }
                                elseif($view=="manage_moderator"){
                                    include "view/manage_moderators_view.php";
                                }
                                elseif($view=="edit_moderator"){
                                    include "view/edit_moderator_single_page_view.php";
                                }
                               
                        }
                        ?>
                <!-- /.container-fluid -->
   













            </div>
            <!-- End of Main Content -->
            <?php include_once"includes/footer.php";?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include_once"includes/logout_modal.php";?>

    <!-- Bootstrap core JavaScript-->
    
    <?php include_once"includes/script.php";?>


</body>

</html>