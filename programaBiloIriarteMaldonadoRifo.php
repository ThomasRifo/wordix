<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */



/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "PERRO", "MUNDO", "POZOS", "MANGO", "HOJAS",
        "HORAS", "PALOS", "TECLA", "PATOS"
    ];

    return ($coleccionPalabras);
}

/**
 * Obtiene una colección de partidas
 * @return array
 */
function cargarPartidas() {
    $coleccionPartidas = [];

    $coleccionPartidas[0] = [
        "palabraWordix" => "GATOS",
        "jugador" => "jorge",
        "intentos" => 2,
        "puntaje" => 15,
    ];
    $coleccionPartidas[1] = [
        "palabraWordix" => "MANGO",
        "jugador" => "axel",
        "intentos" => 3,
        "puntaje" => 13,
    ];
    $coleccionPartidas[2] = [
        "palabraWordix" => "HOJAS",
        "jugador" => "fausto",
        "intentos" => 4,
        "puntaje" => 12,
    ];
    $coleccionPartidas[3] = [
        "palabraWordix" => "TECLA",
        "jugador" => "axel",
        "intentos" => 6,
        "puntaje" => 0,
    ];
    $coleccionPartidas[4] = [
        "palabraWordix" => "CASAS",
        "jugador" => "nico",
        "intentos" => 5,
        "puntaje" => 12,
    ];
    $coleccionPartidas[5] = [
        "palabraWordix" => "NAVES",
        "jugador" => "jero",
        "intentos" => 4,
        "puntaje" => 14,
    ];
    $coleccionPartidas[6] = [
        "palabraWordix" => "MUNDO",
        "jugador" => "hugo",
        "intentos" => 6,
        "puntaje" => 0,
    ];
    $coleccionPartidas[7] = [
        "palabraWordix" => "RASGO",
        "jugador" => "thomas",
        "intentos" => 3,
        "puntaje" => 14,
    ];
    $coleccionPartidas[8] = [
        "palabraWordix" => "POZOS",
        "jugador" => "fausto",
        "intentos" => 2,
        "puntaje" => 16,
    ];
    $coleccionPartidas[9] = [
        "palabraWordix" => "FUEGO",
        "jugador" => "jorge",
        "intentos" => 6,
        "puntaje" => 8,
    ];


}

/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
            //Jugar con palabra elegida

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2
            //Jugar con palabra aleatoria

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
            //Mostrar una partida

            break;
        case 4:
            //Mostrar la primera partida ganadora (punto 8)

            break;
        case 5:
            //Mostrar resumen de un jugador

            break;
        case 6:
            //Mostrar listado de partidas ordenadas por jugador y palabra

            break;
        case 7:
            //Agregar una palabra

            break;
    }
} while ($opcion !=8);
*/

 //La instrucción de switch corresponde a la estructura de control alternativa if/elseif o SI/OTRO-SI vista en la teoría