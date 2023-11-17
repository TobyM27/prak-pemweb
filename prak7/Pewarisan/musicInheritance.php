<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- saya mencoba praktikum bagian inheritance dengan beberapa modifikasi yaitu menggunakan lagu/musik sebagai kasus studi  -->
<!-- 
Nama : Toby Manurung 
NIM : (121140099) 
Kelas : RB / RB (Siakad/Praktikum)
-->

<?php

class Music {
    public $title;
    public $artist;
    public $genre;

    public function __construct($title, $artist, $genre){
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
    }
    
    public function infoMusic() {
        echo"title : ".$this->title. " artist : ".$this->artist. " genre : ".$this->genre. " .<br>";
    }
}
?>