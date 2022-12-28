<?php
include "admin/Class/function.php";
$obj=new bloodbank();
session_start();
if(isset($_SESSION["user_id"])){
    $id=$_SESSION["user_id"];
    $name=$_SESSION["username"];
  }
if($id==null){
    header("location: index.php");
}
if(isset($_GET['donorlogout'])){
    if($_GET['donorlogout']=='logout'){
        $obj->donorlogout();
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

    <title> Donor Profile</title>
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
       
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->

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
                                elseif($view=="update_profile"){
                                    include "view/update_profile_view.php";
                                }
                                elseif($view=="last_donation"){
                                    include "view/Change_last_donation.php_view.php";
                                }
                                elseif($view=="404_page"){
                                    include "view/404_page_view.php";
                                }
                                elseif($view=="blank_page"){
                                    include "view/blank_page_view.php";
                                }
                                elseif($view=="forget_pass"){
                                    include "view/404_page_view.php";
                                }
                                elseif($view=="Chnge_pass"){
                                    include "view/change_pass_view.php";
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



    <!-- Bootstrap core JavaScript-->
    
    <?php include_once"includes/script.php";?>


</body>

</html>