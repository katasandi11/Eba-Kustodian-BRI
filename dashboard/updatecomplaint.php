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
    <title>User Management</title>
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
        <?php $active = 'k' ?>
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
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $id = $_GET["id"];
                                $data = mysqli_query($conn, "SELECT * FROM complaint WHERE id = '$id'");
                                $row = mysqli_fetch_row($data);
                                ?>
                                <h4 class="card-title">Edit Complaint</h4>
                                <hr>
                                <form action="functions/updatecomplaint.php" method="POST">
                                    
                                    <div class="form-group">
                                        <label>Ticket Number</label>
                                        <input type="text" class="form-control" placeholder="" name="id" value="<?= $row[0]; ?>" readonly >
                                    </div>
                                    <div class="form-group">
                                        <label>Customer Name</label>
                                        
                                        <input type="text" class="form-control" placeholder="" name="nama" value="<?= $row[2]; ?>" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        
                                        <input type="text" class="form-control" placeholder="" name="contact" value="<?= $row[3]; ?>" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>Company/Institution</label>
                                        
                                        <input type="text" class="form-control" placeholder="" name="company" value="<?= $row[4]; ?>" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        
                                        <input type="text" class="form-control" placeholder="" name="dateawal" value="<?= $row[5]; ?>" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>End Date <span class="text-danger">*</span></label>
                                        
                                        <input type="date" class="form-control" placeholder="" name="dateakhir" value="<?= $row[6]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Complaint Title</label>
                                        
                                        <input type="text" class="form-control" placeholder="" name="complaint" value="<?= $row[7]; ?>" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        
                                        <textarea type="text" class="form-control" placeholder="" name="penjelasan" value="" readonly required><?= $row[8]; ?></textarea>
                                    </div>
                                    <div class="form-text" >
                                        <label>Solution <span class="text-danger">*</span></label>
                                        
                                        <textarea type="textarea" class="form-control" placeholder="" name="solution" value="" required><?= $row[9]; ?></textarea>
                                        
                                            </div><br>
                                    <div class="form-group">
                                        <label>Status Complaint <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status" required>
                                            <option disabled selected value>Choose...</option>
                                            <option value="0">Open</option>
                                            <option value="1">Close</option>
                                          
                                        </select>
                                    </div>
                                    
                                    <div class="form-actions">
                                        <button type="submit" name="update" class="btn btn-info">Submit</button>
                                        
                                    </div>
                                </form>
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