<?php
$cliente = "Escola Saber";
$produto = "Camisa Polo";
$quantidade = 30;
$preco = 35.00;
$frete = 20.00;
$subtotal = $preco * $quantidade;
$total = $subtotal + $frete;

echo "Cliente: $cliente<br>";
echo "Produto: $produto<br>"; 
echo "Quantidade: $quantidade<br>";
echo "SubTotal: R$ " . number_format($subtotal, 2, ",", ".") . "<br>";
echo "Frete: R$ " . number_format($frete, 2, ",", ".") . "<br>";
echo "Total do Pedido: R$ " . number_format($total, 2, ",", ".") . "<br>";


?>