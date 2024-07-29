<?php
$numbers = [23, 24, 24, 30, 34, 35, 40, 40, 46, 47];
$totalSum = array_sum($numbers);
$mean = $totalSum / count($numbers);

sort($numbers);
$count = count($numbers);
$middle = floor(($count - 1) / 2);
if ($count % 2) {
    $median = $numbers[$middle];
} else {
    $median = ($numbers[$middle] + $numbers[$middle + 1]) / 2;
}

$oddNumbers = array_filter($numbers, function($number) {
    return $number % 2 !== 0;
});

echo "Total hasil penjumlahan semua angka: $totalSum",
"<br>", "Nilai rata-rata (mean): $mean",
"<br>", "Nilai yang berada di posisi tengah (median): $median",
"<br>", "Angka ganjil: " . implode(', ', $oddNumbers) . "";