<?php
                            
$história_um=10;
$historia_dois=5;

$media = ($história_um + $historia_dois) / 2;

if ($media>=9.0 && $media<=10) {
    echo "Conceito A";
} elseif ($media>=7.5 && $media<9.0) {
    echo "Conceito B";
} elseif ($media>=6.0 && $media<7.5) {
    echo "Conceito C";
} elseif ($media>=4.0 && $media<6.0) {
    echo "Conceito D";
} else {
    echo "Conceito E";   
} 

if ($media>=6.0 && $media<=10) {
    echo "<br>Aprovado";
} else {
    echo "<br>Reprovado";
}

?>