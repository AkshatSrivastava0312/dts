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
                                        <h2>Master Teacher</h2>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="p-5">
                                                        <div class="form-group">
                                                            <h3> Select Faculty</h3>
                                                            <br>
                                                            <h3>Select Subject</h3>
                                                            <br>
                                                            <h3>Select Scale</h3>
                                                            <br>
                                                            <h3>Teacher Name</h3>
                                                            <br>
                                                            <h3>Contact no.</h3>
                                                            <br>
                                                            <h3>Email</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="p-5">


                                                        <?php
                                                        $conn = mysqli_connect("localhost", "root", "", "dts");
                                                        if ($conn) {
                                                            $query = "SELECT * FROM `mstr_faculty`";
                                                            $result = mysqli_query($conn, $query);
                                                            $num = mysqli_num_rows($result);
                                                        }
                                                        ?>


                                                        <form class="user" action="" method="post">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <select style="width:700px; height: 40px;" name="fac" id="mstr_fac">
                                                                            <option value=""> Select Faculty</option>
                                                                            <?php
                                                                            for ($i = 0; $i < $num; $i++) {
                                                                                $row = mysqli_fetch_array($result);
                                                                                ?>
                                                                                <option value="<?php echo $row['id'] ?>"><?php echo $row['faculty_name'] ?></option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">

                                                                    <?php
                                                                    $conn = mysqli_connect("localhost", "root", "", "dts");
                                                                    if ($conn) {
                                                                        $query = "SELECT * FROM `mstr_subject`";
                                                                        $result = mysqli_query($conn, $query);
                                                                        $num = mysqli_num_rows($result);
                                                                    }
                                                                    ?>



                                                                    <div class="col-lg-12">
                                                                        <select style="width:700px; height: 40px;" name="sub" id="mstr_sub">
                                                                            <?php /*
                                                                          for($i=0;$i<$num;$i++){
                                                                          $row= mysqli_fetch_array($result);
                                                                          ?>
                                                                          <option value="<?php echo $row['subject_name'] ?>"><?php echo $row['subject_name'] ?></option>
                                                                          <?php
                                                                          } */
                                                                            ?>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">

                                                                    <div class="col-lg-12">
                                                                        <select name="scale" style="width:700px; height: 40px;" name="scale">
                                                                            <option value="Assistant Professor">Assistant Professor</option>
                                                                            <option value="Associate Professor">Associate Professor</option>
                                                                            <option value="Professor">Professor</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <input type="text" style="width:700px; height: 40px;" name="thr">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <input type="number" style="width:700px; height: 40px;" name="cont">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <input type="email" style="width:700px; height: 40px;" name="email">
                                                                    </div>
                                                                </div>
                                                                <br><br>
                                                            </div>
                                                            <input type="submit" class="btn btn-primary btn-user btn-block" name="add" value="ADD" id="tch_sav_btn">

                                                            <?php
                                                            $conn = mysqli_connect("localhost", "root", "", "dts");
                                                            if ($conn) {
                                                                if (isset($_POST['add'])) {
                                                                    $fac = $_POST['fac'];
                                                                    $sub = $_POST['sub'];
                                                                    $scale = $_POST['scale'];
                                                                    $thr = $_POST['thr'];
                                                                    $cont = $_POST['cont'];
                                                                    $email = $_POST['email'];
                                                                    $q1 = mysqli_query($conn, "SELECT * FROM `mstr_teacher` WHERE `teacher_name` = '" . $thr . "'");
                                                                    if (mysqli_num_rows($q1) > 0) {
                                                                        echo '<script> alert("Data already exists")</script>';
                                                                    } else {
                                                                        $query = "INSERT INTO `mstr_teacher`(`faculty_name`, `subject_name`, `scale_name`, `teacher_name`, `contact`, `email`) VALUES ('$fac','$sub','$scale','$thr',$cont,'$email')";
                                                                        $result = mysqli_query($conn, $query);
                                                                    }
                                                                }
                                                            }
                                                            ?>


                                                            <hr>

                                                        </form>
                                                        <?php
                                                        $q = "SELECT * FROM `mstr_teacher`";
                                                        $a = mysqli_query($conn, $q);
                                                        $num = mysqli_num_rows($a);
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="padding-left: 80px;">
                                                <div class="table-responsive">
                                                    <table id="myTable" class="table table-striped"  width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>SL. NO.</th>
                                                                <th>FACULTY NAME</th>
                                                                <th>SUBJECT NAME</th>
                                                                <th>SCALE</th>
                                                                <th>TEACHER NAME</th>
                                                                <th>CONTACT</th>
                                                                <th>EMAIL</th>
                                                                <th>ACTION</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
                                                            for ($i = 0; $i < $num; $i++) {
                                                                $row = mysqli_fetch_array($a);
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $i + 1; ?></td>
                                                                    <td><?php echo $row['faculty_name']; ?></td>
                                                                    <td><?php echo $row['subject_name']; ?></td>
                                                                    <td><?php echo $row['scale_name']; ?></td>
                                                                    <td><?php echo $row['teacher_name']; ?></td>
                                                                    <td><?php echo $row['contact']; ?></td>
                                                                    <td><?php echo $row['email']; ?></td>
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

</body>

</html>
<script>
    $(document).ready(function() {
        $('#mstr_fac').change(function() {
            var mstr_f_id = $(this).val();
            $.ajax({
                url: "load_mstr_sub.php",
                method: "POST",
                data: {
                    mstr_f_id: mstr_f_id
                },
                success: function(data) {
                    $('#mstr_sub').html(data);
                }
            });
        });
    });
</script>