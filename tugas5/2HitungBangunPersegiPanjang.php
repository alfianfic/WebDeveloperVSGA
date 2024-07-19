<?php
$persegi_panjang = [
    [
        'panjang' => 4,
        'lebar' => 3
    ],
    [
        'panjang' => 15,
        'lebar' => 8
    ],
    [
        'panjang' => 15,
        'lebar' => 14
    ]
];
    
foreach ($persegi_panjang as $key => $bangun) {
    $luas = $bangun['panjang'] * $bangun['lebar'];
    $keliling = 2 * ($bangun['panjang'] + $bangun['lebar']);
    $diagonal = sqrt($bangun['panjang'] ** 2 + $bangun['lebar'] ** 2);

    $persegi_panjang[$key]['luas'] = $luas;
    $persegi_panjang[$key]['keliling'] = $keliling;
    $persegi_panjang[$key]['diagonal'] = $diagonal;
}
foreach ($persegi_panjang as $bangun) {
    echo "Bangun Persegi Panjang:</br>";
    echo "Panjang: {$bangun['panjang']}</br>";
    echo "Lebar: {$bangun['lebar']}</br>";
    echo "Luas: {$bangun['luas']}</br>";
    echo "Keliling: {$bangun['keliling']}</br>";
    echo "Panjang Diagonal: " . number_format($bangun['diagonal'], 2) . "</br></br>";
}
?>
