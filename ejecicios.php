<?php
    echo '<hr><strong>EJERCIO 1</strong><br>';
    function recibeArray($saludos){
         $saludar = [];
         foreach($saludos as $saludo){
            $saludoMayuscula = strtoupper($saludo);
            $saludar []= $saludoMayuscula;
         }
         return $saludar;
    }
    $saludos = ['hola', 'jared'];
    $verSaludo = recibeArray($saludos);
    foreach($verSaludo as $imprimirSaludo){
        echo $imprimirSaludo;
    }

    echo '<hr><strong>EJERCIO 2</strong><br>';

    function recibirArray($numerosP){
        $noPares = [];
        foreach($numerosP as $numero){
            if($numero % 2 == 0){
                $noPares []= $numero;
            }
        }
        return $noPares;
    }
    $numerosP = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    $verNoPares = recibirArray($numerosP);
    foreach($verNoPares as $pares){
        echo $pares . ',';
    }

    echo '<hr><strong>EJERCIO 3</strong><br>';
    function sumaArray($numeros){
        $suma = 0;
        foreach($numeros as $numero){
            if( $numero > 50){
                $suma += $numero;
            }
        }
        return $suma;
    }
    $numeros = [33, 12, 9, 49, 22, 88, 99];
    echo sumaArray($numeros);

    echo '<hr><strong>EJERCIO 4</strong><br>';

    function arrayPorEdades($edadesPromedios){
        $menores = [];
        $promedio = array_sum($edadesPromedios) / count($edadesPromedios);
        foreach($edadesPromedios as $edadPromedio){
            if($edadPromedio < $promedio){
                $menores [] = $edadPromedio;
            }
        }
        return $menores;
        // return array_sum($edadPromedio) / count($edadPromedio);
    }
    $edades=[52, 22, 26, 30, 34, 38, 42, 46, 50];
    $resultado = arrayPorEdades($edades);
    echo "Edades menores al promedio:<br>";
    foreach($resultado as $edadesTotal){
        echo $edadesTotal . '<br>';
    }
    echo '<hr><strong>EJERCIO 5</strong><br>';
    function calculaArea($base, $altura){
            $resultado = $base * $altura;
            echo 'el area es: ' . $resultado;
    }
    calculaArea(5, 8);
    echo '<hr><strong>EJERCIO 6</strong><br>';
    
    echo '<hr><strong>EJERCIO 7</strong><br>';
    echo '<hr><strong>EJERCIO 9</strong><br>';
    echo '<hr><strong>EJERCIO 9</strong><br>';
    echo '<hr><strong>EJERCIO 10</strong><br>';
    echo '<hr><strong>EJERCIO 11</strong><br>';
    echo '<hr><strong>EJERCIO 12</strong><br>';
    echo '<hr><strong>EJERCIO 13</strong><br>';
    echo '<hr><strong>EJERCIO 14</strong><br>';
    echo '<hr><strong>EJERCIO 15</strong><br>';
?>