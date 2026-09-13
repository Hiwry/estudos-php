<?php
// Constantes
const DESCONTO = 0.10;
const LIMITE_DESCONTO = 1000.00;
const TAXA_ENTREGA = 25.00;

// Variaveis de produtos
$quantidadeCamisetas = 20;
$precoCamiseta = 55.00;

$quantidadeCalcas = 5;
$precoCalca = 80.00;

// Calculos 

$subtotal = 
    ($quantidadeCamisetas * $precoCamiseta) +
    ($quantidadeCalcas * $precoCalca);

// Aqui vai comparar se vai ser true or false 
// true = 1 // falase = 0

$pedidoAcimadoLimite = $subtotal > LIMITE_DESCONTO;

$valorDesconto = $subtotal * DESCONTO * $pedidoAcimadoLimite;

$totalPedido = $subtotal - $valorDesconto + TAXA_ENTREGA;

// Aqui agora e pra iniciar a produçao

$pagamentoAprovado = true;
$MateriaisDisponiveis = true;

$podeIniciarProducao = $pagamentoAprovado && $MateriaisDisponiveis;

echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "<br>";
echo "Desconto: R$ " . number_format($valorDesconto, 2, ',', '.') . "<br>";
echo "Taxa de entrega: R$ " . number_format(TAXA_ENTREGA, 2, ',', '.') . "<br>";
echo "Total do pedido: R$ " . number_format($totalPedido, 2, ',', '.') . "<br>";
echo "Pode iniciar a produção: ";

var_export($podeIniciarProducao);
?>