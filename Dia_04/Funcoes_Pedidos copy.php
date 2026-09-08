<?php
function calcularSubtotal($preco, $quantidade)
{
    return $preco * $quantidade;
}
$subtotal1 = calcularSubtotal(35, 10);
$subtotal2 = calcularSubtotal(50, 20);

echo $subtotal1;

echo "<br>";
function calcularDesconto($subtotal)
{
    if ($subtotal > 1000) {
        return $subtotal * 0.10;
    }

    return 0;
}

$desconto = calcularDesconto(1200);

echo $desconto;
?>