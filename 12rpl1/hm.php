<?php
// menampilkan
    echo "<h1>hah?</h1>";

// variabel
    $nama = "saya";
    $umur = 11;

    // pakai " agar terbaca php

    echo "<h1>ini adalah $nama</h1> 
    $nama baru berumur $umur tahun";

// if else
    // dibaca dari atas kalau yg atas nya bener maka yg bawah nya gabakal dikerjain
    $nilai = 95;
    if ($nilai < 80) echo "C" ;
    elseif ($nilai > 85 AND $nilai < 90) echo "B"; // agar ngecek 2 kal pakai AND
    elseif ($nilai > 90) echo "A";

// function
// array
$nama_nama =["upin" , "ipin"];
echo $nama_nama[0]; // urutannya

$siswa = [ //array asosiatif
    "nama" => "sayaa",
    "kelas" => "11"
];
echo $siswa["nama"]; //nama key nya bukan urutannya

echo "<br>";

//
$siswa =[ //array multidimensi
    ["nama" => "kiki" , "kelas" => "1"],
    ["nama" => "koko" , "kelas" => "2"]
];
echo $siswa[0]["nama"];
echo $siswa[0]["kelas"], "<hr>";
echo $siswa[1]["nama"];
echo $siswa[1]["kelas"];


    // perulangan



//objek
    // objek ada key dan nilai
    // harus pakai class
// class