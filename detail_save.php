<?php
 if(isset($_POST['submit'])){
   $file=$_FILES['fileLogo'];  
   $fileName=$file['name'];
   $fileType=$file['type'];
   $fileTmpName=$file['tmp_name'];
   $fileError=$file['error'];
   $fileSize=$file['size'];

   $fileExt=explode('.',$fileName);
   $fileActualExt=strtolower(end($fileExt));
   $allowed=array('jpg','jpeg','png');

   if(in_array($fileActualExt,$allowed)){
     if($fileError===0){
       if($fileSize<500000){
         $fileNameNew=uniqid('',true).".".$fileActualExt;
         $fileDestination='uploads/logo/'.$fileNameNew;
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
     $title=$_POST['title']; 
      $keyword=$_POST['keyword'];
       $desc=$_POST['desc'];
     $sql="INSERT INTO `website_details`(`title`, `metakey`, `metades`, `logourl`) VALUES ('$title','$keyword','$desc','$fileDestination')";
     $execute= mysqli_query($con,$sql);
     header('location:logo.php?Success');
 }else{
     echo "Not connected to DB";
 }
 }
  
 
 
 
?>

