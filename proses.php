<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama=$_POST['nama'];
    $nomor=$_POST['nomor'];
    $buku=$_POST['buku'];
    $tgl=$_POST['tgl'];

    $data = "Nama: $nama, Nomor Telepon: $nomor, Buku yang Dipinjam: $buku, Tanggal Peminjaman: $tgl\n";

    file_put_contents('tampilan.txt', $data, FILE_APPEND);

    header('Location: tampilan.php');
    exit();
    }
?>

