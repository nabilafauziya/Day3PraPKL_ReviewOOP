<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <!-- <style>
        body{
            height: 600px;
            background-color:#7FB5FF;
            
            font-family: sans-serif;
            }
    </style> -->

    <title>Crud</title>

  </head>
  <body>

        
        <br><br><br>

        <!-- CARDs -->
        <div class="container">
        <div class="card ">

            <div class="card-header table-success">
                <h3>Data Siswa</h3>
                <center><a href="create.php" class="btn btn-dark" style="float: right;">Tambah Data</a></center>
            </div>

            <div class="card-body table-light">
                <!-- TABLE DOSEN -->
                <table class="table table-primary table-striped">

                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">Action</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                            include '../database.php';
                            $guru = new Guru();
                            $no = 1;
                            foreach ($guru->index() as $data) {
                        ?>

                        <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $data['nip'] ?></td>
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                           
                            <td><a href="show.php?no=<?php echo $data['no']; ?>" class="btn btn-warning">Show</a> </td>
                            <td> <a href="edit.php?no=<?php echo $data['no']; ?>" class="btn btn-success">Edit</a></td>
                            <td> <form action="proses.php" method="post">
                                    <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
                                    <input type="hidden" name="aksi" value="delete">
                                    <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                        Delete
                                    </button>
                                </form>
                            </td>

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
  </body>
</html>