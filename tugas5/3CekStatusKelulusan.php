<?php
$mahasiswa = [
    [
        'nim' => '123456',
        'nama' => 'Budi',
        'nilai_q1' => 70,
        'nilai_q2' => 80,
        'nilai_uts' => 75,
        'nilai_uas' => 85,
        'nilai_proyek' => 90
    ],
    [
        'nim' => '123457',
        'nama' => 'Ani',
        'nilai_q1' => 90,
        'nilai_q2' => 90,
        'nilai_uts' => 85,
        'nilai_uas' => 85,
        'nilai_proyek' => 30
    ],
    [
        'nim' => '123458',
        'nama' => 'Susi',
        'nilai_q1' => 50,
        'nilai_q2' => 60,
        'nilai_uts' => 55,
        'nilai_uas' => 65,
        'nilai_proyek' => 95
    ]
];
foreach ($mahasiswa as $key => $mhs) {
    $nilai_akhir = ($mhs['nilai_q1'] * 0.1) + ($mhs['nilai_q2'] * 0.1) + ($mhs['nilai_uts'] * 0.1) + ($mhs['nilai_uas'] * 0.2) + ($mhs['nilai_proyek'] * 0.5);
    $status_kelulusan = $nilai_akhir > 60 ? "Lulus" : "Tidak Lulus";

    $mahasiswa[$key]['nilai_akhir'] = $nilai_akhir;
    $mahasiswa[$key]['status_kelulusan'] = $status_kelulusan;
}
foreach ($mahasiswa as $mhs) {
    echo "Data Mahasiswa:</br>"
        ,"NIM: {$mhs['nim']}</br>"
        ,"Nama: {$mhs['nama']}</br>"
        ,"Nilai Quiz 1: {$mhs['nilai_q1']}</br>"
        ,"Nilai Quiz 2: {$mhs['nilai_q2']}</br>"
        ,"Nilai UTS: {$mhs['nilai_uts']}</br>"
        ,"Nilai UAS: {$mhs['nilai_uas']}</br>"
        ,"Nilai Proyek: {$mhs['nilai_proyek']}</br>"
        ,"Nilai Akhir: {$mhs['nilai_akhir']}</br>"
        ,"Status Kelulusan: {$mhs['status_kelulusan']}</br><br>";
}
?>
