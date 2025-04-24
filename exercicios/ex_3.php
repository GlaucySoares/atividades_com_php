<?php
    /*$nota = ( 5.6, 8, 10, 6, 7.5, 9, 10, 8, 4, 10);

    $media = ($nota)

    if ($media >6) {
        echo "Situação: Aprovado.";
    } elseif ($media>=4) {
        echo "Situação: Recuperação.";
    } elsef { 
        echo "Situação: Reprovado.";
    }*/

    $notas=[5.6, 8, 10, 6, 7.5, 9, 10, 8, 4, 10];
    $soma = $notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4] + $notas[5] + $notas[6] + $notas[7] + $notas[8] + $notas[9];
    $mediaa=$soma/10;

    echo $mediaa . "\n";

    if ($mediaa >6) {
        echo "Situação: Aprovado. \n";
    } elseif ($media>=4) {
        echo "Situação: Recuperação. \n";
    } else { 
        echo "Situação: Reprovado. \n";
    }

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

    echo "A média entre as matérias é de: " . $media;

    if ($media >6) {
        echo "Situação: Aprovado. \n";
    } elseif ($media>=4) {
        echo "Situação: Recuperação. \n";
    } else { 
        echo "Situação: Reprovado. \n";
    }
?>