<?php

function ara($ilk, $son)
{
    $dizi = range($ilk, $son);
    return $dizi;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    print_r(ara(5, 25));
    ?>
</pre>
</body>

</html>