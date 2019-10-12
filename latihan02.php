<?php

class Mieindomie {

    //property
    var $merkproduk;
    var $nama_pembeli;
    var $harga1_bunkus;

    //method
    function makanmie(){
        return "makan disini atau di rumah";
    }

}
// objek ada 2
$warungarif_indomie = new Mieindomie();
$warungokta_indomie = new Mieindomie();

// set property
$warungarif_indomie->merkproduk="Mie indomie bawang";
$warungarif_indomie->nama_pembeli="asep irfan maullana";
$warungarif_indomie->harga1_bungkus="100k";

// tampilan property
echo $warungarif_indomie->merkproduk;
echo "<br />";
echo $warungarif_indomie->nama_pembeli;
echo "<br />";
echo $warungarif_indomie->harga1_bungkus;
echo "<br />";

//tampilan method
echo $warungarif_indomie->makanmie();

?>