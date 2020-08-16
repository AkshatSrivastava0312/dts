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

                        <!-- for started          -->
                        <div class="row justify-content-center">

                            <div class="col-xl-10 col-lg-12 col-md-9">

                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body p-0">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center" style="padding-top: 30px">
                                            <h2>Submission Certificate</h2>
                                            <br>
                                             <h2>Download Pre-Submission Certificate</h2>
                                        </div>
                                        <div class="row">

                                            <div class="col-lg-12">
                                                    <!-- <div class="col-lg-4">
                                                        <div class="p-5">
                                                            <div class="form-group">
                                                                <h3> Authority Role</h3>
                                                                <br>
                                                                <h3>From</h3>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-lg-12">
                                                        <div class="p-5">


                                                            <form class="user" action="" method="post">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label>ENTER REGISTRATION NO.</label>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <input class="form-control" type="text" name="regno" placeholder="Registration No. Here" style="">
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <input class="btn btn-primary btn-block" type="submit" name="search" value="SEARCH">
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-5"></div>
                                                                        <div class="col-2">
                                                                            <a href="#" class="btn btn-success" style="cursor: not-allowed;">Download</a>
                                                                        </div>
                                                                        <div class="col-5"></div>                                                                        
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </form>
                                                                </div>                                 
                                                                
                                                        </div>
                                                    </div>
                                            
                                             </div>
                                        <div class="col-lg-2 d-none d-lg-block">
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- for end -->
                    </div>
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2020</span>
                            </div>
                        </div>
                    </footer>

                </div>
            </div>

            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->


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