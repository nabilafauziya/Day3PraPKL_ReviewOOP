<?php
include '../database.php';
$guru1 = new Guru();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $no = @$_POST['no'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    if ($aksi == "create") {
        $guru1->create($nip, $nama, $alamat);
        header("location:index.php");
    } else if ($aksi == "update") {
        $guru1->update($no, $nip, $nama, $alamat);
        header("location:index.php");
    } else if ($aksi == "delete") {
        $guru1->delete($no);
        header("location:index.php");
    }
}
