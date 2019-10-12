<?php
class laptop {
    protected $pemilik="Anto";

    public function akses_pemilik(){
        return $this->pemilik;
    }
    public function hidupkan_laptop(){
        return "hidupkan laptop";
    }
}

  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
  
// jalankan method akses_pemilik()
echo $laptop_anto->akses_pemilik(); // "Anto"
  
// jalankan method paksa_hidup()
echo $laptop_anto->paksa_hidup(); // "Hidupkan Laptop"
?>