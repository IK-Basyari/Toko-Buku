<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">TOKO BUKU HARAPAN</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda
          <span class="badge bg-secondary">10</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index-writer.php">Penulis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index-publisher.php">Public</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
<center>
<figure>
  <blockquote class="blockquote">
    <p><h1 class="display-6">Daftar Buku Toko Harapan</h1></p>
  </blockquote>
  <figcaption class="blockquote-footer">
     <cite title="Source Title"><h6>Mencetak Generasi Muda Dengan Membaca</h6></cite>
  </figcaption>
</figure>
</center>
<div class="container">
    <p align = "right">
                <a href="add-publisher.php"><button class="btn btn-sm btn-info">Tambah Produk</button></a>
    </p>
    <div class="row">
    <table class="table table-light table-hover" >
      <tr>
        <th>NO</th>
        <th>Nama Perusahaan</th>
        <th>Alamat</th>
        <th>No Tlpn</th>
        <th>Lanjutan</th>
      </tr>
<?php $i = 1; ?>
<?php
            include "config/conn.php";  // Untuk memanggil koneksi mysql
               
            $no = 1;  // memulai data no baru
            $query = "SELECT * FROM publisher"; // Query untuk menampilkan data produk
            $data = mysqli_query($conn, $query); // mysqli_query -> untuk menjalankan query
            while($d = mysqli_fetch_array($data)){
            ?>

      <tr>
        <td><?= $i; ?></td>
        <td> <?= $d["company_name"]; ?> </td>
        <td><?= $d["address"]; ?></td>
        <td><?= $d["phone"]; ?></td>
        <td>
          <a href="edit-publisher.php?id=<?= $d["id"]; ?>"><button class="btn btn-sm btn-primary">Update</button></a>
          <a href="hapus-publisher.php?id=<?= $d["id"]; ?>"><button class="btn btn-sm btn-danger">Hapus</button></a>
        </td>
      </tr>
  <?php $i++; ?>
<?php } ?>
    </table>
</div>
</body>
</html>