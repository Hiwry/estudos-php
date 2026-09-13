<?php
$produtos = [
    ["nome" => "Camiseta", "preco" => 35.00],
    ["nome" => "Camisa Polo", "preco" => 49.90],
    ["nome" => "Boné", "preco" => 25.00],
    ["nome" => "Calça", "preco" => 79.90],
    ["nome" => "Moletom", "preco" => 99.90]
];

foreach ($produtos as $produto) {
    echo "Produto: ";
    echo $produto["nome"] . " - ";
    echo "R$" . $produto["preco"] ;
    echo "<br>";
}
?>