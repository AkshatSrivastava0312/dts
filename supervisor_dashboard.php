<?php
include './unrestricted.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<?php include './headtag.php';?>

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
            <h1 class="h3 mb-0 text-gray-800">Supervisor Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row" style="padding-left:140px; padding-top:50px;">

            <!-- Alloted Students -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Alloted Students</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas  fa-user-plus text-gray-300" style="font-size: 100px"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Research Publication -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">                 
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Research Publication</div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-sticky-note text-gray-300" style="font-size: 100px"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Submitted Synopsis -->
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">                 
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Submitted Synopsis</div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-suitcase text-gray-300" style="font-size: 100px"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
          
          <div class="row" style="padding-left:140px; padding-top:50px;">
              
              
            <!-- Course Work Result -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">                 
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Course Work Result</div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-percent text-gray-300" style="font-size: 100px"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                  <!-- Thesis Status -->
                  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">                 
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Thesis Status</div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-bell text-gray-300" style="font-size: 100px"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                
        </div>

         
         </div>
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
