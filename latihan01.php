<?php
class Rpl_dua{
    //properti apa aja yg ada dirinya
    public $siswa_cewe     = 20;
    public $siswa_lakilaki = 12;
    public $jml_siswa      = 32;
    public $nama_km = "reyhan";
    public $nama_walikelas = "sofwan";

    //method berupa 
    public function belajar(){
        return "belajar OOP";   
    }
    public function keluar_kelas(){
        return "dari rpl 2";
    }
}
//objeck
$rpl_dua1 = new rpl_dua();
echo "jumlah siswa cewe : $rpl_dua1->siswa_cewe <br>";
echo "jumlah siswa laki-laki : $rpl_dua1->siswa_lakilaki <br>";
echo "jumlah siswa di RPL 2 : $rpl_dua1->jml_siswa<br>";
echo "Nama KM : $rpl_dua1->nama_km<br>";
echo "nama walikelas $rpl_dua1->nama_walikelas<br>";
echo "materi hari ini rpl : " . $rpl_dua1->belajar();
?>