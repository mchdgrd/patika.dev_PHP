<?php
echo '<pre>';

$sayilar = range(1, 25);

$cift = array_filter($sayilar, function ($e) {
    return $e % 2 == 0 ? $e : false;
});
print_r($cift);


