<?php
// Pertemuan 2, belajar sintaks PHP

//  NILAI
// angka (integer), tulisan (string), true/false (boolean)
echo true; // true bernilai 1, false bernilai 0 (boolean)
echo '<br>';
echo 10; // integer
echo '<br>';
echo 'Rifialdi'; // string
echo '<hr>';

// VARIABEL
// Tempat menampung NILAI
// awali dengan tanda $, namanya bebas
// boleh mengandung angka, tidak boleh diawali angka
// tidak boleh ada spasi
$nama_depan = 'Rifialdi';
echo $nama_depan;
echo '<hr>';

// STRING
// ' ', " "
$hari = "Jum'at";
echo "Jum'at";
echo '<br>';
echo 'Rifialdi: "Hallo, Semua!"';
echo '<br>';
// Escape Character
//  \
echo 'Rfialdi: "Selamat hari jum\'at"';
echo '<br>';
echo "Rfialdi: \"Selamat hari jum'at\"";
echo '<br>';
// Interpolasi
// Mencetak langsung isi variabel
// hanya bisa oleh "
echo "Hallo, nama saya $nama_depan";
echo '<hr>';

// Concat / Penggabung String
$nama_depan = 'Rifialdi';
$nama_belakang = 'Faturrochman';
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
echo 'Rifialdi: "Selamat' . " hari Jum'at\"";

echo '<hr>';

//Operator
// Aritmatika
// +, -, *, /, % (modulo / modulus / sisa bagi)
echo 1 + 1; //Hasil dari 1 + 1 adalah 2
echo '<br>';
echo 'Hasil dari 1 + 1 adalah ' , 1 + 1;
echo '<br>';
echo (1 + 2) * 3 - 4;
echo '<br>';
echo 11 % 2; 
echo '<br>';
echo 1 + "1" + 1;

echo '<hr>';
// Perbandingan
// >, <, >=, <=, ==, !=
echo 1 < 5; // True
echo '<br>';
echo 1 > 5; // False
echo 1 == "1"; //True

echo '<hr>';
// Identitas / Strict Comparison
// ===, !===
echo 1 === "1"; // False

echo '<hr>';
// Increment / Decrement
// tambah / kurang 1
// ++, --
$x = 10;
$x++;
echo $x;
echo '<br>';
$y = 10;
echo ++$y;
echo '<br>';
echo $y;
?>