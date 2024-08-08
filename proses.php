<?php
include 'koneksi.php';
$produk = $_POST['nama'];

$sql = "insert into product values('$produk')";
$query = mysqli_query($koneksi, $sql);

if (!$query){
    die(mysqli_error($koneksi));
}
header("Location: index.php");