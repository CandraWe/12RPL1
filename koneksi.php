<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'skincare_lakik'); //yang terakhir sesuaikan dengan nama database
// "" ini kosong karena ini tempat untuk password
if (!$koneksi){
    die(mysqli_connect_error($koneksi));
}