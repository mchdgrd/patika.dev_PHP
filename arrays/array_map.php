<?php
echo '<pre>';

$sayilar = range(1,25);

$dizi = array_map(function($e){return ($e-1)*2;},$sayilar); //anonim fonksiyon
print_r($dizi);

$dizi2 = array_map('kupalma',$sayilar);
print_r($dizi2);

function kupalma ($sayi){
    return ($sayi-1)*($sayi-1);
}