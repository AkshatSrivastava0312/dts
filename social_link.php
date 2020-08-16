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
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>
                           
                                                 
                            
                       
                        
                        <!-- Content Row -->
                        <div class="card" style="margin-left:20%;margin-right:20%;padding-top: 10px;padding-left:20px;padding-right:70px;">
                            <fieldset style="padding-top: 10px;padding-bottom:40px;">
                            <legend>Update Your Social Links</legend>
                            <form method="POST" action="social_save.php" style="margin-left:5%;">
                                <label>Facebook</label><br>
                                <input type="text" name="fbTxt" value="http://facebook.com/" size="100px" style="height:35px;"><br><br>
                                <label>Twitter</label><br>
                                <input type="text" name="twtTxt" value="http://twitter.com/" size="100px" style="height:35px;"><br><br>
                                <label>Google+</label><br>
                                <input type="text" name="gplusTxt" value="http://plus.google.com/" size="100px" style="height:35px;"><br><br>
                                <label>LinkedIn</label><br>
                                <input type="text" name="linTxt" value="http://www.linkedin.com/" size="100px" style="height:35px;"><br><br>
                                <label>YouTube</label><br>
                                <input type="text" name="ytbTxt" value="http://www.youtube.com/" size="100px" style="height:35px;"><br><br>
                                <input class="btn btn-primary" type="submit" name="update" value="Update" style="float: right;">
                            </form>
                        </fieldset>
                            </div><br><br><br><br>
                    <!-- /.container-fluid -->

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
