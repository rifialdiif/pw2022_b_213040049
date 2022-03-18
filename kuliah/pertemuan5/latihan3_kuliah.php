<?php 

$mahasiswa = [
    ["Rifialdi Faturrochman", "213040049", "rifialdi.faturrochman@gmail.com", "Teknik Informatika"],
    ["Jimmy Hidaayat", "213040050", "jimmy@gmail.com", "Teknik Informatika"],
    ["M Lanang", "213040046", "lanzy@gmail.com", "Teknik Informatika"],

];

?>

<?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>Nama:<?= $m[0] ?></li>
        <li>NPM:<?= $m[1] ?></li>
        <li>Email:<?= $m[2] ?></li>
        <li>Jurusan:<?= $m[3] ?></li>
    </ul>

<?php } ?>
