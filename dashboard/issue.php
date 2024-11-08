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
    <title>Development Issue</title>
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
        <?php $active = 'm' ?>
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
                <?php
                $id = $_SESSION["id"];
                $data = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
                $row = mysqli_fetch_row($data);
                ?>



<style>
form {
  display: flex;
  flex-direction: column;
  
}

.form-group {
  display: flex;
  align-items: center;
}

.form-group label {
  margin-right: 30px;
}

input[type=submit] {
  margin-top: 20px;
  background-color: #038C1D;
}
</style>








                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title d-inline">Input Development Issue</h4>
                               
                                <hr>
                                
<form action="functions/issue.php" method="POST">                                
                                                    
                    <label for="ticket-number">Ticket Number <span class="text-danger">*</span></label><br>
                    <input type="text" placeholder="Auto" id="ticket-number" name="id" readonly><br>

                    <input type="hidden" id="tiket" name="tiket" required></input>

                    <label for="name">Customer Name <span class="text-danger">*</span></label><br>
                    <input type="text" id="name" name="nama" required><br>
                    <label for="name">Contact Number <span class="text-danger">*</span></label><br>
                    <input type="text" id="contact" name="contact" required><br>
                    <label for="name">Company/Institution <span class="text-danger">*</span></label><br>
                    <input type="text" id="contact" name="company" required><br>
                    <label for="date">Date Of issue <span class="text-danger">*</span></label><br>
                    <input type="date" id="date" name="dateawal" required><br>
                    
                    <input type="hidden" id="date" name="dateakhir" required><br>
                    <label for="title">Issue Title <span class="text-danger">*</span></label><br>
                    <input type="text" id="title" name="complaint" required><br>
                    <label for="description">Description <span class="text-danger">*</span></label><br>
                    <textarea id="description" name="penjelasan" required></textarea><br>

                    <input type="hidden" id="status" name="status" required></input>                                                     
                    <input type="hidden" id="solution" name="solution" required></input><br><br>                                                           
                    <input type="submit" name="simpan" value="Submit" class="btn btn-success">
</form> 


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