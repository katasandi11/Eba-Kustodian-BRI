<?php

include '../../function.php';
session_start();
if ($_SESSION['role'] != 'admin') {
    echo "<script>alert('successfully update the Reporting');location.href='../index.php'</script>";
}

if (isset($_POST["update"])) {
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $status = $_POST['status'];
    $file = $_POST['file'];
   
   
    $sql = mysqli_query($conn, "UPDATE reporting SET 
   tgl = '$tgl',
    status = '$status',
    file = '$file'
     WHERE id = $id");

    echo "<script>alert('successfully update the Reporting');
        location.href='../cari.php'</script>";

}


