<?php
require_once "bibliotecafuncao.php";
use function conversao\DolarParaReal;
use function conversao\EuroParaReal;
use function conversao\PesoParaReal;
use function conversao\LibraParaReal;
use function conversao\IneParaReal;

echo "a conversão é: ", DolarParaReal(100,5), "\n";
echo "a conversão é: ", EuroParaReal(100,5.85), "\n";
echo "a conversão é: ", PesoParaReal(100,0.0035), "\n";
echo "a conversão é: ", LibraParaReal(100,6.74), "\n";
echo "a coversão é ", IneParaReal(100,0.031);







?>

