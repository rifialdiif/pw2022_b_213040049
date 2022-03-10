<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");
echo "<hr>";
    
// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januar 1970
echo time();
echo "<br>";
echo date("l", time()+60*60*24*100);
echo "<br>";
echo date("d M Y", time()-60*60*24*100);
echo "<hr>";

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo "Fathya Azzura was born on " , date("l", mktime(0,0,0,7,11,2002));
echo "<hr>";

// strtotime
echo date("l", strtotime("13 April 2003"));


?>