<?php
include 'koneksi.php';
$produk = $_POST['nama'];
// jika dipanggil sesuai dengan isi name misal $_GET['nama_user']

$sql = "insert into product values('$produk')";
$query = mysqli_query($koneksi, $sql);

if (!$query){
    die(mysqli_error($koneksi));
}
header("Location: index.php");