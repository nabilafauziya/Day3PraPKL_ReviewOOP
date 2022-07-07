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
        <div class="container">
        <div class="card">

            <div class="card-header">
                Tambah Siswa
            </div>

            <div class="card-body table-primary table-striped">

            <form action="../guru/proses.php" method="post">
                <input type="hidden" name="aksi" value="create">

                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label>
                        <input type="text" class="form-control" name="nip" >
                        <small no="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama">
                        <small no="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                        <small no="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>

                </form>
            </div>
        </div>
        </div>
        <br><br><br>
  </body>
</html>
