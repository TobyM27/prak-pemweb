<!-- Praktikum Pemrograman Web Minggu 7 -->
<?php
// mendefinisikan kelas
class Mobil {
    public $merk;
    public $tahun;
    public $warna;
    public function infomobil(){
        echo "Mobil ".$this->merk. " tahun ".$this->tahun. " berwarna ".$this->warna. " . ";
    }
}

// membuat objek 
$mobil1 = new Mobil();
$mobil1->merk = "Nissan";
$mobil1->tahun = "2022";
$mobil1->warna = "Grey";

//  memanggil objek class Mobil
$mobil1->infomobil();
?>