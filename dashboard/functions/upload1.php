<?php

include '../../function.php';
session_start(); 
$nama_dokumen = $_POST['nama_dokumen']; 
$nasabah = $_POST['nasabah']; 
$jenis_perjanjian = $_POST['jenis_perjanjian']; 
$nomor_perjanjian = $_POST['nomor_perjanjian']; 
$nomor_perjanjian_terkait = $_POST['nomor_perjanjian_terkait']; 
$tanggal_perjanjian = $_POST['tanggal_perjanjian']; 
$tanggal_berakhir = $_POST['tanggal_berakhir']; 
$year = $_POST['year']; 
$approver = $_POST['approver']; 
$datenow = gmdate("Y-m-d", time());
$batas_review = date("Y-m-d", strtotime($tanggal_berakhir . '-1 month'));

if ($datenow >= $batas_review && $datenow < $tanggal_berakhir) {
    $status = 'Masa Review';
} else if ($datenow >= $tanggal_berakhir || $datenow < $tanggal_perjanjian) {
    $status = 'Tidak Berlaku';
} else {
    $status = 'Berlaku';
}

// dokumen upload

$random_number = round(microtime(true));


// membuat id dokumen

$select_id = mysqli_query($conn, "SELECT COUNT(*) AS idTerbesar FROM docss");

if ($select_id == FALSE) {
    $id_doc = 1;
} else {
    $cek = mysqli_fetch_array($select_id);
    $id_doc = $cek['idTerbesar'];
    $id_doc++;
    $id_doc = 'DOC/CUS-' . $id_doc; 
}



    $sql = mysqli_query($conn, "INSERT INTO `docss` (id_dokumen, nama_dokumen, dokumen, nasabah, jenis_perjanjian, nomor_perjanjian, nomor_perjanjian_terkait, tanggal_perjanjian, tanggal_berakhir, batas_review, year, approver) 
    VALUES ('$id_doc',
            '$nama_dokumen',
            '$new_file_name',
            '$nasabah',
            '$jenis_perjanjian',
            '$nomor_perjanjian', 
            '$nomor_perjanjian_terkait',
            '$tanggal_perjanjian',
            '$tanggal_berakhir',
            '$batas_review', 
            '$year',
            '$approver')
            ");

    $user = $_SESSION['name'];
    $comment = "$user telah mengunggah Reporting ini";

    $sql .= mysqli_query($conn, "INSERT INTO activitiess (id_dokumen, `log`, activity_code)
    VALUES ('$id_doc',
            '$comment',
            2)
            ");

    echo "<script>alert('Berhasil menambah dokumen');
    location.href='../1pendingreporting.php';</script>";

