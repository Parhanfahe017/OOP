<?php
// 1. calss adalah sebuah 
// 2. class mendefinisikan object.
// 3. 
class kucing {
    //properti berupa apa yg ada didirinya
    public $warna = "biru";
    public $jml_kaki = 4;
    public $mkn_fav ="pindang";

//method// berupa jalan,makan,berbicacra,kata kerja
public function bersuara(){
    return "miawww";
}
    }
//object baru    
$kucing1 = new kucing();
echo "warna kucing : $kucing1->warna";
echo "bersuara : " . $kucing1->bersuara();

?>