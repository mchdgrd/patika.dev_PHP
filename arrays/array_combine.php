<?php

$yiyecekturleri =  ['meyve', 'sebze', 'aburcubur'];
$yiyecekler = [['elma', 'armut'], ['biber', 'turp', 'domates', 'patetes'], ['cips', 'kola', 'gofret', 'çilolata']];

$combined = array_combine($yiyecekturleri, $yiyecekler);

echo '<pre>';

print_r($combined);
