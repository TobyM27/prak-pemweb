<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- saya mencoba praktikum bagian constructor dan desctructor dengan beberapa modifikasi yaitu menggunakan lagu/musik sebagai kasus studi  -->
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
    public $total_stream;

    public function __construct($title, $artist, $genre, $total_stream){
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->total_stream = $total_stream;
    }
    
    public function infoMusic() {
        echo"title : ".$this->title. " artist : ".$this->artist. " genre : ".$this->genre. " total streams : ".$this->total_stream. " .<br>";
    }
}
?>