<?php

$film = "Avengers";
$umur = 18;
$tiket = 50.000;

if($umur >= 18 && $tiket == 100.000 && $film == "Avengers"){
    echo "Selamat menonton film dengan vip";
}
else if($umur >= 18 && $tiket == 50.000 && $film == "Avengers"){
    echo "Selamat menonton";
}
else if($umur >= 18 && $tiket == 50.000 & $film == "Avangers"){
    echo "film tidak ada, balik saja";
}
else if ($umur < 18){
    echo "Anda masih kecil";
}
else{
    echo "film tidak ada";
}