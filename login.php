<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="dts";


$con= mysqli_connect($host, $user, $pass, $db);
if($con){ 
        if(isset($_POST['login'])){
            $email=mysqli_real_escape_string($con,$_POST['email']);
            $pass=mysqli_real_escape_string($con,$_POST['pass']);
            $role=mysqli_real_escape_string($con,$_POST['role']);
        $sql="SELECT * FROM `peoples` WHERE `email`= '$email' AND `password`='$pass' AND `role`='$role'";
        $result=mysqli_query($con, $sql);
        if($result){
       $num=mysqli_num_rows($result);
       for($i=1;$i<=$num;$i++){
        $row=mysqli_fetch_array($result);
        if($row['roleid']==1){
            if($row['role']=="HOD"){
                 $_SESSION['email']=$email;
                  $_SESSION['role']=$role;
            header('location:hod_dashboard.php');
            }else if($row['role']=="Student"){
                 $_SESSION['email']=$email;
                  $_SESSION['role']=$role;
            header('location:student_dashboard.php');
            }else if($row['role']=="Supervisor"){
                 $_SESSION['email']=$email;
                  $_SESSION['role']=$role;
            header('location:dashboard_new.php');
            }              
        }else if($row['roleid']==0){
            $_SESSION['email']=$email;
             $_SESSION['role']=$role;
            header('location:index.html');
        } }
   }else{
    echo "Invalid username or password";
}}}
?>

