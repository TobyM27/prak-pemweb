<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- File ini merupakan file tugas praktikum minggu 7 untuk  -->

<!-- 
Nama : Toby Manurung 
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
        echo "NIM : ".$this->nim. "\n Nama : ".$this->nama. "\n Prodi : ".$this->prodi. "Usia : ".$this->usia. "\n \n";
    }

    // bagian ini berguna apabila pengguna ingin menghapus seluruh data mahasiswa yang telah tersimpan
    public function __destruct(){
        echo "Objek mahasiswa telah dihapus!";
    }
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
        echo "NIM : ".$this->nim. "\n Nama : ".$this->nama. "\n Prodi : ".$this->prodi. "Usia : ".$this->usia. "Rank : ".$this->rank. "KD : ".$this->kd ."\n \n";
    }

}

// jika pengguna ingin memanggil atau mencetak objek yang baru saja dibuat, maka objek pemainMhs1 dapat dibuat dengan kelas Valorant. 
$pemainMhs1 = new Valorant(12113067,"Jack Red","Teknik Sipil",20, "Radiant", 1.21);




?>