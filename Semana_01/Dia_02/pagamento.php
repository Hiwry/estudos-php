<?php
$statusPagamento = "Pendente";
$quantidadeItens = 30;

$podeProduzir =
    $statusPagamento === "Pago" &&
    $quantidadeItens > 0;

var_dump($podeProduzir);
?>