<?php
 if(isset($_POST['update'])){     
   $con= mysqli_connect("localhost","root","","iasds"); 
 if($con){
    $fb=$_POST['fbTxt'];
   $twt=$_POST['twtTxt'];
   $gplus=$_POST['gplusTxt'];
   $lin=$_POST['linTxt'];
   $ytb=$_POST['ytbTxt'];   
     $sql="INSERT INTO `sociallinks`(`fblink`, `twitlink`, `gpluslink`, `linkedinlink`, `youtubelink`) VALUES ('$fb','$twt','$gplus','$lin','$ytb')";
     $execute= mysqli_query($con,$sql);
     header('location:social_link.php?Success');
 }else{
     echo "Not connected to DB";
 }
 } 
 
 
?>

