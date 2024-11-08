<?php
include '../../function.php';
session_start();


if (isset($_POST['simpan'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $tiket=mysqli_real_escape_string($conn, $_POST['tiket']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $contact= mysqli_real_escape_string($conn, $_POST['contact']);
    $company=mysqli_real_escape_string($conn, $_POST['company']);
    $dateawal = mysqli_real_escape_string($conn, $_POST['dateawal']);
    $dateakhir=mysqli_real_escape_string($conn, $_POST['dateakhir']);
    $complaint=mysqli_real_escape_string($conn, $_POST['complaint']);
    $penjelasan=mysqli_real_escape_string($conn, $_POST['penjelasan']);
    $solution=mysqli_real_escape_string($conn, $_POST['solution']);
    $status=mysqli_real_escape_string($conn, $_POST['status']);
    $notif=mysqli_real_escape_string($conn, $_POST['notif']);





    $simpan=mysqli_query($conn, "INSERT INTO complaint VALUES('$id','$tiket','$nama','$contact','$company','$dateawal','$dateakhir','$complaint','$penjelasan','$solution','$status','$notif')");





    if ($simpan) {
        echo "<script>window.alert('Data Complaint Berhasil Disimpan')
        window.location='../pendingcomplaint1.php'</script>";
    }else{
        echo "<script>window.alert('Data Complaint Gagal Disimpan')
        window.location='../complaint.php'</script>";
       
    }
}
?>