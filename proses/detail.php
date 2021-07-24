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
<body class="p-3 mb-2 bg-light">
    <nav class="navbar navbar-lg navbar navbar-dark bg-dark">
        <div class="container-fluid text-white">
            <nav class="navbar navbar-dark bg-dark"></nav> 
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
            </svg>
            <h1 class="navbar-brand" href="#" style="margin-left:15px">Toko Buku</h1>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a  href="index.php" class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active" href="#">Produk Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="index-writer.php" class="nav-link active" href="#">Penulis Buku</a>
                    </li>
                    <li class="nav-item">
                        <a href="index-publisher.php" class="nav-link active" href="#">Penerbit Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>  
    <br>
    <div class="judul">		
	    <center><h1>Detail Buku</h1></center>
	</div>
    <br>

    <?php
	include 'config/conn.php';
    // $no = 1;
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM books where id='$id'");
    while($d = mysqli_fetch_array($data)){
	?>

    <div class="container"> 
    <p align = "right">
        <a href="index.php" class="btn btn-info">Kembali</a>
    </p>       
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/<?= $d["cover"]; ?>" style="width:300px" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">   
                        <h3 class="card-title">
                            Judul : <?= $d["title"]; ?>
                        </h3>
                        <h4 class="card-text">
                            ISBN : <?= $d["isbn"]; ?>
                        </h4>
                        <h4 class="card-text">Sinopsis :</h4>
                        <p class="card-text">
                            <?= $d['synopsis'] ?>
                        </p>
                    </div>
                </div> 
            </div>
        </div><br>
    <?php } ?>
</body>
</html>