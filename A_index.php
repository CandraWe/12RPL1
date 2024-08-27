<?php  
// menghapus dengan ling

// $id = $_GET ['id'];
    $koneksi = mysqli_connect('localhost', 'root', '', 'skincare_lakik');
    $query = mysqli_query($koneksi, "select * from product");
    
    while ($data = mysqli_fetch_array($query)){
        echo $data ["nama"];
        echo $data ["id_kategori"];
        ?>

        <a href="A_delete.php?id=<?= $data['id'] ?>">Hapus</a> <br> 
        <?php 
    }