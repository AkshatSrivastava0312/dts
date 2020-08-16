<?php
include './unrestricted.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include './headtag.php'; ?>

<?php include './connection.php'; ?>

<!-- Connection end -->

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
                                <h1 class="h4 text-dark p-3">RDC Decision</h1>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="container-fluid p-3">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label>RDC HEAD</label>
                                            <input class="form-control" name="rdc_head" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>RDC CONVENOR</label>
                                            <input class="form-control" name="rdc_conv" type="text" placeholder="" required>
                                        </div>
                                        
                                        <div class="col-md-6 form-group">
                                            <label>Scheduled Date</label>
                                            <input class="form-control" name="rdc_head" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Scheduled Time</label>
                                            <input class="form-control" name="rdc_conv" type="text" placeholder="" required>
                                        </div>
                                        
                                        <div class="col-md-12 form-group">
                                            <label>Expert Status :</label>
                                            </div>
                                        
                                        <div class="col form-check form-check-inline px-3">
                                            <input class="form-check-input" type="checkbox" name="exp1" id="exp1">
                                            <label class="form-check-label" for="exp1">Member 1</label>
                                        </div>
                                        <div class="col form-check form-check-inline px-3">
                                            <input class="form-check-input" type="checkbox" name="exp2" id="exp2">
                                            <label class="form-check-label" for="exp2">Member 2</label>
                                        </div>
                                        
                                        <div class="col form-check form-check-inline px-3">
                                            <input class="form-check-input" type="checkbox" name="exp3" id="exp3">
                                            <label class="form-check-label" for="exp3">Member 3</label>
                                        </div>
                                        
                                        <div class="col form-check form-check-inline px-3">
                                            <input class="form-check-input" type="checkbox" name="exp4" id="exp4">
                                            <label class="form-check-label" for="exp4">Member 4</label>
                                        </div> 
                                        
                                        
                                        <div class="col-md-12 form-group">
                                            <label> </label>
                                            </div>
                                        
                                         <div class="col-md-12 form-group">
                                            <label>RDC Decisions : </label>
                                            </div>                                     
                                                     
                                            <div class="col-md-12 form-group">
                                                                                                  
                                                    <textarea name="editor1" id="editor1" rows="10" cols="147">                                                            
                                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace('editor1');
                                                    </script>
                                              
                                            </div>
                                        
                                         <div class="col-md-12 form-group">
                                            <label>Upload Necessary Docs : </label>
                                            </div>
                                        
                                        <div class="col-md-12 form-group">
                                            <input type="file" class="form-control" name="upload_docs" required>
                                            </div>
                                                                                
                                        <div class="col-md-12 form-group">
                                            <center><input type="submit" class="btn btn-success" name="submit" value="Submit"></center>
                                            </div>
                                        
                                    </div>
                                </form>
                                
                                <?php                                
                                
                                if(isset($_POST['submit']))
                                {
                                  $opt1=$_POST['exp1'];  
                                  $opt2=$_POST['exp2'];  
                                  $opt3=$_POST['exp3'];  
                                  $opt4=$_POST['exp4'];
                                  
                                 
                                }
                                
                                ?>   
                                
                            </div>
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