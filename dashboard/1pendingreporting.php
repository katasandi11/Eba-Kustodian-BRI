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
    <!-- This page plugin datatables CSS -->
    <link href="../src/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../src/assets/extra-libs/datatables.net/css/buttons.dataTables.min.css" rel="stylesheet">
    <?php include "../partials/head.php"; ?>
    <title>Dokumen Pending</title>
<style>
        .dt-button.red {
            color: red;
            background: none;
            margin-bottom: 10px;
        }

        .dt-button.green {
            color: limegreen;
            background: none;
            margin-bottom: 10px;
        }

        .dt-button.blue {
            color: 	navy;
            background: none;
            margin-bottom: 10px;
        }
    </style>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Pending Reporting</h4>


                                <hr class="mt-5">
                                <div class="table-responsive">
                                    <table style="color:#333;font-size: 14px;" id="myTable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            
                                    
                                            
                                                <th class="text-center"  >No</th>
                                                <th class="text-center"  >Description</th>
                                                <th class="text-center"  >Month</th>
                                                <th class="text-center"  >Year</th>
                                        
                                                <?php if ($_SESSION['role'] == 'Approver') { ?>
                                                    <th class="text-center" width="15%">Aksi</th>
                                                <?php } else { ?>
                                                    <th class="text-center" width="15%">Approver</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        
                                        <?php

                                            if ($_SESSION['role'] == 'Maker') {
                                                $sql = mysqli_query($conn, "SELECT reporting_docss.id_dokumen, reporting_docss.nama_dokumen, reporting_docss.nasabah, reporting_docss.jenis_perjanjian, reporting_docss.year, users.name FROM reporting_docss INNER JOIN users ON reporting_docss.approver = users.id where reporting_docss.is_approved = 0");
                                            } else {
                                                $sql = mysqli_query($conn, "SELECT reporting_docss.id_dokumen, reporting_docss.nama_dokumen, reporting_docss.nasabah, reporting_docss.jenis_perjanjian, reporting_docss.year FROM reporting_docss where is_approved = 0 AND approver = '$_SESSION[id]'");
                                            }

                                            $no=1;
                                            $n = 1;
                                            while ($data = mysqli_fetch_array($sql)) {
                                                ?> 
                                            
                                            

                                                <tr>
                                                <td><?php echo "$no";$no++; ?></td>
                                                    <td><a href="1docdownload.php?id_dokumen=<?= $data[0] ?>"><?= $data[1]; ?></a></td>
                                                    <td><?= $data["jenis_perjanjian"]; ?></td>
                                                    <td><?= $data["year"]; ?></td>
                                                  
                                                  
                                                    <?php if ($_SESSION['role'] == 'Approver') { ?>
                                                        <td>
                                                            <a href="functions/approver1.php?approve=<?= $data[0] ?>" class="btn btn-sm btn-success" data-toggle="tooltip" title="Approve">
                                                                <i class="fas fa-check"></i>
                                                            </a>
                                                            <a href="functions/approver1.php?reject=<?= $data[0] ?>" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Reject">
                                                                <i class="fas fa-times"></i>
                                                            </a>
                                                            <a href="functions/approver1.php?cancel=<?= $data[0] ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Cancel">
                                                                <i class="fas fa-circle-notch"></i>
                                                            </a>
                                                            </td>
                                                    <?php } else { ?>
                                                        <td><?= $data[5]; ?></td>
                                                    <?php } ?>
                                                </tr>

                                            <?php } ?>

                                           
                                        </tbody>
                                      
                                    </table>
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
 
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i> Report Excel ',
                        className: 'green',
                        title: 'Summary'
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf"></i> Report PDF ',
                        className: 'red',
                        title: 'Summary'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print""></i> Report Print ',
                        className: 'blue',
                        title: ''
                    },
                ]
            });
        });
    </script>
     <script src="../src/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../src/assets/extra-libs/datatables.net/js/dataTables.buttons.min.js"></script>
    <script src="../src/assets/extra-libs/datatables.net/js/jszip.min.js"></script>
    <script src="../src/assets/extra-libs/datatables.net/js/pdfmake.min.js"></script>
    <script src="../src/assets/extra-libs/datatables.net/js/vfs_fonts.js"></script>
    <script src="../src/assets/extra-libs/datatables.net/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
</body>

</html>