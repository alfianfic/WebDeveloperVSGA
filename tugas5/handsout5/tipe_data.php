<?php
// Tipe Data String
$nama = "John Doe";
echo "Tipe Data String: " . $nama . "<br>";
// Tipe Data Integer
$tingkat = 3;
echo "Tipe Data Integer: " . $tingkat . "<br>";
// Tipe Data Float
$ipk = 3.54;
echo "Tipe Data Float: " . $ipk . "<br>";
// Tipe Data Boolean
$status_aktif = true;
echo "Tipe Data Boolean: " . ($status_aktif ? 'true' : 'false') .
"<br>";
// Tipe Data Array
$matakuliah = array("Pemrograman Web", "Basis Data", "Matematika
Diskrit");
echo "Tipe Data Array: ";
print_r($matakuliah);
echo "<br>";
// Tipe Data NULL
$kosong = NULL;
echo "Tipe Data NULL: " . (is_null($kosong) ? 'NULL' : 'NOT NULL') .
"<br>";
?>