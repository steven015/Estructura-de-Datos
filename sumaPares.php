<?php

    //Crea un script que sume todos los números pares en un array de numeros enteros

    //Array predefinido
    $arrayNum = [16,3,4,5,10];

    //Inicializo una variable que sumara los valores enteros
    $suma = 0;
    //recorro el arrayNum mediante el método foreach
    foreach($arrayNum as $elementos){
        //Aplico la condicín mediante un if para sumar solo los números pares
        if($elementos % 2 === 0){
            $suma = $suma + $elementos;
        }
    }
    //Imprimo la suma
    echo $suma;

?>