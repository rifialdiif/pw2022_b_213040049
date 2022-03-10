<?php 
// 4 - FUNCTION
// bulit-in function

// date()
// untuk mengetahui waktu saat ini
// default timezone: UTC (-7 jam)
echo date("G - l, j F Y" );
echo "<hr>";
echo date("l", time());
echo "<hr>";

// time()
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlaku sejak 1 Januari 1970
echo time();
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
// hari apa 100 hari kebelakang
echo date("l", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime()
// membuat waktu berdasarkan format
// mktime(0,0,0,0,0,0);
// jam,menit,detik,bulan,tanggal,tahun
echo mktime(10,45,0,3,5,2022);
echo "<hr>";
echo date("l", mktime(0,0,0,4,13,2003));
echo "<hr>";
echo strtotime("13 April 2003");
echo "<br>";
echo mktime(0,0,0,4,13,2003);
echo "<hr>";

// fungsi matematika
// pow() untuk pangkat
echo pow(5, 3);
echo "<br>";
echo rand(1,10);
echo "<br>";
// pembulatan
echo round(2.5); //pembultan ke nilai terdekat
echo "<br>";
echo ceil(2.1); // ke atas (ceiling / langit2)
echo "<br>";
echo floor (2.9); // kebawah (floor/lantai)





?>