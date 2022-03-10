<?php 
// definisikan masing-masing sisi kubus
$a = 9;
$b = 4;

// hitung masing-masing volume kubus
$volume_a = pow($a,3);
$volume_b = pow($b,3);

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kemudian cetak nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan volume kubus B dengan sisi $b adalah $total";

echo "<hr>";

// Deklarasi / definisi function
function totalVolumeDuaKubus($a, $b) {
    $volume_a = pow($a,3);
    $volume_b = pow($b,3);

    $total = $volume_a + $volume_b;

    return "Jumlah dari volume kubus dengan sisi $a dan volume kubus dengan sisi $b adalah $total";
}

// pemanggilan / eksekusi function
echo totalVolumeDuaKubus(9,4);
echo "<br>";
echo totalVolumeDuaKubus(5,6);
echo "<br>";
echo totalVolumeDuaKubus(3,8);

echo "<hr>";
// buat sebuah fungsi untuk menghitung luas segitiga

function luasSegitiga($c, $d) {
    $luas_segitiga = $c * $d / 2;

    return "Luas segitiga dengan alas $c dan tinggi $d adalah $luas_segitiga";
}

// pemanggilan /eksekusi function
echo luasSegitiga(2,4);
echo "<br>";
echo luasSegitiga(8,4);



?>