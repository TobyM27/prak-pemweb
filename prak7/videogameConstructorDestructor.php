<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- saya mencoba praktikum bagian inheritance dengan beberapa modifikasi yaitu menggunakan industri videogame sebagai kasus studi  -->
<!-- 
Nama : Toby Manurung 
NIM : (121140099) 
Kelas : RB / RB (Siakad/Praktikum)
-->

<?php
class videogame {
    public $title;
    public $developers;
    public $genre;
    public $release;

    public function __construct($title, $developers, $genre, $release) {
        $this->title = $title;
        $this->developers = $developers;
        $this->genre = $genre;
        $this->release = $release;
        echo "Game Object has been made. <br>";
    }

    public function getTitle() {
        echo "Videogame : ".$this->title. " <br> Developer : ".$this->developers. " <br> Genre : ".$this->genre. " <br> Release year : ".$this->release. " <br> ";
    }

    public function __destruct() { 
        echo "Game objects have been terminated! ";
    }
}

//membuat dan memanggil game objek
$game1 = new videogame("CS2", "Source2", "FPS", 2021);
$game1->getTitle();

?> 