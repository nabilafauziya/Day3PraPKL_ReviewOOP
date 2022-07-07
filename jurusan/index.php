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

    <title>Crud</title>

  </head>
  <body>
  
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href=""><img src="school.png" alt="" width="35" height="28"></a>

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

            <div class="card-header table-success" >
                <h3>Data Jurusan</h3>
                <a href="create.php" class="btn btn-dark" style="float: right;">Tambah Data</a>
            </div>

            <div class="card-body table-light" >
                <!-- TABLE DOSEN -->
                <table class="table table-primary table-striped" >

                    <thead>
                        <tr>
                            <th scope="col" >No</th>
                            <th scope="col">Kode Jurusan</th>
                            <th scope="col">Jurusan</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            include '../database.php';
                            $jurusan = new Jurusan();
                            $no = 1;
                            foreach ($jurusan->index() as $data) {
                        ?>
                        <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $data['kode_jurusan'] ?></td>
                            <td><?php echo $data['jurusan'] ?></td>
                            <td></td>
                            <td><a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Show</a></td>
                            <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a></td>
                            <td>    <form action="proses.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input type="hidden" name="aksi" value="delete">
                                <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                    Delete
                                </button>
                            </form></td>
                        </tr>
                      <?php
                        }
                        ?>
                    </tbody>
                </table>
                 <!-- /TABLE DOSEN -->
            </div>
        </div>
        </div>
        <br><br><br>
  </body>
</html>