<?php

function ara($ilk, $son)
{
    $dizi = range($ilk, $son);
    return $dizi;

}
$sayilar = ara(1,25);
shuffle($sayilar);
echo '<pre>';
print_r($sayilar);
