<?php
class laptop{
    // buat public property
    public $pemilik;

    // buat public method
    public function hidupkan_laptop(){
        return "Hidupkan laptop";
    }
}
//buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();

// set property
$laptop_anto->pemilik="Anto";

//Tampilkan property
echo $laptop_anto->pemilik; // Anto

// tampilkna method
echo $laptop_anto->hidupkan_laptop(); // Hidupkan laptop

?>