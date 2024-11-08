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
    <title>Edit Document</title>
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
        <?php $active = 'y' ?>
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
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning <?= $_SESSION['name'];; ?>!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item">
                                        <a href="../logout.php">keluar</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <a href="upload.php" class="btn btn-primary">Upload Dokumen + </a>
                        </div>
                    </div> -->
                </div>
            </div>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Perbarui Dokumen Reporting</h4>
                                <hr>
                                <?php
                                $id = $_GET["id"];
                                $data = mysqli_query($conn, "SELECT * FROM reporting_docss WHERE id_dokumen = '$id'");
                                $row = mysqli_fetch_row($data);
                                ?>
                                <form action="functions/reportingupdate.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" name="id_dokumen" value="<?= $row[0]; ?>" required>
                                    <div class="form-group">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Description <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="nama_dokumen" value="<?= $row[1]; ?>" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Month <span class="text-danger">*</span></label>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="jenis_perjanjian" required>
                                                    <!-- <option disabled selected value>...</option> -->
                                                    <option value="Januari" <?= ($row[4] == 'Januari') ? 'selected' : ''  ?>>Januari</option>
                                                    <option value="Februari" <?= ($row[4] == 'Februari') ? 'selected' : ''  ?>>Februari</option>
                                                    <option value="Maret" <?= ($row[4] == 'Maret') ? 'selected' : ''  ?>>Maret</option>
                                                    <option value="April" <?= ($row[4] == 'April') ? 'selected' : ''  ?>>April</option>
                                                    <option value="Mei" <?= ($row[4] == 'Mei') ? 'selected' : ''  ?>>Mei</option>
                                                    <option value="Juni" <?= ($row[4] == 'Juni') ? 'selected' : ''  ?>>Juni</option>
                                                    <option value="Juli" <?= ($row[4] == 'Juli') ? 'selected' : ''  ?>>Juli</option>
                                                    <option value="Agustus" <?= ($row[4] == 'Agustus') ? 'selected' : ''  ?>>Agustus</option>
                                                    <option value="September" <?= ($row[4] == 'September') ? 'selected' : ''  ?>>September</option>
                                                    <option value="Oktober" <?= ($row[4] == 'Oktober') ? 'selected' : ''  ?>>Oktober</option>
                                                    <option value="November" <?= ($row[4] == 'November') ? 'selected' : ''  ?>>November</option>
                                                    <option value="Desember" <?= ($row[4] == 'Desember') ? 'selected' : ''  ?>>Desember</option>
                                                </select>

                                                <br>
                                                <br>                                               
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">year <span class="text-danger">*</span></label>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="year" required>                                                   
                                                    <option value="2023" <?= ($row[11] == '2023') ? 'selected' : ''  ?>>2023</option>
                                                    <option value="2024" <?= ($row[11] == '2024') ? 'selected' : ''  ?>>2024</option>
                                                    <option value="2025" <?= ($row[11] == '2025') ? 'selected' : ''  ?>>2025</option>
                                                    <option value="2026" <?= ($row[11] == '2026') ? 'selected' : ''  ?>>2026</option>
                                                    <option value="2027" <?= ($row[11] == '2027') ? 'selected' : ''  ?>>2027</option>
                                                    <option value="2028" <?= ($row[11] == '2028') ? 'selected' : ''  ?>>2028</option>
                                                    <option value="2029" <?= ($row[11] == '2029') ? 'selected' : ''  ?>>2029</option>
                                                    <option value="2030" <?= ($row[11] == '2030') ? 'selected' : ''  ?>>2030</option>
                                            
                                                </select>
                                            </div>
                                        </div>                                          
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Media Pelaporan <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="nasabah" value="<?= $row[3]; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">To <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="nomor_perjanjian" value="<?= $row[5]; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Due Date <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="nomor_perjanjian_terkait" value="<?= $row[6]; ?>">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <div class="form-group">
                                        <label>Status Reporting<span class="text-danger"> *</span></label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status1" required>
                                            <option disabled selected value>Choose...</option>
                                            <option value="1">Open</option>
                                            <option value="0">Close</option>
                                          
                                        </select>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Tanggal Riport <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" name="tanggal_perjanjian" value="<?= $row[7]; ?>" required>
                                            </div>
                                        </div>











                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Tanggal Berakhir <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" name="tanggal_berakhir" value="<?= $row[8]; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Upload Dokumen <span class="text-danger">*</span></label>
                                                <input class="form-control" name="dokumen" type="file" id="formFile" onchange="preview()">
                                                <small id="formFile" class="form-text text-muted">Hanya menerima tipe file PDF </small>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Pilih Approver <span class="text-danger">*</span></label>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="approver" required>
                                                    <option disabled selected value>Choose..</option>
                                                    <?php
                                                    $users = mysqli_query($conn, "SELECT * FROM users WHERE role = 'Approver' AND is_approved = 1");
                                                    while ($user = mysqli_fetch_array($users)) {
                                                    ?>

                                                        <option value="<?= $user['id']; ?>"><?= $user['name'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select> -->
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn waves-effect px-4 waves-light btn-primary">Submit</button>
                                    <!-- <button type="reset" class="btn waves-effect px-4 waves-light btn-outline-secondary">Reset</button> -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <embed src="docss/<?= $row[2]; ?>" height="400" id="preview">
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
    <?php include "../partials/script.php" ?>
</body>

</html>