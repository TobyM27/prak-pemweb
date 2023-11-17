<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- saya mencoba praktikum bagian errorhandling dengan beberapa modifikasi yaitu menggunakan lagu/musik sebagai kasus studi -->
<!-- 
Nama : Toby Manurung 
NIM : (121140099) 
Kelas : RB / RB (Siakad/Praktikum)

<?php
// MusicError.php

class MusicError {
    private $title;
    public function __construct($title) {
        $this->setTitle($title);
    }

    public function setTitle($title) {
        if (is_string($title) && !empty($title)) {
            $this->title = $title;
        } else {
            throw new InvalidArgumentException("Music title has to be in strings and it is required (can not be left empty)! ");
        }
    }

    public function infoMusic() {
        return "Music ".$this->title." .<br>";
    }
 
}
?>