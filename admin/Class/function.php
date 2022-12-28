<?php

class bloodbank{
    
    private $conn;
    public function __construct(){
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="blood_bank";
        $this->conn=mysqli_connect( $dbhost,$dbuser,$dbpass,$dbname);
        if(!$this->conn){
            die("Database Connection Error!!");
        }
    }


    
    public function donorlogout(){
        unset($_SESSION["user_id"]);
        unset( $_SESSION["username"]);
        header("location: index.php");
    }


    public function adminlogout(){
        unset($_SESSION["user_id"]);
        unset($_SESSION["role"]);
        header("location: index.php");
    }




    public function register_new_admin($data){
        $admin_fname=$data['fname'];
        $admin_lname=$data['lname'];
        $admin_dob=$data['dob'];
        $admin_blood_grp=$data['bgrp'];
        $admin_phn=$data['phn'];
        $admin_email=$data['email'];
        $admin_street=$data['street'];
        $admin_city=$data['city'];
        $admin_pass=$data['password'];
        $imgName=$_FILES['profile']['name'];
        $imgTmp=$_FILES['profile']['tmp_name'];
        $admin_role=$data['role'];
        
        $query="INSERT INTO admin_info(admin_fname,admin_lname,admin_dob,
        admin_blood_group,admin_phn,admin_email,admin_street,admin_city,admin_pass,admin_photo,admin_role) VALUES('$admin_fname','$admin_lname','$admin_dob',
        '$admin_blood_grp','$admin_phn','$admin_email','$admin_street','$admin_city','$admin_pass','$imgName','$admin_role')";
        if(mysqli_query($this->conn,$query)){
            move_uploaded_file($imgTmp,"./upload/".$imgName);
            return "Added Successfully.....";
        }
    }
    
    

    public function add_donor($data){
        $donor_fname=$data['fname'];
        $donor_lname=$data['lname'];
        $donor_dob=$data['dob'];
        $donor_blood_grp=$data['bgrp'];
        $donor_phn=$data['phn'];
        $donor_email=$data['email'];
        $donor_street=$data['street'];
        $donor_city=$data['city'];
        $donor_ldonation=$data['ldonation'];
        $donor_pass=$data['password'];
        $imgName=$_FILES['profile']['name'];
        $imgTmp=$_FILES['profile']['tmp_name'];

        $query="INSERT INTO donor_info(donor_fname,donor_lname,donor_dob,donor_blood_group,donor_phone,donor_email,donor_street,donor_city,donor_last_donation,donor_profile,pass)VALUES('$donor_fname','$donor_lname','$donor_dob','$donor_blood_grp','$donor_phn','$donor_email','$donor_street','$donor_city',' $donor_ldonation','$imgName','$donor_pass')";
        if(mysqli_query($this->conn,$query)){
            move_uploaded_file($imgTmp,"./upload/".$imgName);
            return "Donor Added Successfully.....";
        }
    }

    
    public function donor_Registration($data){
        $donor_fname=$data['fname'];
        $donor_lname=$data['lname'];
        $donor_dob=$data['dob'];
        $donor_blood_grp=$data['bgrp'];
        $donor_phn=$data['phn'];
        $donor_email=$data['email'];
        $donor_street=$data['street'];
        $donor_city=$data['city'];
        $donor_ldonation=$data['ldonation'];
        $donor_pass=$data['password'];
        $imgName=$_FILES['profile']['name'];
        $imgTmp=$_FILES['profile']['tmp_name'];

        $query="INSERT INTO donor_info(donor_fname,donor_lname,donor_dob,donor_blood_group,donor_phone,donor_email,donor_street,donor_city,donor_last_donation,donor_profile,pass)VALUES('$donor_fname','$donor_lname','$donor_dob','$donor_blood_grp','$donor_phn','$donor_email','$donor_street','$donor_city',' $donor_ldonation','$imgName','$donor_pass')";
        if(mysqli_query($this->conn,$query)){
            move_uploaded_file($imgTmp,"./admin/upload/".$imgName);
            return "Donor Added Successfully.....";
        }
    }


    public function showAdmin($id){
        $query="SELECT * FROM admin_info WHERE 	admin_id=$id";
        if(mysqli_query($this->conn,$query)){
            $admin=mysqli_query($this->conn,$query);
            $fetch= mysqli_fetch_assoc($admin);
            return  $fetch;
        }
    }

    public function showmoderator(){
        $query="SELECT * FROM admin_info";
        if(mysqli_query($this->conn,$query)){
            $moderator=mysqli_query($this->conn,$query);
            return $moderator;
        }
    }


    public function showDonor(){
        $query="SELECT * FROM donor_info";
        if(mysqli_query($this->conn,$query)){
            $donor=mysqli_query($this->conn,$query);
            return $donor;
        }
    }


    public function showDonorEditPage($id){
        $query="SELECT * FROM donor_info WHERE 	donor_id =$id";
        if(mysqli_query($this->conn,$query)){
            $donor=mysqli_query($this->conn,$query);
            $fetch= mysqli_fetch_assoc($donor);
            return  $fetch;
        }
    }



    public function editdonor($data){
        $donar_id=$data['edit_donor_id'];
        $donor_fname=$data['fname'];
        $donor_lname=$data['lname'];
        $donor_dob=$data['dob'];
        $donor_blood_grp=$data['bgrp'];
        $donor_phn=$data['phn'];
        $donor_email=$data['email'];
        $donor_street=$data['street'];
        $donor_city=$data['city'];
        $donor_ldonation=$data['ldonation'];
        $imgName=$_FILES['profile']['name'];
        $imgTmp=$_FILES['profile']['tmp_name'];
        $query="UPDATE donor_info SET donor_fname='$donor_fname',donor_lname='$donor_lname',
        donor_dob='$donor_dob',donor_blood_group='$donor_blood_grp',donor_phone='$donor_phn',
        donor_email='$donor_email',donor_street='$donor_street',donor_city='$donor_city',	donor_last_donation='$donor_ldonation',donor_profile='$imgName'WHERE donor_id=$donar_id";
        if(mysqli_query($this->conn,$query)){
            move_uploaded_file($imgTmp,"./upload/".$imgName);
            return "Updated Successfully.....";
        }
    }
    

    public function update_admin_Profile_picture($data){
        $admin_id=$data['edit_admin_id'];
        $imgName=$_FILES['profile']['name'];
        $imgTmp=$_FILES['profile']['tmp_name'];
        $query="UPDATE admin_info SET admin_photo='$imgName'WHERE 	admin_id=$admin_id";
        if(mysqli_query($this->conn,$query)){
            move_uploaded_file($imgTmp,"./upload/".$imgName);
            return "Profile Picture Updated Successfully.....";
        }
    }

    

    public function update_Profile_picture($data){
        $donar_id=$data['edit_donor_id'];
        $imgName=$_FILES['profile']['name'];
        $imgTmp=$_FILES['profile']['tmp_name'];
        $query="UPDATE donor_info SET donor_profile='$imgName'WHERE donor_id=$donar_id";
        if(mysqli_query($this->conn,$query)){
            move_uploaded_file($imgTmp,"./admin/upload/".$imgName);
            return "Profile Picture Updated Successfully.....";
        }
    }



    public function updateProfile($data){
        $donar_id=$data['edit_donor_id'];
        $donor_fname=$data['fname'];
        $donor_lname=$data['lname'];
        $donor_dob=$data['dob'];
        $donor_blood_grp=$data['bgrp'];
        $donor_phn=$data['phn'];
        $donor_email=$data['email'];
        $donor_street=$data['street'];
        $donor_city=$data['city'];
        $donor_ldonation=$data['ldonation'];
        $query="UPDATE donor_info SET donor_fname='$donor_fname',donor_lname='$donor_lname',
        donor_dob='$donor_dob',donor_blood_group='$donor_blood_grp',donor_phone='$donor_phn',
        donor_email='$donor_email',donor_street='$donor_street',donor_city='$donor_city',	donor_last_donation='$donor_ldonation'WHERE donor_id=$donar_id";
        if(mysqli_query($this->conn,$query)){
            return "Information Updated Successfully.....";
        }
    }

    


    public function updateAdminProfile($data){
        $admin_id=$data['edit_admin_id'];
        $admin_fname=$data['fname'];
        $admin_lname=$data['lname'];
        $admin_dob=$data['dob'];
        $admin_blood_grp=$data['bgrp'];
        $admin_phn=$data['phn'];
        $admin_email=$data['email'];
        $admin_street=$data['street'];
        $admin_city=$data['city'];

        $query="UPDATE admin_info SET admin_fname='$admin_fname'
        ,admin_lname='$admin_lname',
        admin_dob='$admin_dob',
        admin_blood_group='$admin_blood_grp',admin_phn='$admin_phn',admin_email='$admin_email',	admin_street='$admin_street',admin_city='$admin_city' WHERE admin_id=$admin_id";
        if(mysqli_query($this->conn,$query)){
            return "Information Updated Successfully.....";
        }
    }


    
    public function updateModeratorProfile($data){
        $admin_id=$data['edit_admin_id'];
        $admin_fname=$data['fname'];
        $admin_lname=$data['lname'];
        $admin_dob=$data['dob'];
        $admin_blood_grp=$data['bgrp'];
        $admin_phn=$data['phn'];
        $admin_email=$data['email'];
        $admin_street=$data['street'];
        $admin_city=$data['city'];
        $admin_role=$data['role'];

        $query="UPDATE admin_info SET admin_fname='$admin_fname'
        ,admin_lname='$admin_lname',
        admin_dob='$admin_dob',
        admin_blood_group='$admin_blood_grp',admin_phn='$admin_phn',admin_email='$admin_email',	admin_street='$admin_street',admin_city='$admin_city',admin_role='$admin_role' WHERE admin_id=$admin_id";
        if(mysqli_query($this->conn,$query)){
            return "Information Updated Successfully.....";
        }
    }


    public function changeDonarPass($data){
        $donar_id=$data['edit_donor_id'];
        $current=$data['current_pass'];
        $new=$data['new_pass'];
        $retype_new=$data['retype_new'];
        $query1="SELECT * FROM donor_info WHERE donor_id =$donar_id";
        if(mysqli_query($this->conn,$query1)){
            $passreturn=mysqli_query($this->conn,$query1);
            $fetch= mysqli_fetch_assoc($passreturn);
            $returnpass=$fetch['pass'];
        if($returnpass==$current){
        if($new==$retype_new && $current==$fetch['pass']){
            $query="UPDATE donor_info SET pass='$retype_new' WHERE donor_id=$donar_id AND pass = '$current'";
            if(mysqli_query($this->conn,$query)){
                return "Password Changed.....";
            }
        }
    }else {
        echo" Password is not match !!!";
    }
        }
        
    }

    

    public function changeAdminPass($data){
        $admin_id=$data['edit_admin_id'];
        $current=$data['current_pass'];
        $new=$data['new_pass'];
        $retype_new=$data['retype_new'];
        $query1="SELECT * FROM  admin_info WHERE admin_id =$admin_id";
        if(mysqli_query($this->conn,$query1)){
            $passreturn=mysqli_query($this->conn,$query1);
            $fetch= mysqli_fetch_assoc($passreturn);
            $returnpass=$fetch['admin_pass'];
        if($returnpass==$current){
        if($new==$retype_new && $current==$fetch['admin_pass']){
            $query="UPDATE admin_info SET admin_pass='$retype_new' WHERE admin_id=$admin_id AND admin_pass = '$current'";
            if(mysqli_query($this->conn,$query)){
                return "Password Changed.....";
            }
        }
    }else {
        echo" Password is not match !!!";
    }
        }
        
    }
    

    public function update_donation_date($data){
        $donar_id=$data['edit_donor_id'];
        $donor_ldonation=$data['ldonation'];
        $query="UPDATE donor_info SET donor_last_donation='$donor_ldonation'WHERE donor_id=$donar_id";
        if(mysqli_query($this->conn,$query)){
            return "Donation Date Updated.....";
        }
    }



    public function deletedonor($id){
        $query="DELETE FROM donor_info WHERE donor_id=$id";
        if(mysqli_query($this->conn,$query)){
            return "Successfully Deleted";
        }
    }


//-----------------------------------------------
    public function deletemoderator($id){
        $query="DELETE FROM admin_info WHERE admin_id=$id";
        if(mysqli_query($this->conn,$query)){
            return "Successfully Deleted";
        }
    }


    public function Dashboard_donar_table(){
        $query="SELECT * FROM donor_info ORDER BY donor_id DESC LIMIT 3";
        if(mysqli_query($this->conn,$query)){
            $donor=mysqli_query($this->conn,$query);
            return  $donor;
        }
    }


    public function Dashboard_controller_table(){
        $query="SELECT * FROM admin_info ORDER BY admin_id  DESC LIMIT 3";
        if(mysqli_query($this->conn,$query)){
            $controller=mysqli_query($this->conn,$query);
            return  $controller;
        }
    }



}
?>
