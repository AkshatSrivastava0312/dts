                                                       
  <?php 
    $conn=mysqli_connect("localhost","root","","dts");
    
    if($conn){
        if(isset($_POST['add'])){
            $fac=$_POST['fname'];
            $query="INSERT INTO `mstr_faculty`(`faculty_name`) VALUES ('$fac')";
            $execute=mysqli_query($conn,$query);
            if($execute){
                header('location:mstr_faculty.php?Success');
            }else{
                header('location:mstr_faculty.php?Failed');
            }
        }
    }
  ?>  