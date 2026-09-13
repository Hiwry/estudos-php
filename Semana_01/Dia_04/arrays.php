<?php
/*
$produtos = ["Camiseta", "Calça", "Boné"];

$produtos[] = "Moletom";
$produtos[0] = "Camiseta Polo";
unset($produtos[1]);

echo "$produtos[0]<br>";


$cliente = [
    "nome" => "Escola Saber",
    "telefone" => "(82) 99999-2222",
    "cidade" => "Maceió"
];

 echo $cliente["cidade"];

*/
$produtos = [
    [
        "nome" => "Camiseta",
        "preco" => 35.00
    ],
    [
        "nome" => "Camisa Polo",
        "preco" => 49.90
    ],
    [
        "nome" => "Boné",
        "preco" => 25.00
    ]
];

//echo $produtos[1]["preco"];
$valores = [300, 100, 500, 200];

echo max($valores);
echo min($valores);
?>