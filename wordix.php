<?php

/*
La librería JugarWordix posee la definición de constantes y funciones necesarias
para jugar al Wordix.
Puede ser utilizada por cualquier programador para incluir en sus programas.
*/

/**************************************/
/***** DEFINICION DE CONSTANTES *******/
/**************************************/
const CANT_INTENTOS = 6;

/*
    disponible: letra que aún no fue utilizada para adivinar la palabra
    encontrada: letra descubierta en el lugar que corresponde
    pertenece: letra descubierta, pero corresponde a otro lugar
    descartada: letra descartada, no pertence a la palabra
*/
const ESTADO_LETRA_DISPONIBLE = "disponible";
const ESTADO_LETRA_ENCONTRADA = "encontrada";
const ESTADO_LETRA_DESCARTADA = "descartada";
const ESTADO_LETRA_PERTENECE = "pertenece";

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Solicita que se ingrese un número que esté entre dos números ingresados por parámetro
 * @param int $min
 * @param int $max
 * @return int $numero
 */
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    echo "Ingrese un número entre ".$min. " y " .$max. ": ";
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}

/**
 * Escrbir un texto en color ROJO
 * @param string $texto)
 */
function escribirRojo($texto)
{
    echo "\e[1;37;41m $texto \e[0m";
}

/**
 * Escrbir un texto en color VERDE
 * @param string $texto)
 */
function escribirVerde($texto)
{
    echo "\e[1;37;42m $texto \e[0m";
}

/**
 * Escrbir un texto en color AMARILLO
 * @param string $texto)
 */
function escribirAmarillo($texto)
{
    echo "\e[1;37;43m $texto \e[0m";
}

/**
 * Escrbir un texto en color GRIS
 * @param string $texto)
 */
function escribirGris($texto)
{
    echo "\e[1;34;47m $texto \e[0m";
}

/**
 * Escrbir un texto pantalla.
 * @param string $texto)
 */
function escribirNormal($texto)
{
    echo "\e[0m $texto \e[0m";
}

/**
 * Escribe un texto en pantalla teniendo en cuenta el estado.
 * @param string $texto
 * @param string $estado
 */
function escribirSegunEstado($texto, $estado)
{
    switch ($estado) {
        case ESTADO_LETRA_DISPONIBLE:
            escribirNormal($texto);
            break;
        case ESTADO_LETRA_ENCONTRADA:
            escribirVerde($texto);
            break;
        case ESTADO_LETRA_PERTENECE:
            escribirAmarillo($texto);
            break;
        case ESTADO_LETRA_DESCARTADA:
            escribirRojo($texto);
            break;
        default:
            echo " $texto ";
            break;
    }
}

/**
 * Escribe un mensaje de bienvenida con el nombre del jugador cuando es invocado.
 * @param string $usuario
 */
function escribirMensajeBienvenida($usuario)
{
    echo "***************************************************\n";
    echo "** Hola ";
    escribirAmarillo($usuario);
    echo " Juguemos una PARTIDA de WORDIX! **\n";
    echo "***************************************************\n";
}


/**
 * Verifica que todos los caracteres de una palabra sean letras.
 * @param string $cadena
 * @return boolean $esLetra
 */
function esPalabra($cadena)
{
    //int $cantCaracteres, $i, boolean $esLetra
    $cantCaracteres = strlen($cadena);
    $esLetra = true;
    $i = 0;
    while ($esLetra && $i < $cantCaracteres) {
        $esLetra =  ctype_alpha($cadena[$i]);
        $i++;
    }
    return $esLetra;
}

/**
 * Esta función lee una palabra ingresada.
 * Si tiene más o menos de 5 letras o un número, vuelve a solicitarla.
 * @return string $palabra
 */
function leerPalabra5Letras()
{
    //string $palabra
    echo "Ingrese una palabra de 5 letras: ";
    $palabra = trim(fgets(STDIN));
    $palabra  = strtoupper($palabra);

    while ((strlen($palabra) != 5) || !esPalabra($palabra)) {
        echo "Debe ingresar una palabra de 5 letras:";
        $palabra = strtoupper(trim(fgets(STDIN)));
    }
    return $palabra;
}


/**
 * Inicia una estructura de datos Teclado. La estructura es de tipo: ¿Indexado, asociativo o Multidimensional?
 *@return array
 */
function iniciarTeclado()
{
    //array $teclado (arreglo asociativo, cuyas claves son las letras del alfabeto)
    $teclado = [
        "A" => ESTADO_LETRA_DISPONIBLE, "B" => ESTADO_LETRA_DISPONIBLE, "C" => ESTADO_LETRA_DISPONIBLE, "D" => ESTADO_LETRA_DISPONIBLE, "E" => ESTADO_LETRA_DISPONIBLE,
        "F" => ESTADO_LETRA_DISPONIBLE, "G" => ESTADO_LETRA_DISPONIBLE, "H" => ESTADO_LETRA_DISPONIBLE, "I" => ESTADO_LETRA_DISPONIBLE, "J" => ESTADO_LETRA_DISPONIBLE,
        "K" => ESTADO_LETRA_DISPONIBLE, "L" => ESTADO_LETRA_DISPONIBLE, "M" => ESTADO_LETRA_DISPONIBLE, "N" => ESTADO_LETRA_DISPONIBLE, "Ñ" => ESTADO_LETRA_DISPONIBLE,
        "O" => ESTADO_LETRA_DISPONIBLE, "P" => ESTADO_LETRA_DISPONIBLE, "Q" => ESTADO_LETRA_DISPONIBLE, "R" => ESTADO_LETRA_DISPONIBLE, "S" => ESTADO_LETRA_DISPONIBLE,
        "T" => ESTADO_LETRA_DISPONIBLE, "U" => ESTADO_LETRA_DISPONIBLE, "V" => ESTADO_LETRA_DISPONIBLE, "W" => ESTADO_LETRA_DISPONIBLE, "X" => ESTADO_LETRA_DISPONIBLE,
        "Y" => ESTADO_LETRA_DISPONIBLE, "Z" => ESTADO_LETRA_DISPONIBLE
    ];
    return $teclado;
}

/**
 * Escribe en pantalla el estado del teclado. Acomoda las letras en el orden del teclado QWERTY
 * @param array $teclado
 */
function escribirTeclado($teclado)
{
    //array $ordenTeclado (arreglo indexado con el orden en que se debe escribir el teclado en pantalla)
    //string $letra, $estado
    $ordenTeclado = [
        "salto",
        "Q", "W", "E", "R", "T", "Y", "U", "I", "O", "P", "salto",
        "A", "S", "D", "F", "G", "H", "J", "K", "L", "salto",
        "Z", "X", "C", "V", "B", "N", "M", "salto"
    ];

    foreach ($ordenTeclado as $letra) {
        switch ($letra) {
            case 'salto':
                echo "\n";
                break;
            default:
                $estado = $teclado[$letra];
                escribirSegunEstado($letra, $estado);
                break;
        }
    }
    echo "\n";
};


/**
 * Escribe en pantalla los intentos de Wordix para adivinar la palabra
 * @param array $estruturaIntentosWordix
 */
function imprimirIntentosWordix($estructuraIntentosWordix)
{
    $cantIntentosRealizados = count($estructuraIntentosWordix);
    //$cantIntentosFaltantes = CANT_INTENTOS - $cantIntentosRealizados;

    for ($i = 0; $i < $cantIntentosRealizados; $i++) {
        $estructuraIntento = $estructuraIntentosWordix[$i];
        echo "\n" . ($i + 1) . ")  ";
        foreach ($estructuraIntento as $intentoLetra) {
            escribirSegunEstado($intentoLetra["letra"], $intentoLetra["estado"]);
        }
        echo "\n";
    }

    for ($i = $cantIntentosRealizados; $i < CANT_INTENTOS; $i++) {
        echo "\n" . ($i + 1) . ")  ";
        for ($j = 0; $j < 5; $j++) {
            escribirGris(" ");
        }
        echo "\n";
    }
    //echo "\n" . "Le quedan " . $cantIntentosFaltantes . " Intentos para adivinar la palabra!";
}

/**
 * Dada la palabra wordix a adivinar, la estructura para almacenar la información del intento 
 * y la palabra que intenta adivinar la palabra wordix.
 * devuelve la estructura de intentos Wordix modificada con el intento.
 * @param string $palabraWordix
 * @param array $estruturaIntentosWordix
 * @param string $palabraIntento
 * @return array estructura wordix modificada
 */
function analizarPalabraIntento($palabraWordix, $estruturaIntentosWordix, $palabraIntento)
{
    $cantCaracteres = strlen($palabraIntento);
    $estructuraPalabraIntento = []; /*almacena cada letra de la palabra intento con su estado */
    for ($i = 0; $i < $cantCaracteres; $i++) {
        $letraIntento = $palabraIntento[$i];
        $posicion = strpos($palabraWordix, $letraIntento);
        if ($posicion === false) {
            $estado = ESTADO_LETRA_DESCARTADA;
        } else {
            if ($letraIntento == $palabraWordix[$i]) {
                $estado = ESTADO_LETRA_ENCONTRADA;
            } else {
                $estado = ESTADO_LETRA_PERTENECE;
            }
        }
        array_push($estructuraPalabraIntento, ["letra" => $letraIntento, "estado" => $estado]);
    }

    array_push($estruturaIntentosWordix, $estructuraPalabraIntento);
    return $estruturaIntentosWordix;
}

/**
 * Actualiza el estado de las letras del teclado. 
 * Teniendo en cuenta que una letra sólo puede pasar:
 * de ESTADO_LETRA_DISPONIBLE a ESTADO_LETRA_ENCONTRADA, 
 * de ESTADO_LETRA_DISPONIBLE a ESTADO_LETRA_DESCARTADA, 
 * de ESTADO_LETRA_DISPONIBLE a ESTADO_LETRA_PERTENECE
 * de ESTADO_LETRA_PERTENECE a ESTADO_LETRA_ENCONTRADA
 * @param array $teclado
 * @param array $estructuraPalabraIntento
 * @return array el teclado modificado con los cambios de estados.
 */
function actualizarTeclado($teclado, $estructuraPalabraIntento)
{
    foreach ($estructuraPalabraIntento as $letraIntento) {
        $letra = $letraIntento["letra"];
        $estado = $letraIntento["estado"];
        switch ($teclado[$letra]) {
            case ESTADO_LETRA_DISPONIBLE:
                $teclado[$letra] = $estado;
                break;
            case ESTADO_LETRA_PERTENECE:
                if ($estado == ESTADO_LETRA_ENCONTRADA) {
                    $teclado[$letra] = $estado;
                }
                break;
        }
    }
    return $teclado;
}

/**
 * Determina si se ganó una palabra intento posee todas sus letras "Encontradas".
 * @param array $estructuraPalabraIntento
 * @return bool
 */
function esIntentoGanado($estructuraPalabraIntento)
{
    $cantLetras = count($estructuraPalabraIntento);
    $i = 0;

    while ($i < $cantLetras && $estructuraPalabraIntento[$i]["estado"] == ESTADO_LETRA_ENCONTRADA) {
        $i++;
    }

    if ($i == $cantLetras) {
        $ganado = true;
    } else {
        $ganado = false;
    }

    return $ganado;
}

/**
 * Según la cantidad de intentos realizados, devuelve el correspondiente puntaje
 * @param int $intentos
 * @param string $cadenaPalabra
 * @return int 
 */
function obtenerPuntajeWordix($intentos,$cadenaPalabra) {
    //int $i, $n, $letraEnNumASCII
    if($intentos != 0){
        for($i = 6; $i >= $intentos; $i--){
            $puntaje = 7 - $i;
        }
        for ($n = 0; $n<strlen($cadenaPalabra); $n++){
            $letraEnNumASCII = ord($cadenaPalabra[$n]);
            if ($letraEnNumASCII==78 || $letraEnNumASCII>=80 && $letraEnNumASCII<=84 || $letraEnNumASCII>=86 && $letraEnNumASCII<=90){
                //Letra posterior a M y distinta a a las vocales
                $puntaje = $puntaje + 3;
            } elseif ($letraEnNumASCII==65 || $letraEnNumASCII==69 || $letraEnNumASCII==73 || $letraEnNumASCII==79 || $letraEnNumASCII==85) {
                //Vocal
                $puntaje = $puntaje + 1;
            } else {
                //Letra anterior a M inclusive y distinta a las vocales
                $puntaje = $puntaje + 2;
            }

        }
    } else {
        $puntaje = 0;
    }
    return $puntaje;    
}

/**
 * Dada una palabra para adivinar, juega una partida de wordix intentando que el usuario adivine la palabra.
 * @param string $palabraWordix
 * @param string $nombreUsuario
 * @return array estructura con el resumen de la partida, para poder ser utilizada en estadísticas.
 */
function jugarWordix($palabraWordix, $nombreUsuario)
{
    /*Inicialización*/
    $arregloDeIntentosWordix = [];
    $teclado = iniciarTeclado();
    escribirMensajeBienvenida($nombreUsuario);
    $nroIntento = 1;
    do {

        echo "Comenzar con el Intento " . $nroIntento . ":\n";
        $palabraIntento = leerPalabra5Letras();
        $indiceIntento = $nroIntento - 1;
        $arregloDeIntentosWordix = analizarPalabraIntento($palabraWordix, $arregloDeIntentosWordix, $palabraIntento);
        $teclado = actualizarTeclado($teclado, $arregloDeIntentosWordix[$indiceIntento]);
        /*Mostrar los resultados del análisis: */
        imprimirIntentosWordix($arregloDeIntentosWordix);
        escribirTeclado($teclado);
        /*Determinar si la plabra intento ganó e incrementar la cantidad de intentos */

        $ganoElIntento = esIntentoGanado($arregloDeIntentosWordix[$indiceIntento]);
        $nroIntento++;
    } while ($nroIntento <= CANT_INTENTOS && !$ganoElIntento);


    if ($ganoElIntento) {
        $nroIntento--;
        $puntaje = obtenerPuntajeWordix($nroIntento,$palabraWordix);
        echo "Adivinó la palabra Wordix en el intento " . $nroIntento . "!: " . $palabraIntento . " Obtuvo $puntaje puntos!";
    } else {
        $nroIntento = 0; //reset intento
        $puntaje = 0;
        echo "Seguí Jugando Wordix, la próxima será! ";
    }

    $partida = [
        "palabraWordix" => $palabraWordix,
        "jugador" => $nombreUsuario,
        "intentos" => $nroIntento,
        "puntaje" => $puntaje
    ];

    return $partida;
}

/**
 * Dado un jugador, retorna el índice de su primera partida ganada guardada en el arreglo. Sino retorna -1
 * @param string $usuario
 * @param array $coleccionPartidas
 * @param int $indice
 * @return int $numeroPartida
 */
function primerPartidaGanada ($usuario, $partidasGuardadas, $n) {
    //int $i, $indice
    $indice = -1;
    $i = 0;
    while ($i<$n && ($usuario != $partidasGuardadas[$i]["jugador"] || $partidasGuardadas[$i]["puntaje"] == 0)) {
        $i++;
    }
    if ($i<$n) {
        $indice = $i;
    } 
    return $indice;
}

/**
 * Verifica si la palabra que se ingresa ya existe dentro de la colección de palabras
 * @param array $coleccionPalabras
 * @param string $palabraNueva
 * @return boolean
 */
function existePalabra($coleccionPalabras, $palabraNueva){
    $i = 0;
    $existePalabra = false;
    $indiceMaximo = count($coleccionPalabras) - 1;
    while($i < $indiceMaximo && $coleccionPalabras[$i] != $palabraNueva){
        $i = $i + 1;
     }
     if ($coleccionPalabras[$i] == $palabraNueva){
        $existePalabra = true;
     }
     
     return $existePalabra;
}

/**
 * Verifica si el jugador dado, existe dentro de la coleccion de partidas
 * @param array $arrayJugadores
 * @param string $jugador
 * @return boolean
 */
function existeJugador($arrayJugadores, $jugador){
    $i = 0;
    $existeJugador = false;
    $indiceMaximo = count($arrayJugadores) - 1;
    while($i < $indiceMaximo && $arrayJugadores[$i]["jugador"]!= $jugador){
        $i = $i + 1;
     }
     if ($arrayJugadores[$i]["jugador"] == $jugador){
        $existeJugador = true;
     }
     
     return $existeJugador;
}

/**
 * Verifica si el usuario ya jugó con esa palabra
 * @param string $usuario
 * @param string $palabra
 * @param array $partidas
 */
function elegirOtraPalabra($usuario, $palabra, $partidas, $n){
// string $palabraUtilizada, int $i
    $palabraUtilizada = false;
    $i = 0;
    while ($i<$n && ($usuario != $partidas[$i]["jugador"] || $partidas[$i]["palabraWordix"] != $palabra)) {
        $i++;
    }
    if ($i<$n) {
        $palabraUtilizada = true;
    }
    return $palabraUtilizada;
}



/**
 * Dada una palabra, la agrega a la colección de palabras y retorna la colección actualizada
 * @param array $coleccionPalabras
 * @param string $palabraNueva
 * @return array
 */
function agregarPalabra($coleccionPalabras, $palabraNueva){
    array_push($coleccionPalabras, $palabraNueva);
    return $coleccionPalabras;
}


