<?php
include './unrestricted.php'; 
?>

<!DOCTYPE html>
<html lang="en">

    <?php include './headtag.php'; ?>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php
            include './leftsidebar.php';
            ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                   <?php
        include './topbar.php';
        ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    
                    
                    <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <form action="" method="post">
            <div class="card-header py-3" style="height:80px;">
                <div class="form-row">
                    <br>
              <div class="col"><h6 class="font-weight-bold">NOTCE BOARD LISTING</h6></div>
              <div class="col"><p align="right">
             <input type="button" class="btn btn-success" name="newNotice" value="Add new notice" data-toggle="modal" data-target="#addNew">     
              </p></div>
            </div></div>
            <div class="card-body">
                <label>Show</label>
                <select name="show">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                </select>
                <label>entries</label>
                <span style="float: right">
                    <label>Search: </label> 
                  <input type="text" name="search">
              </span>
                
                 <?php                   
                   $con= mysqli_connect("localhost","root","","iasds");
                   if($con){
                       $query="SELECT * FROM `notice`";
                       $execute= mysqli_query($con,$query);
                       $num=mysqli_num_rows($execute);                       
                   }                
                ?>
                
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SL. NO.</th>
                      <th>ID</th>
                      <th>NOTICE</th>
                      <th>UPLOAD DOCUMENT</th>
                      <th>STATUS</th> 
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>SL. NO.</th>
                      <th>ID</th>
                      <th>NOTICE</th>
                      <th>UPLOADED DOCUMENT</th>
                      <th>STATUS</th> 
                      <th>ACTION</th>  
                    </tr>
                  </tfoot>
                  <tbody>      
                      
                      <?php
                      for($i=0;$i<$num;$i++){
                          $row= mysqli_fetch_array($execute);
                      ?>
                      <tr>
                      <td><?php echo $i+1?></td>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['noticedesc'] ?></td>                      
                      <td><a href="<?php echo $row['attachment_url']?>" class="btn btn-secondary" style="font-size: 20px;">Click to see Document</td>
                      <td>
                          <?php
                          if($row['isactive']==1)
                          {
                               ?>
                          <span class="badge badge-success" style="width:120px;height:40px;font-size:25px;">Active</span>   
                         <?php                         
                          }else{
                          ?>                          
                          <span class="badge badge-warning" style="width:120px;height:40px;font-size:25px;">Inactive</span>  
                             <?php       
                               }
                              ?>
                          
                      </td>
                      <td><a href="#" class="btn btn-primary">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
                      </tr>
                      <?php
                      }
                      ?>
                                       
                  </tbody>
                </table>
              </div>                
            </div>
              </form>     
          </div>
          
          
          <br><br><br>
           

        </div>               
                    
                    
                    
                    <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <form action="notifications_save.php" method="post" enctype="multipart/form-data">
          <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          
              <label>Notice</label>
              <input type="text" name="notice" size="60px" style="float:right;" required>
              <br><br>   
              <label>Active Status</label>
              <select name="activeStatus" style=" padding:2px; border:solid #8080804d 2px; width: 500px; float:right;">
                  <option value=0>Inactive</option>
                  <option value=1>Active</option>                  
              </select>
              <br><br>
              <label>Upload Document</label>
              <input type="file" name="fle" style=" padding:2px; border:solid #8080804d 2px; width: 500px; float:right;" required>
          
          
      </div>
      <div class="modal-footer">
          <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">
          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
      </div>
    </div>
  </div>
 </form>                       
</div>
                                                 
                    

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        

        <?php
        include './footerlinks.php';
        ?>

    </body>

</html>