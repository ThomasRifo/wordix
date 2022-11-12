<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* Iriarte , Jeronimo . FAI-3857 . TUDW . iriartejeronimo7@gmail.com . JeronimoIriarte */
/* ... COMPLETAR ... */



/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array $coleccionPalabras
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
    echo "Bienvenido ".$usuario. ", seleccione una opción del 1 al 8: \n";
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
 * muestra los datos de una partida de wordix
 * @param int $numDePartida
 * @return void
 */
function mostrarPartida($numDePartida){
    //int $i
    $partidasGuardadas = cargarPartidas();
    $i = $numDePartida - 1;
    echo "\n"; 
    echo "*****************************************\n";
    echo "Partida WORDIX ". $numDePartida . ": Palabra ". $partidasGuardadas[$i]["palabraWordix"]."\n";
    echo "Jugador: ". $partidasGuardadas[$i]["jugador"]."\n";
    echo "Puntaje: ". $partidasGuardadas[$i]["puntaje"]."\n";
    echo "intento: ". $partidasGuardadas[$i]["intentos"]."\n";
    echo "*****************************************\n";
    echo "\n";
    }

/**
 * retorna el resumen del jugador
 * @param string $nombreDelJugador
 * @return array
 */
function resumenDelugador($nombreDelJugador, $coleccionPartidas){
    



    
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
$maximoPalabras = 23;    //REVISAR
$maximoPartidas = 9;     //REVISAR
$minimoPartidas = 0;
$minimoPalabras = 0;
$opcionElegida = 0;   //No se ejecutan en el switch

$indicePartidaGanada = 0;

//Proceso:
//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);

echo "Ingrese su nombre: ";
$nombreJugador = trim(fgets(STDIN));

    do {    
        $opcionElegida = seleccionarOpcion($nombreJugador);

     switch ($opcionElegida) {
        case 1: 
            //Jugar con palabra elegida
            $numeroDeIngreso = solicitarNumeroEntre($minimoPalabras, $maximoPalabras);
            $palabraParaJugar = $arregloPalabras [$numeroDeIngreso];
            $partida = jugarWordix($palabraParaJugar, strtolower($nombreJugador));

            break;
        case 2: 
            //Jugar con palabra aleatoria. array_rand() obtiene un elemento de un array de forma aleatoria
            $palabraParaJugar =  $arregloPalabras[array_rand($coleccionPalabras)];
            $partida = jugarWordix($palabraParaJugar, strtolower($nombreJugador));

            break;
        case 3: 
            //Mostrar una partida
            $numeroDeIngreso = solicitarNumeroEntre($minimoPartidas, $maximoPartidas);
            mostrarPartida($numeroDeIngreso);

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

            break;
        case 7:
            //Agregar una palabra
            leerPalabra5Letras();
            break;
        }
    } while ($opcionElegida !=8);
 //La instrucción de switch corresponde a la estructura de control alternativa if/elseif o SI/OTRO-SI vista en la teoría