<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn= mysqli_connect("localhost","root","","dts");
//print_r($conn);                                                          
 $output = '';  
 
            
 if(isset($_POST["mstr_f_id"]))  
 {   
      if($_POST["mstr_f_id"] != '') 
          
      {    
          $sql ="SELECT * FROM `mstr_subject` WHERE `mstr_subject`.`faculty_name`='".$_POST["mstr_f_id"]."'";
          
          
      }  
      else  
      {  
           $sql = "SELECT * FROM `mstr_subject`"; 
          
           
      }  
      
     $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {     
           $output .= '<option value="'.$row["subject_name"].'">'.$row["subject_name"].'</option>';  
      }  
      echo $output;  
 }  
?>
