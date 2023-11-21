<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- File ini merupakan file tugas praktikum minggu 7 untuk  -->

<!-- 
Nama : Tobyanto Putra Mandiri
NIM : (121140099) 
Kelas : RB / RB (Siakad/Praktikum)
-->

<?php
// bagian ini berguna untuk membuat kelas yang bernama Mahasiswa 
class Mahasiswa{
    // dapat dilihat bahwa kelas mahasiswa memiliki 4 attribut dengan status publik yaitu nim, nama, prodi, dan usia.
    public $nim;
    public $nama;
    public $prodi;
    public $usia;

    // bagian ini berguna untuk melakukan inisialiasi properti objek saat objek tersebut dipanggil atau dibuat oleh pengguna
    public function __construct($nim, $nama, $prodi, $usia){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->usia = $usia;
    }

    // bagian ini berguna untuk menampilkan atau mencetak informasi terkait data-data hasil dari kelas mahasiswa
    public function getMahasiswa(){
        echo "NIM : ".$this->nim. "<br> Nama : ".$this->nama. "<br> Prodi : ".$this->prodi. "<br> Usia : ".$this->usia. "<br> <br>";
    }

    // bagian ini berguna apabila pengguna ingin menghapus seluruh data mahasiswa yang telah tersimpan
    // public function __destruct(){
    //     echo "Objek mahasiswa telah dihapus! <br>";
    // }
}

// pada bagian ini terdapat dua objek baru yang dibuat dengan menggunakan kelas Mahasiswa yaitu : $mhs1 dan $mhs2
$mhs1 = new Mahasiswa(121140099,"Tobyanto Putra Mandiri","Teknik Informatika", 20);
$mhs2 = new Mahasiswa(121130098,"Daniel Caesar","Teknik Audio", 20);

// jika pengguna ingin memanggil atau mencetak objek yang baru saja dibuat, maka kedua objek dapat dipanggil dengan bagian di bawah ini
$mhs1 -> getMahasiswa();
$mhs2 -> getMahasiswa();

// dibawah ini merupakan class turunan/child yaitu class Valorant yang memiliki class parent Mahasiswa. Fungsi dari kelas valorant ini adalah menambahkan data-data mahasiswa yang mahir dalam bermain valorant. 
class Valorant extends Mahasiswa{
    public $rank; // atribut baru pertama yaitu atribut rank yang akan menyimpan rank valorant yang dimiliki oleh seorang mahasiswa pemain valorant.
    public $kd; // atribut baru kedua yaitu atribut kd (kill/death ratio) yang akan menyimpan KD dari seorang mahasiswa pemain valorant.

    //bagian ini berguna untuk menginisialiasi atribut objek valorant yang memiliki dua tambahan atribut baru (rank dan kd)
    public function __construct($nim, $nama, $prodi, $usia, $rank, $kd){
        parent::__construct($nim, $nama, $prodi, $usia,);
        $this->rank = $rank; 
        $this->kd = $kd; 
    }

    // bagian ini berguna untuk menampilkan atau mencetak informasi terkait data-data hasil dari kelas Valorant yang menunjukan semua data dari mahasiswa namun dengan tambahan atribut rank dan kd
    public function getMhsVal(){
        echo "NIM : ".$this->nim. "<br> Nama : ".$this->nama. "<br> Prodi : ".$this->prodi. "<br> Usia : ".$this->usia. "<br> Rank : ".$this->rank. "<br> KD : ".$this->kd ."<br> <br>";
    }

}

// jika pengguna ingin memanggil atau mencetak objek yang baru saja dibuat, maka objek pemainMhs1 dapat dibuat dengan kelas Valorant. 
$pemainMhs1 = new Valorant(12113067,"Jack Red","Teknik Sipil",20, "Radiant", 1.21);

// bagian ini berguna untuk memanggil fungsi getMhsVal untuk mencetak objek pemainMhs1
$pemainMhs1 -> getMhsVal();

// bagian ini untuk membuat class baru dengan atribut yang privat dimana atribut tersebut tidak dapat dengan sembarangan diakses secara publik.
class dataPrivat{
    public $Nama;
    private $tahunLahir; //atribut baru ini bersifat privat yang berarti tidak dapat diakses oleh kelas lain tanpa metode enkapsulasi

    public function __construct($Nama, $tahunLahir){
        $this->settahunLahir($tahunLahir); // berguna untuk mengambil dari fungsi settahunLahir
        $this->Nama = $Nama;
    }

    public function settahunLahir($tahunLahir){
        if(is_string($tahunLahir) && strlen($tahunLahir) > 0){ // value tahunLahir akan terinisialiasi apabila data yang diinput berupa string dan panjang
            $this->tahunLahir = $tahunLahir;
        } else { // invalidArgumentExeception akan terpanggil apabila tahunLahir tidak ada atau invalid.
            throw new InvalidArgumentException("Anda harus mengisi tahun lahir");
        }
    }

    // fungsi ini berguna untuk mengembalikan nilai/value dari nama dan tahunlahir yang telah diinisialiasi dengan fungsi __construct 
    public function getTahunLahir(){
        return "Nama : ".$this->Nama. "\nTahun Lahir : ".$this->tahunLahir. "<br>";
    }
}

// bagian ini berguna untuk melakukan percobaan terhadap fungsi settahunLahir 
try {
    $test = new dataPrivat("Yeshua", 1999);
    $test->settahunLahir(2000);
    echo $test->getTahunLahir();
}catch(InvalidArgumentException $e){ // bagian ini (catch) akan menampilkan errro apabila bagian try tidak berhasil.
    echo "Terdapat error pada penginputan nama dan tahun lahir. Berikut merupakan laporan error : ". $e->getMessage(). "<br> <br>";
}

//berikut merupakan regex yang diambil dari file index.php dari folder regularexpression
// Teks html 
$htmlText = '<p> Hello there, what is your favorite music genre out of these 3? <br> <span style="text-decoration: underline;"> Hip Hop </span> atau <span style="text-decoration: underline;"> Pop </span> </p>';

echo "kalimat HTML sebelum diberi regular expression : ";
echo $htmlText;
$regex = '/<span style="text-decoration:\s*([^"]+)">/'; // regex ini berguna untuk mencocokkan tag <span> dengan properti warna

$newTxtDec = 'overline'; // nilai text-decoration yang baru atau yang diinginkan

$newHTMLText = preg_replace($regex, '<span style="text-decoration : '. $newTxtDec . ';">', $htmlText); // bagian ini berguna untuk mengganti text-decoration dalam tag <span> dengan text-decoration baru yang disimpan dalam variabel nexTxtDec yaitu overline

// berguna untuk menampilkan hasil
echo "kalimat HTML setelah diberi regular expression : ";
echo $newHTMLText;

?>