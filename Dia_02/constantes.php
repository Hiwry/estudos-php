<?php
const NOME_EMPRESA = "Vestalize";
const TAXA_ENTREGA = 20.00;
const LIMITE_ITENS = 100;

$quantidadeRecebida =(int) "30";
$precoRecebido = (float)"35,00";

$resultado = ($quantidadeRecebida * $precoRecebido) + TAXA_ENTREGA;

echo "Total: R$ " . number_format($resultado, 2, ",", ".");

?>