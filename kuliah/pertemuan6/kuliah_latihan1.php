<?php 
// Array Associative
// Array yang indexnya berupa string, yang berasosiatif/berpasangan dengan nilainya


$mahasiswa = [
    [
        "nama" => "Rifialdi Faturrochman", 
        "npm" => "213040049", 
        "email" => "rifialdi.faturrochman@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" =>"Jimmy Hidaayat",
        "npm" => "213040050",
        "email" => "jimmy@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" =>"M Lanang",
        "npm" => "213040046",
        "email" => "lanzy@gmail.com",
        "jurusan" => "Teknik Informatika"
        ],

];

// var_dump($mahasiswa [2]["nilai_tugas"][1]);



?>

<?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>Nama:<?= $m["nama"] ?></li>
        <li>NPM:<?= $m["npm"] ?></li>
        <li>Email:<?= $m["email"] ?></li>
        <li>Jurusan:<?= $m["jurusan"] ?></li>
    </ul>

<?php } ?>


