<?php
class Segitiga {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function hitungKeliling($sisiA, $sisiB) {
        return $this->alas + $sisiA + $sisiB;
    }
}

$segitiga = new Segitiga(10, 5);
echo "Luas Segitiga: " . $segitiga->hitungLuas() . "<br>";
echo "Keliling Segitiga: " . $segitiga->hitungKeliling(8, 7) ;
?>
