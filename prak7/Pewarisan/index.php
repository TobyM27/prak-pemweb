<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- saya mencoba praktikum bagian inheritance dengan beberapa modifikasi yaitu menggunakan lagu/musik sebagai kasus studi  -->
<!-- 
Nama : Toby Manurung 
NIM : (121140099) 
Kelas : RB / RB (Siakad/Praktikum)
-->
<?php 
// index.php

//menggunakan require untuk mengimpor class musicPewaris
require 'musicPewaris.php';

// bagian ini berguna untuk membuat objek dari kelas musicPewaris dengan constructor
$music1 = new MusicPewaris("Grace to Grace", "Hillsong Worhsip", "Gospel", 108000000);

// bagian ini berguna untuk memanggil method infoMusic
$music1->musicInfo();

// bagian ini berguna untuk memanggil method infoMusic yang diwarisi dari kelas musicInherintance
$music1->infoMusic();
?>