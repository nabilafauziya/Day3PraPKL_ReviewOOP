<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   
    <style>
        body{
            height: 600px;
            background-color:#7FB5FF;
            
            font-family: sans-serif;
            }
    </style>

    <title>Hello, world!</title>

  </head>
  <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="#"><img src="school.png" alt="" width="35" height="28"></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="jurusan/index.php">Jurusan <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Pendaftaran <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Pembayaran <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>

        </nav>
           <br><br><br>

        <!-- CARDs -->
        <div class="container" >
        <div class="card">

            <div class="card-header">
                <center>Data Jurusan</center>
            </div>

            <div class="card-body table-primary table-striped">
            <?php
                include '../database.php';
                $jurusan = new Jurusan();
                foreach ($jurusan->edit($_GET['id']) as $data) {
                    $id = $data['id'];
                    $kode_jurusan = $data['kode_jurusan'];
                    $jurusan = $data['jurusan'];
                }
            ?>

            <form action="" method="">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Jurusan</label> 
                        <input type="text" class="form-control" name="kode_jurusan" value="<?php echo $kode_jurusan; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="<?php echo $jurusan; ?>" disabled>
                    </div>
                    
                </form>
            </div>
        </div>
        </div>
  </body>
</html>