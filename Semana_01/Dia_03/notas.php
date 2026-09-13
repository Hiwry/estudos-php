<?php
$nota = 6;

echo "Nota: $nota: "; 

if($nota >= 7){
    echo "Aprovado";
} elseif ($nota > 5 && $nota < 7){
    echo "Recuperação";
} else {
    echo "Reprovado";
}


?>
