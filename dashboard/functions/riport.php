<?php
include '../../function.php';
session_start();


if (isset($_POST['simpan'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $diskripsi=mysqli_real_escape_string($conn, $_POST['diskripsi']);
    $to1 = mysqli_real_escape_string($conn, $_POST['to1']);
    $media= mysqli_real_escape_string($conn, $_POST['media']);
    $due=mysqli_real_escape_string($conn, $_POST['due']);
    $tgl = mysqli_real_escape_string($conn, $_POST['tgl']);
    $status=mysqli_real_escape_string($conn, $_POST['status']);
    $moon=mysqli_real_escape_string($conn, $_POST['moon']);
    $tgl=mysqli_real_escape_string($conn, $_POST['tgl']);
    $year=mysqli_real_escape_string($conn, $_POST['year']);
    $file=mysqli_real_escape_string($conn, $_POST['file']);

    $simpan=mysqli_query($conn, "INSERT INTO reporting VALUES('$id','$diskripsi','$to1','$media','$due','$tgl','$status','$moon','$year','$file')");
    
    if ($simpan) {
        echo "<script>window.alert('Reporting Berhasil Disimpan')
        window.location='../listreporting.php'</script>";
    }else{
        echo "<script>window.alert('Reporting Gagal Disimpan')
        window.location='../listreporting.php'</script>";
       
    }
}
?>