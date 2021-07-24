<?php
    include "config/conn.php";

    $company_name = $_POST['perusahaan'];
    $address = $_POST['alamat'];
    $phone = $_POST['telephone'];
    
    $queryPublisher = "INSERT INTO publisher VALUES ('', '$company_name', '$address', '$phone')";
    
    $query = mysqli_query($conn, $queryPublisher);
    if ($query) {
        echo "<script>alert('Berhasil disimpan');window.location.href='index-publisher.php'</script>";
    } else {
        echo "<script>alert('Gagal disimpan');window.location.href='add-publisher.php'</script>";
    }

?>