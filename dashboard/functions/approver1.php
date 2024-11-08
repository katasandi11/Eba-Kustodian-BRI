<?php

include '../../function.php';
session_start();
if ($_SESSION['role'] != 'Approver') {
    echo "<script>alert('Forbidden!');location.href='../'</script>";
    exit;
}

if (isset($_GET["approve"])) {

    $value = $_GET["approve"];
    $user = $_SESSION['name'];
    $comment = "$user telah mengapprove Dokumen ini";

    mysqli_query($conn, "UPDATE reporting_docss SET is_approved = 1, updated_at = CURRENT_TIMESTAMP WHERE `id_dokumen` =  '$value'");
    mysqli_query($conn, "INSERT INTO activities_reporting (id_dokumen, `log`, activity_code)
    VALUES ('$value',
            '$comment',
            1)
            ");
    echo "<script>alert('Reporting telah diapprove');location.href='../1reportingdone.php'</script>";
}

if (isset($_GET["reject"])) {

    $value = $_GET["reject"];
    $user = $_SESSION['name'];
    $comment = "$user telah mereject Dokumen ini";

    mysqli_query($conn, "UPDATE reporting_docss SET is_approved = 2, updated_at = CURRENT_TIMESTAMP WHERE `id_dokumen` =  '$value'");
    mysqli_query($conn, "INSERT INTO activities_reporting (id_dokumen, `log`, activity_code)
    VALUES ('$value',
            '$comment',
            0)
            ");
    echo "<script>alert('Reporting telah direject');location.href='../1disable.php'</script>";
}

if (isset($_GET["cancel"])) {

    $value = $_GET["cancel"];
    $user = $_SESSION['name'];
    $comment = "$user telah mencancel Dokumen ini";

    mysqli_query($conn, "UPDATE reporting_docss SET is_approved = 0, updated_at = CURRENT_TIMESTAMP WHERE `id_dokumen` =  '$value'");
    mysqli_query($conn, "INSERT INTO activities_reporting (id_dokumen, `log`, activity_code)
    VALUES ('$value',
            '$comment',
            4)
            ");
    echo "<script>alert('Reporting telah dicancel');location.href='../1pendingreporting.php'</script>";
}
