<?php
class Buku {
    public $judul;
    public $penulis;
    public $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function tampilkanInformasi() {
        echo "Judul: " . $this->judul . "\n";
        echo "Penulis: " . $this->penulis . "\n";
        echo "Tahun Terbit: " . $this->tahunTerbit . "\n";
    }
}

class Perpustakaan {
    private $koleksiBuku = [];

    public function tambahBuku(Buku $buku) {
        $this->koleksiBuku[] = $buku;
    }

    public function tampilkanSemuaBuku() {
        foreach ($this->koleksiBuku as $buku) {
            $buku->tampilkanInformasi();
            echo "-------------". "<br>";
        }
    }

    public function cariBukuBerdasarkanJudul($judul) {
        foreach ($this->koleksiBuku as $buku) {
            if ($buku->judul == $judul) {
                return $buku;
            }
        }
        return null;
    }
}

$buku1 = new Buku("Pemrograman PHP", "John Doe", 2020);
$buku2 = new Buku("Dasar-Dasar Java", "Jane Doe", 2018);

$perpustakaan = new Perpustakaan();
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);

echo "Semua Buku di Perpustakaan:". "<br>";
$perpustakaan->tampilkanSemuaBuku();

echo "<br>"."Cari Buku Berdasarkan Judul:". "<br>";
$hasilPencarian = $perpustakaan->cariBukuBerdasarkanJudul("Pemrograman PHP");
if ($hasilPencarian) {
    $hasilPencarian->tampilkanInformasi();
} else {
    echo "Buku tidak ditemukan.". "<br>";
}
?>
