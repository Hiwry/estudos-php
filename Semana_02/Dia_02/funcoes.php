<?php

$nome = "Hiwry";
$valor = 35.00;
$quantidade = 30;
$titulo = "Comprar tecido";
$titulo2 = "Oi";
$prioridade = "Alta";

function receberNome(string $nome = "Hiwry"): string
{
    return $nome;
}

function calcularSubtotal(int $quantidade, float $valor): float
{
    return $quantidade * $valor;
}

function validadorTitulos(string $titulo): bool
{
    return strlen(trim($titulo)) >= 3;
}

function formatarPrioridade(string $prioridade): string
{
    return ucfirst($prioridade);
}

echo "Saudação: Olá, " . receberNome($nome);
echo "<br>";

$subtotal = calcularSubtotal($quantidade, $valor);

echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.');
echo "<br>";

if (validadorTitulos($titulo)) {
    echo "Título: " . $titulo . " — válido";
} else {
    echo "Título: " . $titulo . " — inválido";
}

echo "<br>";

if (validadorTitulos($titulo2)){
    echo "Título: " . $titulo2 . " — válido";
} else {
    echo "Título: " . $titulo2 . " — inválido";
}

echo "<br>";

echo "Prioridade: " . formatarPrioridade($prioridade);
?>