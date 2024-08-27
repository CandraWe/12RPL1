<?php


// $_POST: Data dikirim secara tersembunyi di balik layar, biasanya digunakan untuk data yang lebih sensitif seperti password.
// Untuk data yang lebih pribadi atau besar, metode POST lebih umum digunakan. Data ini dikirim secara lebih aman dibandingkan GET karena tidak tampil di URL.
// File: submit.php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "Nama: " . $name . "<br>";
    echo "Email: " . $email;
}
?>
<form action="submit.php" method="POST">
  <label for="name">Nama:</label>
  <input type="text" id="name" name="name">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
  <button type="submit">Submit</button>
</form>