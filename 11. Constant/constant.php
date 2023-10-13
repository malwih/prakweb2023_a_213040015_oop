<?php

// define("NAMA", "Malwi Hidayat");
// echo NAMA;

// echo "<br>";

// const UMUR = 26;
// echo UMUR

// class Coba {
//     const NAMA = "Malwi Hidayat";
// }

// echo Coba::NAMA;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>