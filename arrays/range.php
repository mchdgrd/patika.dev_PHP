<?php

function ara($ilk, $son)
{
    $dizi = range($ilk, $son);
    return $dizi;

}

echo '<pre>';
print_r(ara(5, 25));

?>