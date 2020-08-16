<?php
include './unrestricted.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include './headtag.php'; ?>

<?php include './connection.php'; ?>

<?php

if ($conn) {
    if (isset($_POST['save'])) {
        $rdc_date  = $_POST['rdc_date'];
        $rdc_head  = $_POST['rdc_head'];
        $rdc_conv = $_POST['rdc_conv'];

        $rdc_exp1_desig = $_POST['rdc_exp1_desig'];
        $rdc_exp1_name = $_POST['rdc_exp1_name'];
        $rdc_exp1_cont = $_POST['rdc_exp1_cont'];
        $rdc_exp1_univ = $_POST['rdc_exp1_univ'];

        $rdc_exp2_desig = $_POST['rdc_exp2_desig'];
        $rdc_exp2_name = $_POST['rdc_exp2_name'];
        $rdc_exp2_cont = $_POST['rdc_exp2_cont'];
        $rdc_exp2_univ = $_POST['rdc_exp2_univ'];

        $rdc_exp3_desig = $_POST['rdc_exp3_desig'];
        $rdc_exp3_name = $_POST['rdc_exp3_name'];
        $rdc_exp3_cont = $_POST['rdc_exp3_cont'];
        $rdc_exp3_univ = $_POST['rdc_exp3_univ'];

        $rdc_exp4_desig = $_POST['rdc_exp4_desig'];
        $rdc_exp4_name = $_POST['rdc_exp4_name'];
        $rdc_exp4_cont = $_POST['rdc_exp4_cont'];
        $rdc_exp4_univ = $_POST['rdc_exp4_univ'];

        $query = "INSERT INTO `rdc_formation`(`rdc_date`, `rdc_head`, `rdc_convenor`, `rdc_exp1_d`, `rdc_exp1_name`, `rdc_exp1_univ`, `rdc_exp1_cont`, `rdc_exp2_d`, `rdc_exp2_name`, `rdc_exp2_univ`, `rdc_exp2_cont`, `rdc_exp3_d`, `rdc_exp3_name`, `rdc_exp3_univ`, `rdc_exp3_cont`, `rdc_exp4_d`, `rdc_exp4_name`, `rdc_exp4_univ`, `rdc_exp4_cont`) VALUES ('$rdc_date','$rdc_head',' $rdc_conv ',' $rdc_exp1_desig',' $rdc_exp1_name ',' $rdc_exp1_univ',' $rdc_exp1_cont ','$rdc_exp2_desig','$rdc_exp2_name','$rdc_exp2_univ','$rdc_exp2_cont ','$rdc_exp3_desig','$rdc_exp3_name','$rdc_exp3_univ',' $rdc_exp3_cont','$rdc_exp4_desig','$rdc_exp4_name','$rdc_exp4_univ',' $rdc_exp4_cont')";
        $resu = mysqli_query($conn, $query);
        $num = mysqli_num_rows($resu);
    }
}

?>

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
                                <h1 class="h4 text-dark p-3">RDC Formation</h1>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="container-fluid p-3">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label>RDC DATE</label>
                                            <input class="form-control" name="rdc_date" type="date" placeholder="" required>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label>RDC HEAD</label>
                                            <input class="form-control" name="rdc_head" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label>RDC CONVENOR</label>
                                            <input class="form-control" name="rdc_conv" type="text" placeholder="" required>
                                        </div>


                                        <div class="container-fluid bg-primary p-2 m-3 text-white">
                                            EXPERT 1
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>DESIGNATION</label>
                                            <select class="form-control" name="rdc_exp1_desig" type="text" placeholder="" required>
                                                <option disabled selected hidden>SELECT</option>
                                                <option>ASSISTANT</option>
                                                <option>ASSOCIATE</option>
                                                <option>PROFESSOR</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>NAME</label>
                                            <input class="form-control" name="rdc_exp1_name" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>CONTACT</label>
                                            <input class="form-control" name="rdc_exp1_cont" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>UNIVERSITY</label>
                                            <input class="form-control" name="rdc_exp1_univ" type="text" placeholder="" required>
                                        </div>


                                        <div class="container-fluid bg-primary p-2 m-3 text-white">
                                            EXPERT 2
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>DESIGNATION</label>
                                            <select class="form-control" name="rdc_exp2_desig" type="text" placeholder="" required>
                                                <option disabled selected hidden>SELECT</option>
                                                <option>ASSISTANT</option>
                                                <option>ASSOCIATE</option>
                                                <option>PROFESSOR</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>NAME</label>
                                            <input class="form-control" name="rdc_exp2_name" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>CONTACT</label>
                                            <input class="form-control" name="rdc_exp2_cont" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>UNIVERSITY</label>
                                            <input class="form-control" name="rdc_exp2_univ" type="text" placeholder="" required>
                                        </div>


                                        <div class="container-fluid bg-primary p-2 m-3 text-white">
                                            EXPERT 3
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>DESIGNATION</label>
                                            <select class="form-control" name="rdc_exp3_desig" type="text" placeholder="" required>
                                                <option disabled selected hidden>SELECT</option>
                                                <option>ASSISTANT</option>
                                                <option>ASSOCIATE</option>
                                                <option>PROFESSOR</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>NAME</label>
                                            <input class="form-control" name="rdc_exp3_name" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>CONTACT</label>
                                            <input class="form-control" name="rdc_exp3_cont" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>UNIVERSITY</label>
                                            <input class="form-control" name="rdc_exp3_univ" type="text" placeholder="" required>
                                        </div>


                                        <div class="container-fluid bg-primary p-2 m-3 text-white">
                                            EXPERT 4
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>DESIGNATION</label>
                                            <select class="form-control" name="rdc_exp4_desig" type="text" placeholder="" required>
                                                <option disabled selected hidden>SELECT</option>
                                                <option>ASSISTANT</option>
                                                <option>ASSOCIATE</option>
                                                <option>PROFESSOR</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>NAME</label>
                                            <input class="form-control" name="rdc_exp4_name" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>CONTACT</label>
                                            <input class="form-control" name="rdc_exp4_cont" type="text" placeholder="" required>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>UNIVERSITY</label>
                                            <input class="form-control" name="rdc_exp4_univ" type="text" placeholder="" required>
                                        </div>


                                        <div class="col-md-12 text-center">
                                            <input type="submit" name="save" value="SAVE" class="btn btn-primary btn-lg text-center">
                                        </div>
                                    </div>
                                </form>


                               
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