<?php
    // ejercicio 1
    function mostrarEdad($edad){
        echo 'Tienes ' . $edad . ' años' .  '<br>';
    }
    mostrarEdad(20);

    // ejercicio 2
    function bienvenido($usuario = 'Jared'){
        echo 'Bienvenido ' . $usuario . '<br>';
    }
    bienvenido();

    // ejercicio 3
    function incrementarPorValor($numero){
        $numero += 10;
    }
    $numeroValor = 99;
    incrementarPorValor($numeroValor);
    echo $numeroValor . '<br>';

    // ejemplo 4
    function duplicarReferencia(& $num){
        $num *= 2;
    }
    $numeroMultiplicar = 50;
    duplicarReferencia($numeroMultiplicar);
    echo 'el resultsado es: ' . $numeroMultiplicar . '<br>';

    //ejercicio 5 
    function areaRectangulo($base, $altura){
        return $base * $altura;
    }
    $resultado = areaRectangulo(10, 15);
    echo 'el area es de: ' . $resultado . '<br>';

    // ejercicio 6
    function mostrarSaludo($persona){
        echo 'Hola ' . $persona;
    }
    mostrarSaludo('Mundo');
?>