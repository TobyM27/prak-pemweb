<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- saya mencoba praktikum bagian regular expression dengan beberapa modifikasi yaitu menggunakan lagu/musik sebagai kasus studi  -->
<!-- 
Nama : Toby Manurung 
NIM : (121140099) 
Kelas : RB / RB (Siakad/Praktikum)
<?php
// Teks html 
$htmlText = '<p> Hello there, what is your favorite music genre out of these 3? <br/> <span style="text-decoration: underline;;"> Hip Hop </span> atau <span style="text-decoration: underline;"> Pop </span> ... </p>';

// regex ini berguna untuk mencocokkan tag <span> dengan properti warna
$regex = '/<span style="text-decoration:\s*([^"]+)">/';

// nilai text-decoration yang baru atau yang diinginkan
$newTxtDec = 'overline';

// mengganti text-decoration dalam tag <span> dengan text-decoration baru
$newHTMLText = preg_replace($regex, 'span style="text-decoration : '. $newTxtDec . ';">', $htmlText);

// berguna untuk menampilkan hasil
echo $newHTMLText;
?>