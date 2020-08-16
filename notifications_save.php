<?php
 if(isset($_POST['submit'])){
   $file=$_FILES['fle'];  
   $fileName=$file['name'];
   $fileType=$file['type'];
   $fileTmpName=$file['tmp_name'];
   $fileError=$file['error'];
   $fileSize=$file['size'];

   $fileExt=explode('.',$fileName);
   $fileActualExt=strtolower(end($fileExt));
   $allowed=array('doc','docx');

   if(in_array($fileActualExt,$allowed)){
     if($fileError===0){
       if($fileSize<500000){
         $fileNameNew=uniqid('',true).".".$fileActualExt;
         $fileDestination='uploads/notice/'.$fileNameNew;
         move_uploaded_file($fileTmpName,$fileDestination);         
       }else{
         echo "File size is too large";
       }
     }else{
       echo "Their is an error uploading your file";
     }
   }else{
     echo "You can't upload file of this type";
   }
   
   $con= mysqli_connect("localhost","root","","iasds");
 
 if($con){
     $n=$_POST['notice'];  
     $status=$_POST['activeStatus'];     
     $sql="INSERT INTO `notice`(`noticedesc`, `attachment_url`, `isactive`) VALUES ('$n','$fileDestination','$status')";
     $execute= mysqli_query($con,$sql);
     header('location:notifications.php?Success');
 }else{
     echo "Not connected to DB";
 }
 }
  
 
 
 
?>

