<?php

$nilai = 60;

if($nilai == 100){
    echo("A");
    //jika kondisi terpenuhi//
}else if($nilai > 70){
    //jika kondisi tidak terpenuhi//
    echo("B");
}else{
    echo("Tidak LULUS wir");
}

echo "<br>";

$nilai = 100;

if($nilai == "jkg"){
    echo("Maaf, Inputan harus angka");
}
if($nilai > 100){
    echo("Maaf input melebihi batas");
}
 else if($nilai > 89){
    echo("A+");
 }
 else if($nilai > 79){
    echo("A");
 }
else if($nilai > 69){
    echo("B+");
}
else if($nilai > 59){
    echo("B");
}
else if($nilai > 49){
    echo("C");
}
else if($nilai > 0){
    echo("E");
}
else if($nilai < 0){
    echo("Inputan salah");
}