<?php
$titulo = "  Comprar tecido  ";
$prioridade = "PRIORIDADE ALTA";
echo trim($titulo);
echo "<br>";

echo strlen($titulo);
echo "<br>";

echo strtolower($titulo);
echo "<br>";

echo strtolower($prioridade);
echo "<br>";

date_default_timezone_set("America/Fortaleza");

$dataAtual = date("d/m/Y");

echo "Data atual: " . $dataAtual;

?>