<?php
$cliente = [
    "nome" => "Escola Saber",
    "telefone" => "(82) 99999-2222",
    "cidade" => "Maceió"
];
echo "Nome: ";
echo $cliente["nome"];
echo "<br>";
echo "Telefone: ";
echo $cliente["telefone"];
echo "<br>";
echo "Cidade: ";
echo $cliente["cidade"];
echo "<br>";
echo "<br>";

foreach ($cliente as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}
?>