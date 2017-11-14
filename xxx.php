<?php
function _fibonacci($total)
{
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  
  $hasil = "$angka_sebelumnya $angka_sekarang";
 
  for ($i=0; $i<$total-2; $i++)
  {

    $x = $angka_sekarang + $angka_sebelumnya;
   
    $hasil = $hasil." $x";

    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $x;
  }
  return $hasil;
}
  
echo _fibonacci(8);
echo "<br>";

echo _fibonacci(10);
echo "<br>";
 
echo _fibonacci(20);
echo "<br>";
?>