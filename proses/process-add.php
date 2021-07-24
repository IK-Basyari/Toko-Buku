
    <?php
    include "config/conn.php";

    $title = $_POST['judul'];
    $isbn = $_POST['isbn'];
    $synopsis = $_POST['editor1'];
    $cover = $_FILES['cover'];

    $namaFile = $cover['name'];
    $namaSementara = $cover['tmp_name'];

    // tentukan lokasi file akan dipindahkan
    $dirUpload = "img/";

    // pindahkan file
    move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    $queryBook = "INSERT INTO books VALUES ('', '$title', '$isbn', '$synopsis', '$namaFile')";
    // var_dump($queryBook);die;
    $query = mysqli_query($conn, $queryBook);
    if ($query) {
        echo "<script>alert('Berhasil disimpan');window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Gagal disimpan');window.location.href='add-book.php'</script>";
    }

?>