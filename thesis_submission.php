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
                                            <h2>Thesis Submission</h2>
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
                                                                       <th>Candidate</th>
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
                                                            <td>
                                                                <input class="btn btn-success" type="button" name="upload" value="UPLOAD THESIS" data-toggle="modal" data-target="#detailsModal">  
                                                            </td>
                                                            
                                                            <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                                                
                                                                <div class="modal-dialog modal-xl" role="document">
                                                                   
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="ModalLongTitle">Thesis Submission</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-2">
                                                                                    Thesis Title
                                                                                </div>
                                                                                <div class="col-10">
                                                                                    <input class="form-control" type="text" name="thesname" placeholder="Enter Thesis Title" required>
                                                                                </div>
                                                                            </div> 
                                                                             <br>
                                                                            <div class="row">
                                                                                <div class="col-2">
                                                                                Examinors :
                                                                                </div>
                                                                            </div>
                                                                             <br>
                                                                             <div class="row">
                                                                                  <div class="col">
                                                                                    Name
                                                                                </div>
                                                                                 <div class="col">
                                                                                    University
                                                                                </div>
                                                                                 <div class="col">
                                                                                    Department
                                                                                </div>
                                                                                 <div class="col">
                                                                                    Email
                                                                                </div>
                                                                                 <div class="col">
                                                                                   Contact No.
                                                                                </div>
                                                                             </div><br>
                                                                              <div class="row">
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="name1" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                    <input class="form-control" type="text" name="univ1" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="dept1" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="email" name="email1" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="number" name="contact1" required>
                                                                                </div>
                                                                             </div>
                                                                             <br>
                                                                              <div class="row">
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="name2" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                    <input class="form-control" type="text" name="univ2" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="dept2" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="email" name="email2" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="number" name="contact2" required>
                                                                                </div>
                                                                             </div>
                                                                             <br>
                                                                              <div class="row">
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="name3" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                    <input class="form-control" type="text" name="univ3" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="dept3" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="email" name="email3" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="number" name="contact3" required>
                                                                                </div>
                                                                             </div>
                                                                             <br>
                                                                              <div class="row">
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="name4" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                    <input class="form-control" type="text" name="univ4" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="dept4" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="email" name="email4" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="number" name="contact4" required>
                                                                                </div>
                                                                             </div>
                                                                             <br>
                                                                              <div class="row">
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="name5" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                    <input class="form-control" type="text" name="univ5" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="dept5" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="email" name="email5" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="number" name="contact5" required>
                                                                                </div>
                                                                             </div>
                                                                             <br>
                                                                              <div class="row">
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="name6" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                    <input class="form-control" type="text" name="univ6" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="text" name="dept6" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="email" name="email6" required>
                                                                                </div>
                                                                                 <div class="col">
                                                                                     <input class="form-control" type="number" name="contact6" required>
                                                                                </div>
                                                                             </div>
                                                                             <br>
                                                                             <div class="row">
                                                                                 <div class="col-2">
                                                                                    Upload Thesis
                                                                                 </div>
                                                                                 <div class="col-4">
                                                                                     <input class="form-control" type="file" name="thesModal" required>
                                                                                 </div>
                                                                                 <div class="col-2">
                                                                                   Official Docs
                                                                                 </div>
                                                                                 <div class="col-4">
                                                                                     <input class="form-control" type="file" name="officialModal" required>
                                                                                 </div>
                                                                             </div>
                                                                             <br>
                                                                              <div class="row">
                                                                                 <div class="col-2">
                                                                                   Upload Supporting docs
                                                                                 </div>
                                                                                 <div class="col-10">
                                                                                     <input class="form-control" type="file" name="supportModal" required>
                                                                                 </div>
                                                                             </div>
                                                                             
                                                                        </div>
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