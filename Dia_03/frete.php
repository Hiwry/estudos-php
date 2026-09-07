<?php
$pedido = 450.00;

if($pedido > 500){
    echo "Frete gratis";
} elseif($pedido + 20){
    echo "Frete de 20,00";
}
?>