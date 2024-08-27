<?php

// catatan 

//
// if (!$koneksi){
//     die(mysqli_connect_error($koneksi));
// }


// kalau pakai kode 
// pet
// framework
// 



// nampilin css
//  $this > load > view ( "welcome_massage")
// "welcome_massage" folder kode css ny

// pakai codeIgnaiter yang 3

// b
// echo $_GET ['id'];
// parameter request dengan memanfaatkan parameter
// $id = $_GET['id'];
// echo $_GET['id'];

//kita bisa ambil nilai dari parameter dengan menambahkan ?id=50 setelah link belakang .php atau pun yang lainnya
// awali dengan ? untuk membuat parameter kemudian namna parameter nya (id/nama) kemudian nilai parameternya
// http://localhost:8080/candraRPL1/12rpl1/koneksi.php?id=50


// buat koneksi
$koneksi = mysqli_connect('localhost', 'root', '', 'skincare_lakik'); //yang terakhir sesuaikan dengan nama database
// "" ini kosong karena ini tempat untuk password

// perintah SQL
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
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Id Kategori</td>
            <td>Keterangan</td>
        </tr>
        <?php while ($data = mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $data ["nama"] ?></td>
                <td> <?php echo $data ["id_kategori"] ?></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>