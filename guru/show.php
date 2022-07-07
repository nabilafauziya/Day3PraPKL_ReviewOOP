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

    <title>Hello, world!</title>

  </head>
  <body>

    
           <br><br><br>

        <!-- CARDs -->
        <div class="container" >
        <div class="card">

            <div class="card-header">
                <center>Data</center>
            </div>

            <div class="card-body table-primary table-striped">
            <?php
                include '../database.php';
                $guru = new Guru();
                foreach ($guru->edit($_GET['no']) as $data) {
                    $no = $data['no'];
                    $nip = $data['nip'];
                    $nama = $data['nama'];
                    $alamat = $data['alamat'];
                }
            ?>

            <form action="" method="">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="no" value="<?php echo $no; ?>">

                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label> 
                        <input type="text" class="form-control" name="nip" value="<?php echo $nip; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" disabled>
                    </div>
                    
                </form>
            </div>
        </div>
        </div>
  </body>
</html>