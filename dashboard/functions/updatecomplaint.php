<?php

include '../../function.php';
session_start();
if ($_SESSION['role'] != 'admin') {
    echo "<script>alert('successfully update the complaint');location.href='../listcomplaint1.php'</script>";
}

if (isset($_POST["update"])) {
    $id = $_POST['id'];
    $dateakhir = $_POST['dateakhir'];
    $solution = $_POST['solution'];
    $status = $_POST['status'];
   

    $sql = mysqli_query($conn, "UPDATE complaint SET 
    dateakhir = '$dateakhir',
    solution = '$solution',
    status = '$status'
     WHERE id = $id");
    echo "<script>alert('successfully update the complaint');
        location.href='../pendingcomplaint1.php'</script>";
}



