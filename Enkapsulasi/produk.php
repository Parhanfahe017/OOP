<?php
class mobil{
    var $nama;
    var $merk;
    var $pencipta;

    public function kecepatan(){
        return "Diatas 100 km/jam";
    }
}

$mobil1 = new mobil();

$mobil1->nama="huayra";
$mobil1->merk="FORD";
$mobil1->pencipta="alif saef";
$mobilA = array("nama" => $mobil1->nama,
                "merk" => $mobil1->merk,
                "pencipta" => $mobil1->pencipta,
                "kecepatan" => $mobil1->kecepatan()
                );

var_dump($mobilA);
$mobil2 = new mobil();

$mobil2->nama ="GT290";
$mobil2->merk ="FORD";
$mobil2->pencipta = "tak diketahui";
$mobilB = array("nama" => $mobil2->nama,"merk" => $mobil2->merk,"Pencipta" => $mobil2->pencipta,"Kecepatan" => $mobil2->Kecepatan());
foreach ($mobilA as $mobil => $value) {
    echo "$mobil = $value <br>";
}
echo "<br><br><br>";
foreach ($mobilB as $mobil => $value) {
    echo "$mobil = $value <br>";
}
?>

?>