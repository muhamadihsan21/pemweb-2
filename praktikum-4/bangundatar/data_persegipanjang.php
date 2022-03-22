<?php 

require_once 'class_persegiPanjang.php';

echo "Menghitung Luas dan keliling persegi panjang";
$satu = new persegiPanjang(3,5);
$dua = new persegiPanjang(5,9);

echo "<br/>";
echo "<br/> Luas persegi panjang 1 = " .$satu->getLuas();
echo "<br/> Luas persegi panjang 2 = " .$dua->getLuas();
echo "<br/>";
echo "<br/> Keliling persegi panjang 1 = " .$satu->getKeliling();
echo "<br/> Keliling persegi panjang 2 = " .$dua->getKeliling();

?>