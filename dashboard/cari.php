<?php
session_start();
require('../function.php');
header("X-XSS-Protection: 1; mode=block");
if (!isset($_SESSION['login']) > 0) {
    echo "<script>location.href='../'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include "../partials/head.php"; ?>
    <title>Upload Dokumen</title>
    
</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include "../partials/navbar.php" ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php $active = 'p' ?>
        <?php include "../partials/sidebar.php" ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->

                <!-- *************************************************************** -->
                <!-- End First Cards -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Sales Charts Section -->
                <!-- *************************************************************** -->
                <div class="row">
                <div class="col-md-3">
                        <div class="card">
                            <div class="card-body"> 
                
                               
                                <h4 class="card-title">Reporting</h4>
                                <hr>

                               
                                        <label>2023</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="" onchange="location = this.value;">
                                            <option disabled selected value>Choose...</option>
                                            
                                           
                                            <option value="januari.php.php">Januari</option>
                                            <option value="februari.php.php">Februari</option>
                                            <option value="maret.php.php">Maret</option>
                                            <option value="april.php.php">April</option>
                                            <option value="mei.php.php">Mei</option>
                                            <option value="juni.php.php">Juni</option>
                                            <option value="juli.php.php">Juli</option>
                                            <option value="agustus.php.php">Agustus</option>
                                            <option value="september.php.php">September</option>
                                            <option value="oktober.php.php">Oktober</option>
                                            <option value="november.php.php">November</option>
                                            <option value="desember.php.php">Desember</option>

                                            </select>
                                            
                                           
                                            <br>
                                            <br>
                                         
                                      
                                        </div>
                    </div>       
                    </div>       
                    
                

                                     
                   
                      





































                <!-- <form action="" method="POST">
                               
                                   
                                   
                                    <div class="form-group">
                                        <label>Month :</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status" required>
                                            <option disabled selected value>Choose...</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                            
                                        </select>
                                    </div>
                                 
                                    
                                    <div class="form-actions">
                                    <a href="listreporting.php"  class="btn btn-success">Search</a>
                                        
                                        
                                    </div>
                                </form>
                                </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="card">
                            <div class="card-body">
                               
                                <h4 class="card-title">Reporting 2024</h4>
                                <hr>
                <form action="listreporting.php" method="POST">
                               
                                   
                                   
                                    <div class="form-group" Id="Juli">
                                        <label>Month :</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status" required>
                                            <option disabled selected value>Choose...</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="listreporting.php">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                            
                                        </select>
                                    </div>
                                    
                                    
                                    <div class="form-actions">
                                    <a href="Juli" class="btn btn-success">Search</a>
                                        
                                        
                                    </div>
                                </form> -->
                                </div>
                        </div>
                    </div>
                        </div>
                    </div>
                    
                  
                    <!-- *************************************************************** -->
                    <!-- End Sales Charts Section -->
                    <!-- *************************************************************** -->
                    <!-- *************************************************************** -->
                    <!-- Start Location and Earnings Charts Section -->
                    <!-- *************************************************************** -->

                    <!-- *************************************************************** -->
                    <!-- End Location and Earnings Charts Section -->
                    <!-- *************************************************************** -->
                    <!-- *************************************************************** -->
                    <!-- Start Top Leader Table -->

                    <!-- *************************************************************** -->
                    <!-- End Top Leader Table -->
                    <!-- *************************************************************** -->
                </div>
             
</div>













</div>  
</div>

</body>



                  



















                <!-- *************************************************************** -->
                <!-- End Sales Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Location and Earnings Charts Section -->
                <!-- *************************************************************** -->

                <!-- *************************************************************** -->
                <!-- End Location and Earnings Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->

                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Bank Rakyat Indonesia. Designed and Developed by <a href="#">Custodian</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

  
 <!-- Data Table -->
 <?php include "../partials/script.php" ?>
</body>


</html>