<?php
$clientes = [
    [
        "id" => 1,
        "nome" => "Escola Saber"
    ],
    [
        "id" => 2,
        "nome" => "Confecção Alagoana"
    ],
    [
        "id" => 3,
        "nome" => "Empresa Uniforme"
    ]
];

$pedidos = [
    [
        "id" => 1,
        "cliente_id" => 1,
        "quantidade" => 30,
        "preco_unitario" => 35.00,
        "status" => "Pago"
    ],
    [
        "id" => 2,
        "cliente_id" => 2,
        "quantidade" => 10,
        "preco_unitario" => 50.00,
        "status" => "Pendente"
    ],
    [
        "id" => 3,
        "cliente_id" => 3,
        "quantidade" => 40,
        "preco_unitario" => 30.00,
        "status" => "Pago"
    ]
];

function calcularSubtotal(array $pedido): float
{
    return $pedido["quantidade"] * $pedido["preco_unitario"];
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


?>