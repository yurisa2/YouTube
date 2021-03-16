<?php
echo '<pre>';

// https://www.php.net/manual/pt_BR/book.array.php


// https://www.php.net/manual/pt_BR/function.array.php
$associativo = array();
var_dump($associativo);

$associativo["NOME"] = "Yuri Sá";
$associativo["PHONE"] = "11999999999";
$associativo["TWITTER"] = "@yurisa2";

var_dump($associativo);


$indexado = array();

$indexado[0] = "Yuri Sá";
$indexado[1] = "1199999999";
$indexado[2] = "@yurisa2";

var_dump($indexado);

$associativo2 = array();
$associativo2["NOME"] = "Jorge Sa";
$associativo2["PHONE"] = "11899999999";
$associativo2["TWITTER"] = "@yuri.sa";


$matriz = array();
$matriz[0] = $associativo;
$matriz[1] = $associativo2;

var_dump($matriz);


var_dump($matriz[0]["TWITTER"]);

 ?>
