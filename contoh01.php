<?php
// buat class leptop
class Laptop{

    // buat property untuk class laptop
    var $pemilik;
    var $merk;
    var $ukuran_layar;

    // membuat method untuk class laptop
    function hidupkan_laptop() {
        return "Hidupkan laptop";
    }
    function matikan_laptop(){
        return "Matikan laptop";
    }
}
// membuat objek dari class laptop (instansiasi)
$laptop_anto = new Laptop();

// set property
$laptop_anto->pemilik="Anto";
$laptop_anto->merk="Asus";
$laptop_anto->ukuran_layar="15 inchi";

// Tampilan property
echo $laptop_anto->pemilik;
echo "<br />";
echo $laptop_anto->merk;
echo "<br />";
echo $laptop_anto->ukuran_layar;
echo "<br />";

// Tampilkan method
echo $laptop_anto->hidupkan_laptop();
echo "<br />";
echo $laptop_anto->matikan_laptop();
?>