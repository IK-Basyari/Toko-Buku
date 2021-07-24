<?php 
    include "config/conn.php";

    $id = $_POST['id'];
    $company_name = $_POST['company_name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $queryPublisher = mysqli_query($conn, "UPDATE publisher SET company_name='$company_name', address='$address', phone='$phone' WHERE id=$id");

    if ($queryPublisher) {
        echo "<script>alert('Berhasil diperbarui');window.location.href='index-publisher.php'</script>";
    } else {
        echo "<script>alert('Gagal diperbarui');window.location.href='edit-publisher.php'</script>";
    }

?>