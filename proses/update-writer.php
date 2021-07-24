<?php 
    include "config/conn.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $photo = $_FILES['photo'];
    $foto = $_POST['foto'];

    var_dump($foto);
    if ($_FILES['photo']['name'] == '') {
        $queryWriter = mysqli_query($conn, "UPDATE writers SET name='$name', phone_number='$phone_number', address='$address', email='$email', photo='$foto' WHERE id=$id");
    } else {
        $namaFile = $photo['name'];
        $namaSementara = $photo['tmp_name'];
        // tentukan lokasi file akan dipindahkan
        $dirUpload = "img/";
    
        // pindahkan file
        move_uploaded_file($namaSementara, $dirUpload.$namaFile);
        $queryWriter = mysqli_query($conn, "UPDATE writers SET name='$name', phone_number='$phone_number', address='$address', email='$email', photo='$namaFile' WHERE id=$id");
    }


    // header("location:index.php");
    // $query = mysqli_query($conn, ;
    if ($queryWriter) {
        echo "<script>alert('Berhasil diperbarui');window.location.href='index-writer.php'</script>";
    } else {
        echo "<script>alert( 'Gagal diperbarui');window.location.href='edit-writer.php'</script>";
    }

?>