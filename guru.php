<?php

class Guru extends Database
{

    // menampilkan ke index.php

    public function index()
    {

        $datasiswa = mysqli_query($this->koneksi, "select * from guru");

        return $datasiswa;
    }

    public function create($nip,$nama,$alamat)
    {

        mysqli_query($this->koneksi,
            "insert into guru values (null,'$nip','$nama','$alamat')"
        );
    }

    // memilih yang akan diubah
    public function edit($no)
    {
        $datasiswa = mysqli_query($this->koneksi,
            "select * from guru where no='$no'"
        );

        return $datasiswa;
    }

    // merubah 
    public function update($no, $nip, $nama, $alamat)
    {

        mysqli_query(
            $this->koneksi,
            "update guru set nip='$nip', nama='$nama' , alamat='$alamat' where no='$no'"
        );
    }

    // menampilkan berdasarkan no
    public function show($no)
    {
        $datasiswa = mysqli_query($this->koneksi,
            "select * from guru where no='$no'"
        );
        return $datasiswa;
    }

    // menghapus 
    public function delete($no)
    {

        mysqli_query($this->koneksi, "delete from guru where no='$no'");
    }
}
