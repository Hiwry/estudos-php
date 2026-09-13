<?php
$valorMensal = 149.90;
$quantidadeMeses = 3;

$total = $valorMensal * $quantidadeMeses;

echo "Total em tres Meses: R$ " . number_format($total, 2, ",", ".") . "<br>";
?>