<?php 
$ingles=9;
$portugues=8;
$matematica=4;
$historia=1;
$biologia=5;
$quimica=9;
$artes=5;
$fisica=2;
$informatica=1;
$alemao=6;

$media = ($ingles + $portugues + $matematica + $historia + $biologia + $biologia + $quimica + $artes + $fisica + $informatica + $alemao) / 10;

echo "Se o aluno tirar nota maior ou igual a 6 é verdadeiro dizer que ele esta Aprovado, se for menor, é Falso.: " . $media;

if ($media >6) {
    echo " <br>Situação: Aprovado - Verdadeiro. \n";
} else { 
    echo "Situação: Aprovado - Falso. \n";
}

if ($ingles<$portugues) {
    echo "Verdadeiro";
} else {
    echo "falso";
}

?>