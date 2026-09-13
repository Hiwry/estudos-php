<?php

function calculadoraSubtotal ($preco, $quantidade)
{
    return $preco * $quantidade;
}

$subtotal = calculadoraSubtotal(35, 30);

echo "Subtotal: R$" . $subtotal;

echo "<br>";

function Descontadora($subtotal)
{
    if($subtotal > 1000) {
        return $subtotal * 0.10;
    }

    return 0;
}

$desconto = Descontadora($subtotal);

echo "Desconto: R$" . $desconto;

echo "<br>";

function Resultado($subtotal, $desconto)
    {
        return $subtotal - $desconto;
    }
$final = Resultado($subtotal, $desconto);

echo "Total final: R$" . $final;
?>