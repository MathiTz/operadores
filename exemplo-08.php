<?php
// Um ou outro é verdade
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
// Os dois tem que ser verdade
$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3;


var_dump($resultado);
var_dump($resultado2);