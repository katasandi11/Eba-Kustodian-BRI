<?php

include '../../function.php';
session_start();

$id_dokumen = $_POST['id_dokumen']; 
$nama_dokumen = $_POST['nama_dokumen']; 
$nasabah = $_POST['nasabah']; 
$jenis_perjanjian = $_POST['jenis_perjanjian']; 
$nomor_perjanjian = $_POST['nomor_perjanjian']; 
$nomor_perjanjian_terkait = $_POST['nomor_perjanjian_terkait']; 
$tanggal_perjanjian = $_POST['tanggal_perjanjian']; 
$tanggal_berakhir = $_POST['tanggal_berakhir']; 

$status1 = $_POST['status1'];
$year = $_POST['year']; 
$datenow = gmdate("Y-m-d", time());
$batas_review = date("Y-m-d", strtotime($tanggal_berakhir . '-1 month'));

if ($datenow >= $batas_review && $datenow < $tanggal_berakhir) {
    $status = 'Masa Review';
} else if ($datenow >= $tanggal_berakhir || $datenow < $tanggal_perjanjian) {
    $status = 'Tidak Berlaku';
} else {
    $status = 'Berlaku';
}

// $approver = $_POST['approver'];
// dokumen upload
// approver = '$approver',
$random_number = round(microtime(true));
$file_name = $_FILES['dokumen']['name'];
$format = $_FILES['dokumen']['type'];
$file_tmp = $_FILES['dokumen']['tmp_name'];
// membaca size file
$fileSize = $_FILES['dokumen']['size'];
$new_file_name = $random_number . '_' . $file_name;

$select_id = mysqli_query($conn, "SELECT COUNT(*) AS idTerbesar FROM reporting_docss");

if ($_FILES['dokumen']['error'] === 4) {
    if ($fileSize <= 0) {

        $sql = mysqli_query($conn, "UPDATE `reporting_docss` SET 
        nama_dokumen = '$nama_dokumen',
        nasabah = '$nasabah',
        jenis_perjanjian = '$jenis_perjanjian',
        nomor_perjanjian = '$nomor_perjanjian', 
        nomor_perjanjian_terkait = '$nomor_perjanjian_terkait',
        tanggal_perjanjian = '$tanggal_perjanjian',
        tanggal_berakhir = '$tanggal_berakhir',
        batas_review ='$batas_review', 
       
        `status1` = '$status1',
        `year` = '$year',
        
        is_approved = 1 
        WHERE id_dokumen = '$id_dokumen' ");

        $user = $_SESSION['name'];
        $comment = "$user telah memperbarui Dokumen ini";

        $sql .= mysqli_query($conn, "INSERT INTO activities_reporting (id_dokumen, `log`,activity_code)
        VALUES ('$id_dokumen',
                '$comment',
                3)
                ");

        echo "<script>alert('Berhasil memperbarui reporting');
        location.href='../1reportingdone.php';</script>";
    } else {
        echo "<script>alert('Maaf format file hanya bisa PDF');
        location.href='../1reportingdone.php';</script>";
    }
} else {
    if ($format == "application/pdf") {
        @move_uploaded_file($file_tmp, "../docss/" . $new_file_name);

        $sql = mysqli_query($conn, "UPDATE `reporting_docss` SET 
        nama_dokumen = '$nama_dokumen',
        dokumen = '$new_file_name',
        nasabah = '$nasabah',
        jenis_perjanjian = '$jenis_perjanjian',
        nomor_perjanjian = '$nomor_perjanjian', 
        nomor_perjanjian_terkait = '$nomor_perjanjian_terkait',
        tanggal_perjanjian = '$tanggal_perjanjian',
        tanggal_berakhir = '$tanggal_berakhir',
        batas_review ='$batas_review', 
        approver = '$approver',
        `status` = '$status',
        `year` = '$year',
        is_approved = 0 
        WHERE id_dokumen = '$id_dokumen' ");

        $user = $_SESSION['name'];
        $comment = "$user telah memperbarui Dokumen ini";

        $sql .= mysqli_query($conn, "INSERT INTO activities_reporting (id_dokumen, `log`, activity_code)
        VALUES ('$id_dokumen',
                '$comment',
                3)
                ");

        echo "<script>alert('Berhasil memperbarui reporting');
        location.href='../1reportingdone.php';</script>";
    } else {
        echo "<script>alert('Maaf format file hanya bisa PDF');
        location.href='../1reportingdone.php';</script>";
    }
}
