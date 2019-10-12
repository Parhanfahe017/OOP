<?php

class Laptop{

    //buat protected property
    protected $pemilik;

    // buat protected ,method
    protected function hidupkan_laptop(){
        return "Hidupkan laptop";
    }
}
//(instansiasi)
$laptop_anto = new Laptop();

// set protected property akan menghasilkan error
$laptop_anto->pemilik="Anto";
// fatal:eror cannot access protected laptop: $pemilik

//tampilkan protected akan menghasilkan error
echo $laptop_anto->pemilik;
// fatal:eror cannot access protected laptop: $pemilik

// jalankan protected method akan menghasilkan error
echo $laptop_anto->hidupkan_laptop();
// fatal:eror cannot access protected laptop: hidupkam_laptop()
// from context

?>