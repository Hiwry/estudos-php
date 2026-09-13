<?php
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