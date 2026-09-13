<?php
// Exercício 1 — Etapas da produção
$etapas = ["Corte", "Costura", "Estampa", "Revisão", "Entrega"];

//Mostre a primeira etapa;
echo "Primeira etapa: $etapas[0]<br>";

//Mostre a última etapa;
echo "Última etapa: $etapas[4]<br>";

//Adicione a etapa "Embalagem";
$etapas[]= "Embalagem";

//Percorra todas as etapas com foreach;
echo "Etapas da produção: <br>";
foreach ($etapas as $etapa) {
    echo $etapa;
    echo"<br>";
}
// Mostre quantas etapas existem usando count.
echo "Quantidade de etapas: ";
echo count($etapas)

?>