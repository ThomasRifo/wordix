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
    $coleccion = [];
$pa1 = ["palabraWordix" => "SUECO", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
$pa2 = ["palabraWordix" => "YUYOS", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
$pa3 = ["palabraWordix" => "HUEVO", "jugador" => "zrack", "intentos" => 3, "puntaje" => 9];
$pa4 = ["palabraWordix" => "TINTO", "jugador" => "cabrito", "intentos" => 4, "puntaje" => 8];
$pa5 = ["palabraWordix" => "RASGO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
$pa6 = ["palabraWordix" => "VERDE", "jugador" => "cabrito", "intentos" => 5, "puntaje" => 7];
$pa7 = ["palabraWordix" => "CASAS", "jugador" => "kleiton", "intentos" => 5, "puntaje" => 7];
$pa8 = ["palabraWordix" => "GOTAS", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
$pa9 = ["palabraWordix" => "ZORRO", "jugador" => "zrack", "intentos" => 4, "puntaje" => 8];
$pa10 = ["palabraWordix" => "GOTAS", "jugador" => "cabrito", "intentos" => 0, "puntaje" => 0];
$pa11 = ["palabraWordix" => "FUEGO", "jugador" => "cabrito", "intentos" => 2, "puntaje" => 10];
$pa12 = ["palabraWordix" => "TINTO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];

array_push($coleccion, $pa1, $pa2, $pa3, $pa4, $pa5, $pa6, $pa7, $pa8, $pa9, $pa10, $pa11, $pa12);
return $coleccion;

    return ($coleccion);
}

/**
 * La función muestra un menú de opciones que el usuario puede seleccionar.
 * @param string $usuario
 * @return int $opcion
 */

function seleccionarOpcion() {
    // int opcion
    echo "\n";
    echo "\n***************************************************\n";
    echo "Bienvenido jugador, seleccione una opción del 1 al 8: \n";
    echo "1: Jugar con palabra elegida. \n";
    echo "2: Jugar con palabra aleatoria. \n";
    echo "3: Mostrar una partida. \n";
    echo "4: Mostrar la primer partida ganada de un jugador. \n";
    echo "5: Mostrar el resumen de un jugador. \n";
    echo "6: Mostrar listado de partidas ordenadas por jugador y palabra. \n";
    echo "7: Agregar una palabra a la colección de Wordix. \n";
    echo "8: Salir de wordix. \n";
    $opcion = solicitarNumeroEntre(1, 8);
    return ($opcion);
}

/**
 * muestra los datos de una partida de wordix
 * @param array $partida
 * @param int $partidaNumero
 * @return void
 */
function mostrarPartida($partida, $partidaNumero){
    echo "\n"; 
    echo "*****************************************\n";
    echo "Partida WORDIX ". $partidaNumero . ": Palabra ". $partida["palabraWordix"]."\n";
    echo "Jugador: ". $partida["jugador"]."\n";
    echo "Puntaje: ". $partida["puntaje"]."\n";
    if($partida["puntaje"]==0){
        echo "intentos: no adivino la palabra\n";
    }else{
        echo "intentos: ". $partida["intentos"]."\n";
    }
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
function validarJugador(){
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

/** Funcion para ordenar alfabéticamente el array por jugador
 * 
 */
function cmp($a, $b)
{
    if ($a["jugador"] == $b["jugador"]) {
        return 0;
    }
    return ($a["jugador"] < $b["jugador"]) ? -1 : 1;
}

/** Funcion para ordenar alfabéticamente el array por palabra
 * 
 */
function cmp2($a, $b)
{
    if ($a["palabraWordix"] == $b["palabraWordix"]) {
        return 0;
    }
    return ($a["palabraWordix"] < $b["palabraWordix"]) ? -1 : 1;
}

/**
 * Dado un array, lo ordena por orden alfabético y muestra el array ordenado
 * @param array $arrayAOrdenar
 */
function ordenarArray($arrayAOrdenar){
    uasort($arrayAOrdenar, 'cmp2');
    uasort($arrayAOrdenar, 'cmp');
    print_r($arrayAOrdenar);
}

/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

/** Declaración de variables:
*string $nombreJugador
*int $numeroDeIngreso
* string $palabraParaJugar
* int $maximoPalabras
* int $minimoPalabras
* int $maximoPartidas
* int $minimoPartidas
* int $indicePartidaGanada
* string $jugadorBuscado
* array arregloPalabras
* array arregloPartidas
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



    do {    
        $opcionElegida = seleccionarOpcion();

     switch ($opcionElegida) {
        case 1: 
            //Jugar con palabra elegida
            do{
                echo "Ingrese su nombre: ";
                $nombreJugador = validarJugador();
            } while ($nombreJugador == "Nombre no valido");
            $numeroDeIngreso = solicitarNumeroEntre($minimoPalabras, $maximoPalabras);
            $palabraParaJugar = $arregloPalabras [($numeroDeIngreso - 1)];
            $partida = jugarWordix($palabraParaJugar, strtolower($nombreJugador));
            $arregloPartidas [($maximoPartidas + 1)] = $partida;
            $maximoPartidas = count($arregloPartidas);
            break;
        case 2: 
            //Jugar con palabra aleatoria. array_rand() obtiene un elemento de un array de forma aleatoria
            do{
                echo "Ingrese su nombre: ";
                $nombreJugador = validarJugador();
            } while ($nombreJugador == "Nombre no valido");
            $palabraParaJugar =  $arregloPalabras[array_rand($arregloPalabras)];
            //funcion parcial para saber si el mismo jugador no jugo la palabra
            $partida = jugarWordix($palabraParaJugar, strtolower($nombreJugador));
            $arregloPartidas [($maximoPartidas + 1)] = $partida;
            $maximoPartidas = count($arregloPartidas);
            break;
        case 3: 
            //Mostrar una partida
            $numeroDeIngreso = solicitarNumeroEntre($minimoPartidas, $maximoPartidas);
            mostrarPartida($arregloPartidas[$numeroDeIngreso], $numeroDeIngreso);

            break;
        case 4:
            //Mostrar la primera partida ganadora de un jugador
            echo "Ingrese el nombre del jugador: ";
            $jugadorBuscado = trim(fgets(STDIN));
            $indicePartidaGanada = primerPartidaGanada (strtolower($jugadorBuscado), $arregloPartidas);
            if ($indicePartidaGanada != -1) {
                mostrarPartida($arregloPartidas[$indicePartidaGanada], $indicePartidaGanada);
            } else {
                echo "El jugador " .$jugadorBuscado. " no ganó ninguna partida o no existe el jugador.";
                }
            break;
        case 5:
            //Mostrar resumen de un jugador
            
            break;
        case 6:
            //Mostrar listado de partidas ordenadas por jugador y palabra
            $partidasOrdenadas = ordenarArray($arregloPartidas);
            break;
        case 7:
            //Agregar una palabra
            $nuevaPalabra = leerPalabra5Letras();
            $arregloPalabras = agregarPalabra($arregloPalabras, $nuevaPalabra);
            $maximoPalabras = count($arregloPalabras);
            echo "\nse agrego la palabra exitosamente!\n ";
            break;
        }
    } while ($opcionElegida !=8);
 //La instrucción de switch corresponde a la estructura de control alternativa if/elseif o SI/OTRO-SI vista en la teoría