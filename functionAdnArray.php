<?php
    /*function nombreFuncion($parametro1, $parametro2) {
        return $resultado;
    }*/
    /*
    function calcularPromedio($calificaciones){
        $suma = 0;
        // Recorrer el arreglo y sumar los valores
        foreach ($calificaciones as $nota) {
            $suma += $nota;
        }
        // Calcular el promedio
        $promedio = $suma / count($calificaciones);
        return $promedio;
    }
    $notas = [10, 9, 8, 7, 6];
    $promedio = calcularPromedio($notas);
    echo "El promedio es: $promedio";
    */

    function calcularPromedio($calificaciones) { // Definición de la función
        return array_sum($calificaciones) / count($calificaciones); // Sumar los valores del arreglo y dividir por la cantidad de elementos
    }
    $notas = [7, 9, 8, 7, 6]; // Arreglo de calificaciones
    $promedio = calcularPromedio($notas); // Llamada a la función con el arreglo de calificaciones
    echo "El promedio es: $promedio"; // Imprime el promedio calculado 
?>