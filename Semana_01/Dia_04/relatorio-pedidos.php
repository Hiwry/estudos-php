<?php

$clientes = [
    ["id" => 1, "nome" => "Escola Saber"],
    ["id" => 2, "nome" => "Confecção Alagoana"],
    ["id" => 3, "nome" => "Empresa Uniforme"]
];

$pedidos = [
    [
        "clienteId" => 1,
        "quantidade" => 30,
        "precoUnitario" => 35.00,
        "status" => "Pago"
    ],
    [
        "clienteId" => 2,
        "quantidade" => 10,
        "precoUnitario" => 50.00,
        "status" => "Pendente"
    ],
    [
        "clienteId" => 3,
        "quantidade" => 40,
        "precoUnitario" => 30.00,
        "status" => "Pago"
    ]
];

function buscarNomeCliente(array $clientes, int $clienteId): string
{
    foreach ($clientes as $cliente) {
        if ($cliente["id"] === $clienteId) {
            return $cliente["nome"];
        }
    }

    return "Cliente não encontrado";
}

function calcularSubtotal(array $pedido): float
{
    return $pedido["quantidade"] * $pedido["precoUnitario"];
}

function calcularDesconto(float $subtotal): float
{
    if ($subtotal > 1000) {
        return $subtotal * 0.10;
    }

    return 0;
}

function calcularTotalFinal(float $subtotal, float $desconto): float
{
    return $subtotal - $desconto;
}

$faturamentoTotal = 0;
$pedidosPagos = 0;
$pedidosAcimaDeMil = 0;

foreach ($pedidos as $pedido) {
    $nomeCliente = buscarNomeCliente(
        $clientes,
        $pedido["clienteId"]
    );

    $subtotal = calcularSubtotal($pedido);
    $desconto = calcularDesconto($subtotal);
    $totalFinal = calcularTotalFinal($subtotal, $desconto);

    $faturamentoTotal += $totalFinal;

    if ($pedido["status"] === "Pago") {
        $pedidosPagos++;
    }

    if ($subtotal > 1000) {
        $pedidosAcimaDeMil++;
    }

    echo "Pedido da " . $nomeCliente . "<br>";
    echo "Quantidade: " . $pedido["quantidade"] . "<br>";

    echo "Subtotal: R$ "
        . number_format($subtotal, 2, ",", ".")
        . "<br>";

    echo "Desconto: R$ "
        . number_format($desconto, 2, ",", ".")
        . "<br>";

    echo "Total: R$ "
        . number_format($totalFinal, 2, ",", ".")
        . "<br>";

    echo "Status: " . $pedido["status"] . "<br><br>";
}

echo "Pedidos pagos: " . $pedidosPagos . "<br>";

echo "Faturamento total: R$ "
    . number_format($faturamentoTotal, 2, ",", ".")
    . "<br><br>";

echo "Pedidos com subtotal maior que R$ 1.000,00: "
    . $pedidosAcimaDeMil;