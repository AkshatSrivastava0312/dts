                <?php
                include './unrestricted.php';
                ?>

                <!DOCTYPE html>
                <html lang="en">

                <?php include './headtag.php'; ?>


                    <?php
                include './connection.php';
                ?>

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
                            <div class="col-xl-12 col-lg-12 col-md-12">
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
                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                        </div>

                                        <!-- for end -->
                                    </div>

                                </div>
                                <!-- /.container-fluid -->


                                <div class="container-fluid">


                                    <div class="card o-hidden border-0 shadow-lg my-5">
                                        <div class="card-header">
                                            <div class="text-center">
                                                <h1 class="h4 text-dark p-3">Approve Student</h1>
                                            </div>
                                        </div>
                                        <div class="card-body p-4">

                                                <form action="" method="POST">
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-md-10 form-group">
                                                            <label class="text-dark font-weight-bold">ENTER STUDENT REGISTRATION NO.</label>
                                                            <input type="text" name="reg_no" id="reg_no" class="form-control" required>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input class="mb-n3 btn btn-block btn-primary" type="submit" name="search_stu" id="search_stu" value="SEARCH">
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php
                                                $sql="";
                                                $execute="";
                                                $num="";
                                                if(isset($_POST['search_stu'])){
                                                global $sql,$execute,$num;
                                                $value=$_POST['reg_no'];
                                                $GLOBALS['sql'] = "SELECT * FROM `student_status` WHERE CONCAT (`stu_id`) LIKE '%".$value."'";
                                                $GLOBALS['execute'] = mysqli_query($conn, $sql);
                                                $GLOBALS['num'] = mysqli_num_rows($execute);
                                                } else {
                                                global $sql,$execute,$num;
                                                $GLOBALS['sql']  = "SELECT * FROM `student_status`";                             
                                                $GLOBALS['execute'] = mysqli_query($conn,$sql);
                                                $GLOBALS['num'] = mysqli_num_rows($execute);
                                                }                                                                
                                                ?>

                                                <table class="table table-striped" id="view_data">
                                                    <thead class="thead-dark bg-dark text-white">
                                                        <tr>
                                                            <td>
                                                                S.No.
                                                            </td>
                                                            <td>
                                                                Student ID
                                                            </td>                                             
                                                            <td>
                                                                Status
                                                            </td>
                                                            <td>
                                                                Action
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        for($i=0;$i<$num;$i++){
                                                          $row= mysqli_fetch_array($execute);
                                                        ?>                          
                                                        <tr>
                                                            <td> <?php echo $i+1 ;?></td>
                                                            <?php $value=$row['stu_id'];?>
                                                            <td><?php echo $value ;?></td>   
                                                                <?php 
                                                            if($row['reg_status']=='0'){
                                                                ?><td class="badge badge-pill badge-danger p-2 mt-3 w-25">Disapproved</td>
                                                            <?php ; } else  if($row['reg_status']=='1') {  ?>   
                                                                <td class="badge badge-pill badge-success p-2 mt-3 w-25">Approved</td>
                                                             <?php ;}
                                                                ?>                                            
                                                            <td>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_<?php echo $i;?>">
                                                                    View
                                                                </button>


                                <div class="modal fade" id="modal_<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                         <form action="" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <div class="container text-center font-weight-bold">
                                                    Action
                                                </div>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" id="std_info_card">                               
                                                <div class="container-fluid">
                                                    <div class="row">
                                                     <div class="col-6">    
                                                         <input type="hidden" name="hdn" value="<?php echo $value;?>">  
                                                     </div>
                                                    </div>
                                                    <div class="row">
                                                     <div class="col-6">   
                                                    <label>STATUS</label>
                                                     </div>
                                                        <div class="col-6">   
                                                    <select name="status" id="opt_status" class="form-control">
                                                        <option selected hidden disabled>SELECT</option>
                                                        <option value="1">ACTIVE</option>
                                                        <option value="0">INACTIVE</option>                                        
                                                    </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer text-center">
                                                <div class="container text-center">
                                                    <input type="submit" name="update" class="btn btn-success"value="UPDATE">
                                                </div>
                                            </div>                           
                                        </div>
                                         </form>
                                    </div>
                                </div>
                                <?php
                                   if(isset($_POST['update'])){
                                       $res=$_POST['status'];
                                       $query="UPDATE `student_status` SET `reg_status`='".$res."' WHERE `id`='".$_POST['hdn']."'";
                                       //echo $query;
                                       $result=mysqli_query($conn,$query);
                                        echo "<meta http-equiv='refresh' content='0'>";
                                   }                
                                ?>       



                                                            </td>
                                                        </tr>
                                                       <?php
                                                              }
                                                        ?>
                                               </tbody>
                                                </table>

                                        </div>
                                    </div>
                                </div>               


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
                        </div>
                        <!-- End of Main Content -->


                    </div>
                    <!-- End of Content Wrapper -->


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