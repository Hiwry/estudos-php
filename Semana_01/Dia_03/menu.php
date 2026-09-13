<?php
$menu = 2;

switch ($menu){
    case 1:
        echo "Cadastrar Cliente";
        break;

    case 2:
        echo "Listar pedidos";
        break;

    case 3:
        echo "Sair";
        break;

    default:
        echo "Opção inválida";
}

?>