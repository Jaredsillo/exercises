<?php
    function calcularPromedio($calificaciones) { // Definición de la función
        return array_sum($calificaciones) / count($calificaciones); // Sumar los valores del arreglo y dividir por la cantidad de elementos
    }
    $notas = [7, 9, 8, 7, 6]; // Arreglo de calificaciones
    $promedio = calcularPromedio($notas); // Llamada a la función con el arreglo de calificaciones
    echo "El promedio es: $promedio" . '<br>'; // Imprime el promedio calculado 

    //ejercicio 1
    function mostrarNombres($nombres){
        foreach($nombres as $nombre){
            echo $nombre . '<br>';
        }
    }
    $listaNombres = ['Jared', 'Juan', 'Miguel', 'Pedro'];
    mostrarNombres($listaNombres);
    
    //ejercicio 2
    function agregarIVA($precios){
        $conIVA = [];
        foreach($precios as $precio){
            $precioConIva = $precio * 1.16; 
            $conIVA[] = $precioConIva;
        }
        return $conIVA;
    }
    $precios = [550, 890, 155];
    $preciosConIva = agregarIVA($precios);
    
    foreach($preciosConIva as $precio){
        echo $precio . '<br>';
    }

?>