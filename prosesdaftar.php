<?php
    include 'koneksi.php';

            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $hp = $_POST['hp'];
            
            $query=mysqli_connect($konek,"INSERT INTO OHE(id,nama,alamat,hp)VALUE ('$id','$nama','$alamat','$hp')");
            while($data=mysqli_fetch_array($query))
        ?>