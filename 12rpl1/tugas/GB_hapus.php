<?php
$id = $_GET['id'];
include "GB_koneksi.php";

mysqli_query($koneksi,"DELETE FROM `product` WHERE id=$id");
header("Location: home.php");