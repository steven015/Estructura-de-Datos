<?php

    //Escribe un programa que tome un array de números y devuelva
    //una lista que contenga los mismos elementos en orden inverso

    //Declaramos el array y lo inicializamos con los datos
    $arrayNum = [2, 4, 6, 8, 10];
    //Mostramos en la consola el primer orden de los elementos del arrayNum
    print_r($arrayNum);
    //Utilizamos el método array_reverse para invertir el orden
    $invertida = array_reverse($arrayNum);
    //Mostramos en la consola el arrayNum invetido 
    print_r($invertida);
    
?>