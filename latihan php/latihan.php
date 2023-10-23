<?php

$nama = "NABILLA SHINTA ZAHRA";
$kelas = "11";
$jurusan = "RPL";
$sekolah = "SMKN 1 SUBANG";
$alamat_sekolah = "SUBANG";

echo "BIODATA <br>";
echo "NAMA          : $nama <br>";
echo "KELAS         : $kelas <br>";
echo "JURUSAN       : $jurusan <br>";
echo "SEKOLAH       : $sekolah <br>";
echo "ALAMAT SEKOLAH: $alamat_sekolah <br>";

echo "<br>";
$bilangan1 = 10;
$bilangan2 = 10;
$hasilpenjumlahan;
$hasilpengurangan;
$hasilperkalian;
$hasilpembagian;

$hasilpenjumlahan = $bilangan1 + $bilangan2;
$hasilpengurangan = $bilangan1 - $bilangan2;
$hasilperkalian = $bilangan1 * $bilangan2;
$hasilpembagian = $bilangan1 / $bilangan2;

echo "Hasil Penjumlahan : $bilangan1 + $bilangan2 = $hasilpenjumlahan <br>";
echo "Hasil Pengurangan : $bilangan1 - $bilangan2 = $hasilpengurangan <br>";
echo "Hasil Perkalian :  $bilangan1 * $bilangan2 = $hasilperkalian <br>";
echo "Hasil Pembagian :  $bilangan1 / $bilangan2 = $hasilpembagian <br>";

echo "<br>";
echo "<h3> BANGUN DATAR </h3>";

$luas1 = 5;
$luas2 = 5;
$hasilpersegi = $luas1 * $luas2;

echo "RUMUS PERSEGI <br>";
echo "Luas = S * S <br>";
echo "Hasil Luas Persegi : $luas1 * $luas2 = $hasilpersegi <br>";

$luas = 10;
$panjang = 5;
$hasilpersegipanjang = $luas1 * $luas2;

echo "<br>";
echo "RUMUS PERSEGI PANJANG <br>";
echo "Luas = P * L <br>";
echo "Hasil Luas Persegi Panjang : $luas * $panjang = $hasilpersegipanjang <br>";

$bilangan1 = 1/2;
$alas = 10;
$tinggi = 7;
$hasilsegitiga = $bilangan1 * $alas * $tinggi;

echo "<br>";
echo "RUMUS SEGITIGA <br>";
echo "Luas = 1/2 * A * T <br>";
echo "Hasil Luas Segitiga : $bilangan1 * $alas * $tinggi = $hasilsegitiga <br>";

$bilangan1 = 22/7;
$jari1 = 7;
$jari2 = 7;
$hasillingkaran = $bilangan1 * $jari1 * $jari2;

echo "<br>";
echo "RUMUS LINGKARAN <br>";
echo "Luas = 22/7 * r * r <br>";
echo "Hasil Luas Lingkaran : 22/7 * $jari1 * $jari2 = $hasillingkaran <br>";

echo "<br>";
echo " <h3> SUHU </h3>";

$celcius = 30;
$rumusF = 9/5;
$tambah = 32;
$hasilF = $celcius * $rumusF + $tambah;

echo "Rumus konversi suhu Celcius ke Fahrenheit:<br>";
echo "30 C<sup>o</sup> x 9/5 + 32 = $hasilF <br><br>";

$celcius = 30;
$rumusK = 273.15;
$hasilK = $celcius + $rumusK;

echo "Rumus konversi suhu Celcius ke Kelvin: <br>";
echo "  K= ⁰C + 273,15 = $hasilK <br><br>";

$celcius = 30;
$rumusR = 4/5;
$hasilR = $celcius * $rumusR;

echo " Rumus konversi suhu Celcius ke Reamur:<br>";
echo "  ⁰R = (4/5) ⁰C = $hasilR <br><br>";

$celcius = 30;
$rumusRen = 273.15;
$rumusRen2 = 9/5;
$hasilRen = $celcius + $rumusRen * $rumusRen2;

echo "Rumus konversi suhu Celcius ke Rankine:<br>";
echo "  ⁰Ra = (⁰C + 273.15) × 9/5 = $hasilRen ";

