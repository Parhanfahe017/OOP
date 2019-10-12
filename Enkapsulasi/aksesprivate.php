<?php

class komputer{
    //property dengan hak akses protected
    private $jenis_prosessor = "Intel Core i7-4790 3.6ghz";

    public function tampilkan_prosessor() {
        return "jenis_prosessor";
    }
}
// buat class laptop
class laptop extends komputer{

    public function tampilkan_prosessor(){
        return $this->jenis_prosessor;
    }
} 
$komputer_baru = new komputer();
$laptop_baru = new laptop();

// jalankan method dari class komputer
echo $komputer_baru->tampilkan_prosessor();

// jalan kan method dri class laptop
echo $laptop_baru->tampilkan_prosessor();

?>
   