<?php

$raio = fgets(STDIN);
$n    = 3.14159;

$area = number_format(round(pow($raio, 2) * $n, 4), 4, '.', '');

echo "A=$area\n"

?>