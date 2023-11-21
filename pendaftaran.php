<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pendaftaran Siswa Baru</h1>
    <form action="prosesdaftar.php" method="POST">
        <fieldset>
            <p>
                <label for="id"> Id</label>
                <input type="text" nama ="id" placeholder="id"/>
            </p>
            <p>
                <label for="nama">Nama</label>
                <input type="text" nama ="nama" placeholder="Nama Anda"/>
            </p>
            <p>
                <label for="alamat">Alamat</label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="hp"> No Hp</label>
                <textarea name="hp"></textarea>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar">
            </p>
        </fieldset>
    </form>

</body>
</html>