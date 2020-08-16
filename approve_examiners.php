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


                <div class="container-fluid">


                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-header">
                            <div class="text-center">
                                <h1 class="h4 text-dark p-3">Approve Examiners</h1>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="container-fluid p-3">
                                <form action="" method="POST">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-10 form-group">
                                            <label class="text-dark font-weight-bold">ENTER STUDENT REGISTRATION / THESIS NO.</label>
                                            <input type="text" name="thesis_no" id="thesis_no" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <input class="mb-n3 btn btn-block btn-primary" type="submit" name="search_stu" id="search_stu" value="SEARCH">
                                        </div>
                                    </div>
                                </form>


                                <table class="table table-striped">
                                    <thead class="thead-dark bg-dark text-white">
                                        <tr>
                                            <td>
                                                S.No.
                                            </td>
                                            <td>
                                                Session
                                            </td>
                                            <td>
                                                Candidate
                                            </td>
                                            <td>
                                                Supervisor
                                            </td>
                                            <td>
                                                Faculty
                                            </td>
                                            <td>
                                                Department
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
                                        <tr>
                                            <td>1</td>
                                            <td>2020</td>
                                            <td>John</td>
                                            <td>Dr. Thomas</td>
                                            <td>Department of Science</td>
                                            <td>Computer Science</td>
                                            <td>
                                                <div class="badge badge-success badge-pill p-2">
                                                    Approved
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_1">
                                                    View
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2020</td>
                                            <td>John</td>
                                            <td>Dr. Thomas</td>
                                            <td>Department of Science</td>
                                            <td>Computer Science</td>
                                            <td>
                                                <div class="badge badge-danger badge-pill p-2">
                                                    Disapproved
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_2">
                                                    View
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modals start -->
                <style>
                    .modal #stu_img {
                        max-width: 150px;
                    }

                    .modal .row p {
                        font-size: 14px;
                    }
                </style>
                <div class="modal fade" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <div class="container text-center font-weight-bold">
                                    Examiner's Approval
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="std_info_card">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-10 row">
                                            <div class="col-md-4 row">
                                                <p class="col-3">Reg.No.:</p>
                                                <p class="col-md-8">123123412</p>
                                            </div>
                                            <div class="col-md-4 row">
                                                <p class="col-4">Session:</p>
                                                <p class="col-md-8">2020</p>
                                            </div>
                                            <div class="col-md-4 row">
                                                <p class="col-4">Faculty:</p>
                                                <p class="col-md-8">Dept of Science</p>
                                            </div>
                                            <div class="col-md-4 row">
                                                <p class="col-3">Name.:</p>
                                                <p class="col-md-8">John Doe</p>
                                            </div>
                                            <div class="col-md-4 row">
                                                <p class="col-4">Supervisor:</p>
                                                <p class="col-md-8">Mr. ABC</p>
                                            </div>
                                            <div class="col-md-4 row">
                                                <p class="col-4">Department:</p>
                                                <p class="col-md-8">Dept of Science</p>
                                            </div>
                                            <div class="col-md-12 row">
                                                <p class="col-1">Title:</p>
                                                <p class="col-md-11">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, iste.</p>
                                            </div>
                                            <div class="col-md-6 row">
                                                <p class="col-4">Submission date:</p>
                                                <p class="col-md-8">20-02-2020</p>
                                            </div>
                                            <div class="col-md-6 row">
                                                <p class="col-4">Days:</p>
                                                <p class="col-md-8">5</p>
                                            </div>
                                            <div class="col-md-12 row">
                                                <p class="col-1">Status:</p>
                                                <p class="col-md-11">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis, similique!</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 text-center pt-4 pb-4 pl-0 pr-0">
                                            <img id="stu_img" src="https://www.adamanthr.com/wp-content/uploads/2016/04/dummy-man-570x570.png" alt="" />
                                        </div>

                                        <hr>

                                        <div class="col-md-12">
                                            <table class="table table-striped">
                                                <thead class="thead-dark bg-dark text-white">
                                                    <tr>
                                                        <td>
                                                            S.No.
                                                        </td>
                                                        <td>
                                                            Name
                                                        </td>
                                                        <td>
                                                            University
                                                        </td>
                                                        <td>
                                                            Dept
                                                        </td>
                                                        <td>
                                                            Email
                                                        </td>
                                                        <td>
                                                            Contact
                                                        </td>
                                                        <td>
                                                            Action
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>John</td>
                                                        <td>Lko Univ</td>
                                                        <td>Department of Science</td>
                                                        <td>ab@ab.com</td>
                                                        <td>7373737373</td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_2">
                                                                Approve
                                                            </button>
                                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_2">
                                                                Disapprove
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-12">
                                            <label>Important Note</label>
                                            <textarea class="form-control" name="imp_note" id="imp_note" cols="10" rows="4" placeholder="Enter text here ..."></textarea>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label>Upload Docs</label>
                                            <input type="file" name="file" id="file_input" class="form-control" style="padding-bottom:35px;">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer text-center">
                                <div class="container text-center">
                                    <button class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modals end -->

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