<?php  
// menghapus melalui framework

$id = $_GET ['id'];
    $koneksi = mysqli_connect('localhost', 'root', '', 'skincare_lakik');
    $query = mysqli_query($koneksi, "delete from product where id=$id");
    
    // agar balik lagi ke awal atau index maka
    header("location:A_index.php");
?>