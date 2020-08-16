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
                                        <h2>Master Faculty</h2>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="p-5">
                                                        <div class="form-group">
                                                            <h4> Enter Faculty Name</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="p-5">

                                                        <form class="user" action="fac_entry.php" method="post">
                                                            <div class="form-group">

                                                                <input type="text" name="fname" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Faculty Name" required>
                                                            </div>
                                                            <input type="submit" class="btn btn-primary btn-user btn-block" name="add" value="ADD">

                                                            <hr>



                                                        </form>





                                                        <?php
                                                        $conn = mysqli_connect("localhost", "root", "", "dts");
                                                        $take = "SELECT * FROM `mstr_faculty`";
                                                        $e = mysqli_query($conn, $take);
                                                        $num = mysqli_num_rows($e);

                                                        ?>


                                                        <div class="table-responsive">
                                                            <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>SL. NO.</th>
                                                                        <th>FACULTY NAME</th>
                                                                        <th>ACTION</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    for ($i = 0; $i < $num; $i++) {
                                                                        $row = mysqli_fetch_array($e);
                                                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $i + 1; ?></td>
                                                                            <td><?php echo $row['faculty_name']; ?></td>
                                                                            <td><a href="#" class="btn btn-primary">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
                                                                        </tr>
                                                                    <?php
                                                                    }
                                                                    ?>

                                                                </tbody>
                                                            </table>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-2 d-none d-lg-block"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- for end -->
                </div>


            </div>
            <!-- /.container-fluid -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->

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