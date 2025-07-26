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
    echo 'Edades menores al promedio:<br>';
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
    function numeroPar($numero){
        // $numero = 21;
        if($numero % 2 == 0){
            echo 'el numero ' . $numero . ' es par';
        } else {
            echo 'el numero ' . $numero . ' es impar';
        }
    }
    numeroPar(0);

    echo '<hr><strong>EJERCIO 7</strong><br>';
    echo '<hr><strong>EJERCIO 9</strong><br>';
    echo '<hr><strong>EJERCIO 9</strong><br>';
    echo '<hr><strong>EJERCIO 10</strong><br>';
    echo '<hr><strong>EJERCIO 11</strong><br>';
    echo '<hr><strong>EJERCIO 12</strong><br>';
    echo '<hr><strong>EJERCIO 13</strong><br>';
    echo '<hr><strong>EJERCIO 14</strong><br>';
    function buscarLetra($palabra){
        return str_contains($palabra, 'a');
    }
    $palabra = 'Jared';
    if(buscarLetra($palabra)){
        echo 'la palabra ' . $palabra . ' tiene a' . '<br>';
    } else{
        echo 'la palabra ' . $palabra . ' no tiene a' . '<br>';
    }
    echo '<hr><strong>EJERCIO 15</strong><br>';
    function numeroCuadrado($numero){
        $resultado = $numero * $numero;
        return $resultado;
    }
    $resultado = numeroCuadrado(5, 5);
    echo $resultado;
    echo '<hr><strong>EJERCIO 16</strong><br>';
    function saludoPersonalizado($nombre){
        $hora= 21;
        if($hora < 12){
            echo 'Buenos dias ';
        } elseif($hora >= 12 && $hora <= 18) {
            echo 'Buenas tardes ';
        } else{
            echo 'Buenas noches ';
        }
        return $nombre;
    }
    $nombre = 'Jared';
    $saludo = saludoPersonalizado($nombre);
    echo $saludo;
    echo '<hr><strong>EJERCIO 17</strong><br>';
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    echo $meses[0] . ' y ' . $meses[11] . '<br>';
    foreach($meses as $mesesAño){
        echo $mesesAño;
    }
    echo '<hr><strong>EJERCIO 18</strong><br>';
    $libro= [
        'titulo' => 'Programacion PHP',
        'autor' => 'UHipocrates',
        'año' => 2025, 
    ];
    echo $libro['titulo'] . $libro['autor'] . '<br>';
    $libro['año'] = 2024;
    foreach($libro as $libronfo){
        echo $libronfo . '<br>';
    }
    echo '<hr><strong>EJERCIO 16</strong><br>';
    $cinepolis = [
        'Pelicula1' => [
            'titulo' => 'Harry Potter',
            'actores' => ['Harry Potter', 'Hermione Granger', 'Ron Weasley' ],
        ],
        'Pelicula2' => [
            'titulo' => 'Harry Potter y el cáliz de fuego',
            'actores' => ['Harry Potter', 'Hermione Granger', 'Ron Weasley' ],
        ],
    ];
    /*echo 'Pelicula: ' . $cinepolis['Pelicula1']['titulo'] . '<br>';
    echo 'Actores: ';
    foreach($cinepolis['Pelicula1']['actores'] as $actores){
        echo '    - ' . $actores . '<br>';
    }*/
    echo 'Cartelera' . '<br>';
    foreach($cinepolis as $cartelera => $datosPelicula){
        echo '- ' . $datosPelicula['titulo'] . '<br>';
        echo '  Actores:';
        foreach ($datosPelicula['actores'] as $actores) {
            echo '    - ' . $actores . '<br>';
        }
    }
    echo '<hr><strong>EJERCIO 17</strong><br>';
    echo '<hr><strong>EJERCIO 18</strong><br>';
?>