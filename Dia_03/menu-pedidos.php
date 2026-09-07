<?php

$opcao = 2;

switch ($opcao) {
    case 1:
        $quantidade = 30;
        $precoUnitario = 40;

        if ($quantidade > 0 && $precoUnitario > 0) {
            $subtotal = $quantidade * $precoUnitario;
            $percentualDesconto = 0;

            if ($subtotal > 1000) {
                $percentualDesconto = 10;
            } else {
                $percentualDesconto = 0;
            }

            $valorDesconto = $subtotal * ($percentualDesconto / 100);
            $total = $subtotal - $valorDesconto;

            echo "Quantidade: " . $quantidade . " peças<br>";
            echo "Preço por peça: R$ " . $precoUnitario . "<br>";
            echo "Subtotal: R$ " . $subtotal . "<br>";
            echo "Desconto: " . $percentualDesconto . "%<br>";
            echo "Valor do desconto: R$ " . $valorDesconto . "<br>";
            echo "Total: R$ " . $total;
        } else {
            echo "A quantidade e o preço devem ser maiores que zero";
        }

        break;

        case 2:
        $statusPagamento = "Pago";
        $quantidade = 30;

        if ($statusPagamento === "Pago" && $quantidade > 0) {
            echo "Pedido liberado para produção";
        } else {
            echo "Pedido bloqueado";
        }

        break;

    case 3:
        echo "Sistema encerrado";
        break;

    default:
        echo "Opção inválida. Escolha 1, 2 ou 3.";
}