<?php
// buat class laptop
class laptop {
  
   // buat property untuk class laptop
   public $pemilik="Andi";
  
   // buat method untuk class laptop
   public function hidupkan_laptop() {
     return "Hidupkan Laptop";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();
$laptop_lama = new laptop();
?>