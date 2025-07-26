<?php

$peliculas = array(
    "Pelicula1" => array(
        "titulo" => "Forrest Gump",
        "director" => "Robert Zemeckis",
        "actores" => array("Tom Hanks", "Robin Wright", "Gary Sinise")
    ),
    "Pelicula2" => array(
        "titulo" => "El Padrino",
        "director" => "Francis Ford Coppola",
        "actores" => array("Marlon Brando", "Al Pacino", "James Caan")
    ),
    "Pelicula3" => array(
        "titulo" => "La La Land",
        "director" => "Damien Chazelle",
        "actores" => array("Ryan Gosling", "Emma Stone", "John Legend")
    )
);

// Acceder a la información de una película específica
echo "Información de " . $peliculas["Pelicula2"]["titulo"] . ":\n";
echo "  Director: " . $peliculas["Pelicula2"]["director"] . "\n";
echo "  Actores:\n";
foreach ($peliculas["Pelicula2"]["actores"] as $actor) {
    echo "    - " . $actor . "\n";
}

// Iterar sobre todas las películas y sus actores
echo "\nInformación de todas las películas:\n";
foreach ($peliculas as $nombrePelicula => $datosPelicula) {
    echo "- " . $datosPelicula["titulo"] . " (dirigida por " . $datosPelicula["director"] . "):\n";
    echo "  Actores:\n";
    foreach ($datosPelicula["actores"] as $actor) {
        echo "    - " . $actor . "\n";
    }
}

?>