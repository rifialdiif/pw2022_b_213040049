<?php 
// $_GET
$mahasiswa = [
    [
        "nama" => "Rifialdi Faturrochman", 
        "npm" => "213040049", 
        "email" => "rifialdi.faturrochman@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "siesta.jpg"
    ],
    [
        "nama" =>"Jimmy Hidayat",
        "npm" => "213040050",
        "email" => "jimmy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "hayasaka.jpg"
    ],
    [
        "nama" =>"M Lanang",
        "npm" => "213040046",
        "email" => "lanzy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "chziuru.jpg"
    ],

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?> & npm=<?= $mhs["npm"]; ?> & email=<?= $mhs["email"]; ?> & jurusan=<?= $mhs["jurusan"]; ?> & gambar=<?= $mhs["gambar"]; ?> "><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>