<?php

include '../../function.php';
session_start();
if ($_SESSION['role'] != 'admin') {
    echo "<script>alert('successfully update the issue');location.href='../listissue.php'</script>";
}

if (isset($_POST["update"])) {
    $id = $_POST['id'];
    $dateakhir = $_POST['dateakhir'];
    $solution = $_POST['solution'];
    $status = $_POST['status'];
   

    $sql = mysqli_query($conn, "UPDATE complaint_isue SET 
    dateakhir = '$dateakhir',
    solution = '$solution',
    status = '$status'
     WHERE id = $id");
    echo "<script>alert('successfully update the Issue');
        location.href='../listissue.php'</script>";
}



