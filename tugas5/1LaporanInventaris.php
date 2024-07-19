<?php
$inventaris = [
    [
        'nama_produk' => 'Laptop',
        'jumlah_produk' => 10,
        'harga_per_produk' => 15000000,
        'status_ketersediaan' => true
    ],
    [
        'nama_produk' => 'Mouse',
        'jumlah_produk' => 50,
        'harga_per_produk' => 150000,
        'status_ketersediaan' => true
    ],
    [
        'nama_produk' => 'Keyboard',
        'jumlah_produk' => 30,
        'harga_per_produk' => 250000,
        'status_ketersediaan' => false
    ]
];

echo "<h2>Laporan Inventaris Produk</h2>";
foreach ($inventaris as $key => $produk) {
    $total_nilai_inventaris = $produk['jumlah_produk'] * $produk['harga_per_produk'];
    $produk['total_nilai_inventaris'] = $total_nilai_inventaris;
  echo
     "</br>","Nama Produk:".$produk['nama_produk'],
     "</br>","Jumlah Produk:".$produk['jumlah_produk'],
     "</br>","Harga per Produk: Rp. " . number_format($produk['harga_per_produk'], 2, ',', '.'),
     "</br>","Total Nilai Inventaris: Rp. " . number_format($produk['total_nilai_inventaris'], 2, ',', '.'),
     "</br>","Status Ketersediaan: " . ($produk['status_ketersediaan'] ? "Tersedia" : "Tidak Tersedia"),
     "</br>";
}
?>