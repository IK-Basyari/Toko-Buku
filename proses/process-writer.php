<?php
    include "config/conn.php";

    $name = $_POST['nama'];
    $phone_number = $_POST['no_tlp'];
    $address = $_POST['alamat'];
    $email = $_POST['email'];
    $photo = $_FILES['photo'];

    $namaFile = $photo['name'];
    $namaSementara = $photo['tmp_name'];

    // tentukan lokasi file akan dipindahkan
    $dirUpload = "img/";

    // pindahkan file
    move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    $queryWriter = "INSERT INTO writers VALUES ('', '$name', '$phone_number', '$address', '$email', '$namaFile')";
    
    $query = mysqli_query($conn, $queryWriter);
    if ($query) {
        echo "<script>alert('Berhasil disimpan');window.location.href='index-writer.php'</script>";
    } else {
        echo "<script>alert('Gagal disimpan');window.location.href='add-writer.php'</script>";
    }

?>