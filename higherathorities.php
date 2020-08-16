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
                                            <h2>Higher Authorities</h2>
                                        </div>
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="row">
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
                                                                        <div class="col-lg-12">
                                                                            <label for="">AUTHORITY ROLE</label>
                                                                            <select class="form-control" name="auth">
                                                                                <option value="VC">VC</option>
                                                                                <option value="Pro VC">Pro VC</option>
                                                                                <option value="Registar">Registar</option>
                                                                                <option value="Dept. Registar">Dept. Registar</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">

                                                                        <div class="col-lg-12">
                                                                            <label for="">FROM</label>
                                                                            <select class="form-control" name="from" id="opt_from">
                                                                                <option value="" disabled selected hidden>Select</option>
                                                                                <option value="lkouniv">Lucknow University</option>
                                                                                <option value="others">Others</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div id="option_of_from" class="col-md-12"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-center">
                                                                    <input type="submit" class="col-2 btn btn-primary btn-lg" name="add" value="ADD">
                                                                </div>
                                                                <?php
                                                                $conn = mysqli_connect("localhost", "root", "", "dts");
                                                                if ($conn) {
                                                                    if (isset($_POST['add'])) {
                                                                        $auth = $_POST['auth'];
                                                                        $from = $_POST['from'];
                                                                        $query = "INSERT INTO `higher_authorities`(`authority_role`, `authority_from`) VALUES ('$auth','$from')";
                                                                        $result = mysqli_query($conn, $query);
                                                                    }
                                                                }
                                                                ?>


                                                                <hr>

                                                            </form>
                                                            <?php
                                                            $q = "SELECT * FROM `higher_authorities`";
                                                            $a = mysqli_query($conn, $q);
                                                            $num = mysqli_num_rows($a);
                                                            ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12" style="padding-left: 80px;">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                                            <thead>
                                                                <tr>
                                                                    <th>SL. NO.</th>
                                                                    <th>AUTHORITY ROLE</th>
                                                                    <th>FROM</th>
                                                                    <th>ACTION</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>SL. NO.</th>
                                                                    <th>AUTHORITY ROLE</th>
                                                                    <th>FROM</th>
                                                                    <th>ACTION</th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>

                                                                <?php
                                                                for ($i = 0; $i < $num; $i++) {
                                                                    $row = mysqli_fetch_array($a);
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $i + 1; ?></td>
                                                                        <td><?php echo $row['authority_role']; ?></td>
                                                                        <td><?php echo $row['authority_from']; ?></td>
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


        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->


        <?php
        include './footerlinks.php';
        ?>

        <?php
        $sql = "SELECT * FROM `mstr_teacher`";
        $execute = mysqli_query($conn, $sql);
        $total = mysqli_num_rows($execute);
        ?>

        <script>
            document.getElementById('opt_from').addEventListener('change', function () {
                var value = document.getElementById('opt_from').value;
                if (value == "lkouniv") {
                    var html_text = `<label>SELECT TEACHER</label><select name="name" class="form-control">`;

                    html_text +=
<?php
echo "`";
for ($i = 0; $i < $total; $i++) {
    $r = mysqli_fetch_array($execute);
    echo "<option>" . $r['teacher_name'] . "</option>";
}

echo "`";
?>;
                    document.getElementById("option_of_from").innerHTML = html_text + "</select>";
                } else if (value == "others") {
                    var html_text = `<label>ENTER TEACHER NAME</label><input name="name" type="text" class="form-control">`;

                    document.getElementById("option_of_from").innerHTML = html_text;
                }
            })
        </script>

    </body>
</html>
