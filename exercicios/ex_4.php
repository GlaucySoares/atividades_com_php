<?php 
$ingles=9;
$portugues=8;
$matematica=4.5;
$historia=10;
$biologia=7;
$quimica=9;
$artes=8.5;
$fisica=7.5;
$informatica=10;
$alemao=9.6;

$media = ($ingles + $portugues + $matematica + $historia + $biologia + $biologia + $quimica + $artes + $fisica + $informatica + $alemao) / 10;

echo "Se o aluno tirar nota maior ou igual a 6 ele esta aprovado: " . $media;

if ($media >6) {
    echo " <br>Situação: Aprovado - Verdadeiro. \n";
} elseif ($media>=4) {
    echo "Situação: Recuperação. \n";
} else { 
    echo "Situação: Reprovado. \n";
}

?>