<?php

// get
// $_GET: Data dikirim melalui URL, terlihat jelas di address bar.
// Form yang menggunakan metode GET biasanya digunakan untuk pencarian atau saat kamu ingin data terlihat di URL.
// File: search.php
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    echo "Kamu mencari: " . $query;
}

?>

<form action="search.php" method="GET">
  <label for="query">Cari:</label>
  <input type="text" id="query" name="query">
  <button type="submit">Search</button>
</form>
