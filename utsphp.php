<?php

require_once 'list.php';
$daftar = new daftar_();
$kendaraan='mobil';

switch ($kendaraan) {
case 'mobil';
    $daftar -> mobil();
        break;
case 'motor';
    $daftar -> motor();
        break;
default:
    echo "tidak ada pilihan mz";
        break;
}

 ?>
