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
    <div class="judul">
        <center><h1>Identitas Penulis</h1></center>
    </div>

    <?php
	include 'config/conn.php';
    $no = 1;
	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * from writers where id='$id'");
    while($d = mysqli_fetch_array($data)){ 
	?>

    <div class="container">
        <p align = "right">
            <a href="index-writer.php" class="btn btn-info">Kembali</a>
        </p>
        <form action="update-writer.php" method="POST" enctype="multipart/form-data">	
            <input type="hidden" name="id" value="<?= $d["id"]; ?>">
            <input type="hidden" name="foto" value="<?= $d['photo'] ?>">

            <div class="row">	
                <div class="mb-3">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name ="name" class = "form-control"
                    value="<?= $d["name"]; ?>">
                </div>	
                <div class="mb-3">
                    <label for="">Nomor Telephone</label>
                    <input type="text" name ="phone_number" class = "form-control"
                    value="<?= $d["phone_number"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text" name ="address" class = "form-control"
                    value="<?= $d["address"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name ="email" class = "form-control"
                    value="<?= $d["email"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="">Foto</label><br>
                    <img src="img/<?= $d["photo"]; ?>" style = "width:300px"><br> <br>
                    <input type="file" name ="photo" class = "form-control-file">
                </div>
                <div class="mb-3">
                    <input type = "submit" class = "btn btn-success" value = "Perbarui">
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
</body>
</html>