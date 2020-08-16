<?php
include './unrestricted.php';
?>

<!DOCTYPE html>
<html lang="en">

    <?php include './headtag.php'; ?>
    <style>
        .modal #stu_img {
            max-width: 150px;
        }

        .modal .row p {
            font-size: 14px;
        }
    </style>

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
                                            <h2>Synopsis Submission</h2>
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
                                                                        <input class="btn btn-primary btn-block" type="submit" name="find" value="FIND">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                        </form>
                                                    </div>                                 

                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="padding-left: 80px;padding-right: 80px;">
                                                <div class="table-responsive">
                                                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>SL. NO.</th>
                                                                <th>Reg. No.</th>
                                                                <th>Session</th>
                                                                <th>Name</th>
                                                                <th>Dept.</th>
                                                                <th>Subject</th>
                                                                <th>Supervisor</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <input class="btn btn-success" type="button" name="view" value="VIEW" data-toggle="modal" data-target="#detailsModal">  
                                                        </td>

                                                        <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">

                                                            <div class="modal-dialog modal-xl" role="document">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="ModalLongTitle">Synopsis Submission</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">                                                                           
                                                                            <div class="row shadow-lg mb-4">
                                                                                  <h5 class="bg-primary col-md-12 mb-3  pt-2 pb-1 text-white">Candidate Details</h5>
                                                                                <div class="col-md-10 row">
                                                                                    <div class="col-md-6 row">
                                                                                        <p class="col-3">Reg.No.:</p>
                                                                                        <p class="col-md-9">123123412</p>
                                                                                    </div>
                                                                                    <div class="col-md-6 row">
                                                                                        <p class="col-4">Session:</p>
                                                                                        <p class="col-md-8">2020</p>
                                                                                    </div>
                                                                                    <div class="col-md-4 row">
                                                                                        <p class="col-4">Name :</p>
                                                                                        <p class="col-md-8">John Doe</p>
                                                                                    </div>
                                                                                    <div class="col-md-4 row">
                                                                                        <p class="col-3">Email:</p>
                                                                                        <p class="col-md-9">example@mail</p>
                                                                                    </div>
                                                                                    <div class="col-md-4 row">
                                                                                        <p class="col-4">Content:</p>
                                                                                        <p class="col-md-8">Sample Content</p>
                                                                                    </div>
                                                                                    <div class="col-md-4 row">
                                                                                        <p class="col-5">Supervisor:</p>
                                                                                        <p class="col-md-7">Prof XYZ</p>
                                                                                    </div>
                                                                                    <div class="col-md-4 row">
                                                                                        <p class="col-4">Faculty:</p>
                                                                                        <p class="col-md-8">Faculty of Science</p>
                                                                                    </div>
                                                                                     <div class="col-md-4 row">
                                                                                        <p class="col-4">Subject:</p>
                                                                                        <p class="col-md-8">Computer Science</p>
                                                                                    </div>
                                                                                    <div class="col-md-6 row">
                                                                                        <p class="col-6">Allotment date:</p>
                                                                                        <p class="col-md-6">20-02-2020</p>
                                                                                    </div>
                                                                                   
                                                                                </div>
                                                                                <div class="col-md-2 text-center pt-4 pb-4 pl-0 pr-0">
                                                                                    <img id="stu_img" src="https://www.adamanthr.com/wp-content/uploads/2016/04/dummy-man-570x570.png" alt="" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row shadow-lg mb-4" style="padding-bottom:30px;">
                                                                                  <h5 class="bg-primary col-md-12 mb-3  pt-2 pb-1 text-white">Synopsis Details</h5>
                                                                                <div class="col-3" style="padding-top:10px;padding-bottom:10px;">
                                                                                    Synopsis Title:
                                                                                </div>
                                                                                <div class="col-9" style="padding-top:10px;padding-bottom:10px;">
                                                                                    <input class="form-control" type="text" name="titleModal" placeholder="Enter synopsis title" required>
                                                                                </div>
                                                                                <div class="col-3" style="padding-top:10px;padding-bottom:10px;">
                                                                                    Committee Members:
                                                                                </div>
                                                                                <div class="col-9" style="padding-top:10px;padding-bottom:10px;">
                                                                                    <input class="form-control" type="text" name="mem1Modal" placeholder="Member 1" required>
                                                                                </div>
                                                                                <div class="col-3" style="padding-top:10px;padding-bottom:10px;">

                                                                                </div>
                                                                                <div class="col-9" style="padding-top:10px;padding-bottom:10px;">
                                                                                    <input class="form-control" type="text" name="mem2Modal" placeholder="Member 2" required>
                                                                                </div>
                                                                                <div class="col-3" style="padding-top:10px;padding-bottom:10px;">

                                                                                </div>
                                                                                <div class="col-9" style="padding-top:10px;padding-bottom:10px;">
                                                                                    <input class="form-control" type="text" name="mem3Modal" placeholder="Member 3" required>
                                                                                </div>
                                                                                <div class="col-3" style="padding-top:10px;padding-bottom:10px;">

                                                                                </div>
                                                                                <div class="col-9" style="padding-top:10px;padding-bottom:10px;">
                                                                                    <input class="form-control" type="text" name="mem4Modal" placeholder="Member 4" required>
                                                                                </div>
                                                                                <div class="col-3" style="padding-top:10px;padding-bottom:10px;">
                                                                                    Upload Synopsis:
                                                                                </div>
                                                                                <div class="col-9" style="padding-top:10px;padding-bottom:10px;">
                                                                                    <input class="form-control" type="file" name="synopsisModal" required style="height:45px;">
                                                                                </div>
                                                                                <div class="col-3" style="padding-top:10px;padding-bottom:10px;">
                                                                                    Upload Support Docs:
                                                                                </div>
                                                                                <div class="col-9" style="padding-top:10px;padding-bottom:10px;">
                                                                                    <input class="form-control" type="file" name="supportModal" required style="height:45px;"> 
                                                                                </div>
                                                                            </div>


                                                                        </div></div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Submit</button>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div



                                                        </tbody>
                                                    </table>
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