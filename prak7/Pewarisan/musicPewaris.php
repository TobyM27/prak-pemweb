<?php 
require 'musicInheritance.php';

class MusicPewaris extends Music {
    public $total_stream; // ini merupakan variabel baru yang mau ditambahkan ke dalam kelas Music

    public function __construct($title, $artist, $genre, $total_stream) {
        parent::__construct($title, $artist, $genre);
        $this->total_stream = $total_stream;
    }
    public function musicInfo() {
        echo"title : ".$this->title. " artist : ".$this->artist. " genre : ".$this->genre. " total stream : ".$this->total_stream."";
    }

}

?>
