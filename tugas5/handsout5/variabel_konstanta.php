<?php
// Deklarasi dan inisialisasi variabel
$nama = "John Doe";
$usia = 20;
$ipk = 3.5;
$status_aktif = true;
// Menampilkan nilai variabel
echo "Nama: " . $nama . "<br>";
echo "Usia: " . $usia . "<br>";
echo "IPK: " . $ipk . " cm<br>";
echo "Status: " . ($status_aktif ? 'Aktif' : 'Tidak Aktif') .
"<br>";
// Deklarasi konstanta
define("NAMA_KAMPUS", "Politeknik Negeri Malang");
const NAMA_MATAKULIAH = "Desain dan Pemrograman Web";
// Menampilkan nilai konstanta
echo "Nama Kampus: " . NAMA_KAMPUS . "<br>";
echo "Nama Matakuliah: " . NAMA_MATAKULIAH . "<br>";
?>