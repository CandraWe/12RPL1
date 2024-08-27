<h1>Komentar</h1>
<?php
if (isset($_POST['nama_user']) && isset($_POST['email_user']) && isset($_POST['komen'])) {
    $name = $_POST['nama_user'];
    $email = $_POST['email_user'];
    $password = $_POST['rahasia'];
    $pesan = $_POST['komen'];

    echo "Nama: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Pesan: " . $pesan . "<br>";
}