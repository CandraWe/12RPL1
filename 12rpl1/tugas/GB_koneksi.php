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
// Dengan menggunakan fungsi mysqli_connect(), Anda dapat dengan mudah membuat koneksi ke database dan memastikan bahwa aplikasi Anda dapat berkomunikasi dengan database tersebut.
$koneksi = mysqli_connect('localhost', 'root', '', 'skincare_lakik'); //yang terakhir sesuaikan dengan nama database
// "" ini kosong karena ini tempat untuk password

// mysqli_connect Fungsi ini memungkinkan kita untuk melakukan berbagai operasi seperti SELECT, INSERT, UPDATE, DELETE, dan lain-lain.
// mysqli_query adalah fungsi dalam PHP yang digunakan untuk menjalankan perintah SQL di sebuah database MySQL melalui koneksi yang sudah dibuat dengan 

// perintah SQL

?>