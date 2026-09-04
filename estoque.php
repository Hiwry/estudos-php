<?php

$produto = "Camiseta";
$estoqueAtual = 50;
$quantidadeSolicitada = 30;

if ($estoqueAtual >= $quantidadeSolicitada) {
    $estoqueAtual -= $quantidadeSolicitada;

    echo "Compra realizada com sucesso!<br>";
    echo "Estoque atual: " . $estoqueAtual;
} else {
    echo "Estoque insuficiente para a quantidade solicitada.";
}