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
    <title>Documents</title>
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
            color: navy;
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="btn-group float-left">
                                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Pending Issue</h3>
                                </div>

                                <!-- <h4 class="card-title float-left">Custodian Documents</h4> -->
                                <!-- Modal Filter -->

                                <div class="btn-group float-right">
                                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#top-modal"><i class="fa fa-filter"></i> Filters</button>
                                    <!-- <a href="?" class="btn btn-outline-secondary"><i class="fas fa-undo"></i> Reset</a> -->
                                
                                        <a href="issue.php" class="ml-2 btn btn-primary">+ Add </a>
                                   
                                </div>

                                <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-top">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="topModalLabel"><strong>Filters Berdasarkan Start Date</strong></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="GET" action="">
                                                   
                                                    <br>
                                                    <table>
                                                        <tr>
                                                            <td width="70px" valign="top">Tanggal</td>
                                                            <td>
                                                                <input type="date" class="w-100" name="tglawal">
                                                                <small id="name1" class="badge badge-default badge-secondary form-text text-white float-left">Start Date</small>
                                                                <!-- <label><input type="date" name="lastdate"> Akhir</label><br> -->
                                                            </td>
                                                            <td>
                                                                <!-- <label><input type="date" name="firstdate"> Awal</label><br> -->
                                                                <input type="date" class="w-100" name="tglakhir">
                                                                <small id="name1" class="badge badge-default badge-secondary form-text text-white float-left">End Date</small>
                                                            </td>
                                                        </tr>
                                                    </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-light">Reset</button>
                                                <button type="submit" name="filter" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>

                                <hr class="mt-5">
                                <div class="table-responsive">
                                    <table width="1600" style="color:#333;font-size: 14px;" id="myTable" class="table table-striped table-bordered">
                                        <thead>
                                     <tr>
                                     <th>No</th>
                                     <th>Ticket Number</th>
                                     <th>Customer Name</th>
                                     
                                     <th>Company/Institution</th>
                                     <th>Start Date</th>
                                     <th>End Date</th>
                                     <th>Issue Title</th>
                                     <th>Description</th>
                                         <th>Solution</th>
                                        
                                         <th>Status</th>
                                        
                                        
                                        
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php

                                if(isset($_GET['filter'])){
                                    
                                    $tglawal = $_GET['tglawal'];
                                    $tglakhir = $_GET['tglakhir'];

                                    if($tglawal!=null || $tglakhir!=null){

                                    $sql = mysqli_query($conn, "SELECT * FROM complaint_isue WHERE `dateawal`  BETWEEN  '$tglawal' and '$tglakhir' and`status` <> 1");
                                    
                                }else{
                                 $sql = mysqli_query($conn, "SELECT * FROM complaint_isue WHERE `dateawal` and`status` <> 1 ");
                                }
                                }else{
                                 $sql = mysqli_query($conn, "SELECT * FROM complaint_isue WHERE `dateawal` and`status` <> 1 ");
                                }
                                $no=1;
                                     while ($data = mysqli_fetch_array($sql)) {
                                     ?>

                                         <tr>
                                         <td><?php echo "$no";$no++; ?></td>
                                         <td><?= $data["id"]; ?></td>
                                         <td style="width:200px;"><a href="editissue.php?id=<?= $data[0] ?>"><?= $data[2]; ?></a></td>
                                         
                                         
                                         <td><?= $data["company"]; ?></td>
                                             <td><?= $data["dateawal"]; ?></td>
                                             <td><?= $data["dateakhir"]; ?></td>
                                             
                                             <td><?= $data["complaint"]; ?></td>
                                             <td><?= $data["penjelasan"]; ?></td>
                                             <td><?= $data["solution"]; ?></td>
                                             
                                            
                         
                                             <td>
                                                 <?php
                                                 if ($data["status"] == 0) {
                                                     echo "<i class='fas fa-circle text-success font-10 mr-2'></i>Open";
                                                 } elseif ($data["status"] == 1) {
                                                     echo "<i class='fas fa-circle text-danger font-10 mr-2'></i>close";
                                                 } else {
                                                     echo "<i class='fas fa-circle text-warning font-10 mr-2'></i>Close";
                                                 }
                                                 ?>
                                             </td>
                                            
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
                        title: ' '
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf"></i> Report PDF ',
                        className: 'red',
                        title: ' '
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