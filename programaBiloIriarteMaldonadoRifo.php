<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* Iriarte , Jeronimo . FAI-3857 . TUDW . iriartejeronimo7@gmail.com . JeronimoIriarte */
/* Biló , Fausto . FAI-3616 . TUDW . fausto.bilo@est.fi.uncoma.edu.ar . IgnacioCooper47 */
/* Maldonado, Axel Nicolás. FAI-3196. TUDW. axel.maldonado@est.fi.uncoma.edu.ar . axelnicomaldonado */
/* Rifo, Thomas Maximiliano. FAI-4296. TUDW. thomas.rifo@fi.uncoma.edu.ar. ThomasRifo */



/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array $coleccionPalabras
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [];
    $coleccionPalabras[0] = "MUJER";
    $coleccionPalabras[1] = "QUESO";
    $coleccionPalabras[2] = "FUEGO";
    $coleccionPalabras[3] = "CASAS";
    $coleccionPalabras[4] = "RASGO";
    $coleccionPalabras[5] = "GATOS";
    $coleccionPalabras[6] = "GOTAS";
    $coleccionPalabras[7] = "HUEVO";
    $coleccionPalabras[8] = "TINTO";
    $coleccionPalabras[9] = "NAVES";
    $coleccionPalabras[10] = "VERDE";
    $coleccionPalabras[11] = "MELON";
    $coleccionPalabras[12] = "YUYOS";
    $coleccionPalabras[13] = "PIANO";
    $coleccionPalabras[14] = "PISOS";
    $coleccionPalabras[15] = "PERRO";
    $coleccionPalabras[16] = "MUNDO";
    $coleccionPalabras[17] = "POZOS";
    $coleccionPalabras[18] = "MANGO";
    $coleccionPalabras[19] = "HOJAS";
    $coleccionPalabras[20] = "HORAS";
    $coleccionPalabras[21] = "PALOS";
    $coleccionPalabras[22] = "TECLA";
    $coleccionPalabras[23] = "PATOS";

    return ($coleccionPalabras);
}

/**
 * Obtiene una colección de partidas
 * @return array $coleccionPartidas
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

    return ($coleccionPartidas);
}

/**
 * La función muestra un menú de opciones que el usuario puede seleccionar.
 * @param string $usuario
 * @return int $opcion
 */

function seleccionarOpcion($usuario) {
    echo "\n";
    echo "\n***************************************************\n";
    echo "Bienvenido/a ".$usuario. ", seleccione una opción del 1 al 8: \n";
    echo "1: Jugar con palabra elegida. \n";
    echo "2: Jugar con palabra aleatoria. \n";
    echo "3: Mostrar una partida. \n";
    echo "4: Mostrar la primer partida ganada de un jugador. \n";
    echo "5: Mostrar el resumen de un jugador. \n";
    echo "6: Mostrar listado de partidas ordenadas por jugador y palabra. \n";
    echo "7: Agregar una palabra a la colección de Wordix. \n";
    echo "8: Salir de wordix. \n";
    echo "Escriba el número de opción: ";
    $opcion = trim(fgets(STDIN));
    if ($opcion > 8 || $opcion <=0) {
        do {
            echo "Por favor, seleccione una opción válida: ";
            $opcion = trim(fgets(STDIN));
        } while ($opcion>8 || $opcion<=0);
        
    }
    return ($opcion);
}

/**
 * Le pide al usuario que ingrese una palabra de 5 letras
 * y retorna la palabra
 * @return string
 */
function pidePalabra(){
    /* string $palabra */
    /* int $n */
    $palabra = trim(fgets(STDIN));
    $n = strlen($palabra);
    if ($n != 5){
        $palabra = "error";
    }
    return($palabra);
}

/**
 * muestra los datos de una partida de wordix
 * @param int $partida
 * @return void
 */
function mostrarPartida($partida){
    //int $i
    $i = $partida;
    echo "\n"; 
    echo "*****************************************\n";
    echo "Partida WORDIX ". $i . ": Palabra ". $partida["palabraWordix"]."\n";
    echo "Jugador: ". $partida["jugador"]."\n";
    echo "Puntaje: ". $partida["puntaje"]."\n";
    echo "intento: ". $partida["intentos"]."\n";
    echo "*****************************************\n";
    echo "\n";
    }

/**
 * retorna el resumen del jugador
 * @param string $nombreDelJugador
 * @return array
 */
function resumenDelugador($nombreDelJugador, $coleccionPartidas){
    
/* ... COMPLETAR ... */
    
}

/**
 * Solicita un nombre al usuario y lo retorna en minusculas,
 * se asegura que el nombre comience con una letra.
 * @return string
 */
function solicitarJugador(){
    /* string $usuario */
    /* int $resultado */
    $usuario = trim(fgets(STDIN));
    /* Aca se analiza si el primer caracter del string es un numero */
    if (strncmp ($usuario, "1", 1) === 0){
        $resultado = 1;
    } elseif (strncmp ($usuario, "2", 1) === 0){
        $resultado = 1;
    } elseif (strncmp ($usuario, "3", 1) === 0){
        $resultado = 1;
    } elseif (strncmp ($usuario, "4", 1) === 0){
        $resultado = 1;
    } elseif (strncmp ($usuario, "5", 1) === 0){
        $resultado = 1;
    } elseif (strncmp ($usuario, "6", 1) === 0){
        $resultado = 1;
    } elseif (strncmp ($usuario, "7", 1) === 0){
        $resultado = 1;
    } elseif (strncmp ($usuario, "8", 1) === 0){
        $resultado = 1;
    } elseif (strncmp ($usuario, "9", 1) === 0){
        $resultado = 1;
    } elseif (strncmp ($usuario, "0", 1) === 0){
        $resultado = 1;
    } else {
        $resultado = 0;
    }
    if ($resultado == 0){
        $usuario = strtolower($usuario);
    } elseif ($resultado == 1){
        $usuario = "Nombre no valido";
    }
    return($usuario);
}


/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

/** Declaración de variables:
* @param string $nombreJugador
* @param int $numeroDeIngreso
* @param string $palabraParaJugar
* @param int $maximoPalabras
* @param int $minimoPalabras
* @param int $maximoPartidas
* @param int $minimoPartidas
* @param int $indicePartidaGanada
* @param string $jugadorBuscado
* @param array arregloPalabras
* @param array arregloPartidas
*/
 //Inicialización de variables: 
$arregloPalabras = cargarColeccionPalabras();
$arregloPartidas = cargarPartidas();
$maximoPalabras = count($arregloPalabras);
$maximoPartidas = count($arregloPartidas);     //REVISAR
$minimoPartidas = 1;
$minimoPalabras = 1;
$opcionElegida = 0;

$indicePartidaGanada = 0;

//Proceso:
//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);

do{
    echo "Ingrese su nombre: ";
    $nombreJugador = solicitarJugador();
} while ($nombreJugador == "Nombre no valido");
    do {    
        $opcionElegida = seleccionarOpcion($nombreJugador);

     switch ($opcionElegida) {
        case 1: 
            //Jugar con palabra elegida
            $numeroDeIngreso = solicitarNumeroEntre($minimoPalabras, $maximoPalabras);
            $palabraParaJugar = $arregloPalabras [($numeroDeIngreso - 1)];
            $partida = jugarWordix($palabraParaJugar, strtolower($nombreJugador));
            $arregloPartidas [($maximoPartidas + 1)] = $partida;
            $maximoPartidas = count($arregloPartidas);
            break;
        case 2: 
            //Jugar con palabra aleatoria. array_rand() obtiene un elemento de un array de forma aleatoria
            $palabraParaJugar =  $arregloPalabras[array_rand($arregloPalabras)];
            $partida = jugarWordix($palabraParaJugar, strtolower($nombreJugador));
            $arregloPartidas [($maximoPartidas + 1)] = $partida;
            $maximoPartidas = count($arregloPartidas);
            break;
        case 3: 
            //Mostrar una partida
            $numeroDeIngreso = solicitarNumeroEntre($minimoPartidas, $maximoPartidas);
            mostrarPartida($arregloPartidas[$numeroDeIngreso]);

            break;
        case 4:
            //Mostrar la primera partida ganadora de un jugador
            echo "Ingrese el nombre del jugador: ";
            $jugadorBuscado = trim(fgets(STDIN));
            $indicePartidaGanada = primerPartidaGanada (strtolower($jugadorBuscado), $arregloPartidas);
            echo "La primer partida ganada por " .$jugadorBuscado. " se encuentra en el índice ".$indicePartidaGanada;

            break;
        case 5:
            //Mostrar resumen de un jugador
            
            break;
        case 6:
            //Mostrar listado de partidas ordenadas por jugador y palabra
            $arregloPartidas = ordenarArray($arregloPartidas);
            break;
        case 7:
            //Agregar una palabra
            $nuevaPalabra = leerPalabra5Letras();
            $arregloPalabras = agregarPalabra($arregloPalabras, $nuevaPalabra);
            $maximoPalabras = count($arregloPalabras) - 1;
            break;
        }
    } while ($opcionElegida !=8);
 //La instrucción de switch corresponde a la estructura de control alternativa if/elseif o SI/OTRO-SI vista en la teoría