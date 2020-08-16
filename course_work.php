<?php
include './unrestricted.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include './headtag.php'; ?>




<!-- Connection code -->


<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dts";

$conn = mysqli_connect($host, $user, $pass, $db);

$resu = 0;

if ($conn) {
    if (isset($_POST['submit'])) {
        $session = $_POST['session'];
        $faculty = $_POST['faculty'];
        $subject = $_POST['subject'];
        $reg_no = $_POST['reg_no'];
        $name = $_POST['name'];
        $father_name = $_POST['father_name'];
        $seat_alloted = $_POST['seat_alloted'];
        $category =  $_POST['category'];
        $ug_perc =  $_POST['ug_perc'];
        $pg_perc =  $_POST['pg_perc'];
        $marks =  $_POST['marks'];
        $rank =  $_POST['rank'];
        $cat_rank =  $_POST['cat_rank'];
        $query = "INSERT INTO `dts`.`student_master` (`session`, `faculty`, `subject`, `reg_no`, `name`, `father_name`, `seat_alloted`, `category`, `ug_perc`, `pg_perc`, `marks`, `rank`, `cat_rank`) VALUES ('$session', '$faculty', '$subject', '$reg_no', '$name', '$father_name', '$seat_alloted', '$category', '$ug_perc', '$pg_perc', '$marks', '$rank', '$cat_rank')";

        $resu = mysqli_query($conn, $query);
    }
} else {
    echo "Not connected to DB";
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


                <div class="container-fluid pt-0">


                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-header">
                            <div class="text-center">
                                <h1 class="h4 text-dark p-3">Course Work</h1>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="container-fluid p-3">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label>Select session</label>
                                        <select class="form-control" name="session" id="session">
                                            <option disabled="disabled" selected hidden>SELECT</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Select faculty</label>
                                        <select class="form-control" name="faculty" id="faculty">
                                            <option disabled="disabled" selected hidden>SELECT</option>
                                            <?php
                                            if ($conn) {
                                                $query = "SELECT * FROM `mstr_faculty`";
                                                $resu = mysqli_query($conn, $query);
                                                $num = mysqli_num_rows($resu);
                                                for ($i = 0; $i < $num; $i++) {
                                                    $row = mysqli_fetch_array($resu);
                                                    echo "<option value='" . $row['id'] . "'>" . $row['faculty_name'] . "</option>";
                                                }
                                            } else {
                                                echo "Not connected to DB";
                                            }

                                            ?>

                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Select Subject</label>
                                        <select class="form-control" name="subject" id="subject">
                                            <!-- <option disabled="disabled" selected hidden>SELECT</option> -->
                                        </select>
                                    </div>


                                    <div class="col-md-4 form-group">
                                        <label></label>
                                        <h5>RESEARCH METHODOLOGY</h5>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Max Marks</label>
                                        <input class="form-control" name="rm_max_marks" type="number" placeholder="" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Min Marks</label>
                                        <input class="form-control" name="rm_min_marks" type="number" placeholder="" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label></label>
                                        <h5>CORE SUBJECT</h5>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Max Marks</label>
                                        <input class="form-control" name="csub_max_marks" type="number" placeholder="" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Min Marks</label>
                                        <input class="form-control" name="csub_min_marks" type="number" placeholder="" required>
                                    </div>
                                </div>
                                <div class="container-fluid text-center">
                                    <button class="btn btn-primary btn-lg">Submit</button>
                                </div>
                                </form>


                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <td>
                                                S.No.
                                            </td>
                                            <td>
                                                Reg.No.
                                            </td>
                                            <td>
                                                Student Name
                                            </td>
                                            <td>
                                                Alloted Teacher
                                            </td>
                                            <td>
                                                Action
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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