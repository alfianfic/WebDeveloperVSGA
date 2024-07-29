<?php
$products = [
    [
        "nama" => "Produk A",
        "harga" => 10000,
        "stok" => 20
    ],
    [
        "nama" => "Produk B",
        "harga" => 15000,
        "stok" => 15
    ],
    [
        "nama" => "Produk C",
        "harga" => 20000,
        "stok" => 10
    ]
];

echo "Daftar Produk:\n";
foreach ($products as $product) {
    echo "Nama: " . $product['nama'],
    "<br>","Harga: " . $product['harga'],
    "<br>","Stok: " . $product['stok'],
    "<br>","-------------\n";
}
?>
