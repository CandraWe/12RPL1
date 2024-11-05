<?php
include "GB_koneksi.php";
$query = mysqli_query($koneksi, "select * from product");

//Ambil data
//pakai perulangan
// while ($data = mysqli_fetch_array($query)){
//     echo $data ["nama"] . "<br/> ";
//     echo $data ["id_kategori"] . "<br/> ";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="proses.php" method="post">
        <!-- acion untuk melakukan pekerjaan ketika sudah di klik -->
        <!-- method itu cara pengiriman data dibagi menjadi dua ada get dan post -->
         <!-- get 
          $_GET:
          Data dikirim melalui URL, terlihat jelas di address bar.
          Form yang menggunakan metode GET biasanya digunakan untuk pencarian atau saat kamu ingin data terlihat di URL.
          -->
        <!-- post
        $_POST: Data dikirim secara tersembunyi di balik layar, biasanya digunakan untuk data yang lebih sensitif seperti password.
        Untuk data yang lebih pribadi atau besar, metode POST lebih umum digunakan. Data ini dikirim secara lebih aman dibandingkan GET karena tidak tampil di URL. 
        -->

        <p>Nama : <input type="text" name="nama" id=""></p>
        <!-- name adalah nama di url nya
        jika dipanggil sesuai dengan isi name misal $_GET['nama_user'] -->
        <button type="submit">simpan</button> <!--  pakai type submit agar tersave semua -->
    </form>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Id Kategori</td>
            <td>Keterangan</td>
        </tr>
        <?php while ($data = mysqli_fetch_array($query)){ ?>
            <tr>
                <td> <?php echo $data ["nama"] ?></td>
                <td> <?php echo $data ["id_kategori"] ?></td>
                <td><a href="GB_hapus.php?id=<?php echo $data["id"]?>">Hapus</a></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>