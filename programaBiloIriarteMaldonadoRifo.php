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
/**
 * retorna el resumen del jugador
 * @param string $usuario
 */
function resumenJugador($usuario, $partidas){
    $arregloResumen = [];
$arregloResumen ["jugador"] = $usuario;
$arregloResumen ["partidas"] = 0;
$arregloResumen ["puntaje"] = 0;
$arregloResumen ["victorias"] = 0;
$arregloResumen ["intento1"] = 0;
$arregloResumen ["intento2"] = 0;
$arregloResumen ["intento3"] = 0;
$arregloResumen ["intento4"] = 0;
$arregloResumen ["intento5"] = 0;
$arregloResumen ["intento6"] = 0;
foreach ($partidas as $indicePartida => $infoPartida) {
    if ($usuario == $infoPartida["jugador"]) {
        $arregloResumen ["partidas"] += 1;
        $arregloResumen["puntaje"] += $infoPartida["puntaje"];
        if ($infoPartida["puntaje"] >0) {
            $arregloResumen["victorias"] += 1;
        }
        switch ($infoPartida["intentos"]) {
            case 1:
                $arregloResumen["intento1"] += 1;
                break;

            case 2:
                $arregloResumen["intento2"] += 1;
                break;
            case 3:
                $arregloResumen["intento3"] += 1;
                break;
            case 4:
                $arregloResumen["intento4"] += 1;
                break;
            case 5:
                $arregloResumen["intento5"] += 1;
                break;
            case 6:
                $arregloResumen["intento6"] += 1;
                break;

        }
    }
}
$porcentaje = $arregloResumen["victorias"]*100 / $arregloResumen["partidas"];

    echo "\n***************************************************\n";
    echo "Jugador: " . $usuario . "\n";
    echo "Partidas: " .$arregloResumen ["partidas"]. "\n";
    echo "Puntaje Total: " .$arregloResumen ["puntaje"]. "\n";
    echo "Victorias: " .$arregloResumen ["victorias"]. "\n";
    echo "Porcentaje Victorias: " .round($porcentaje,2). "%\n";
    echo "Adivinadas: \n";
    echo "      Intento 1: " .$arregloResumen["intento1"]. "\n";
    echo "      Intento 2: " .$arregloResumen["intento2"]. "\n";
    echo "      Intento 3: " .$arregloResumen["intento3"]. "\n";
    echo "      Intento 4: " .$arregloResumen["intento4"]. "\n";
    echo "      Intento 5: " .$arregloResumen["intento5"]. "\n";
    echo "      Intento 6: " .$arregloResumen["intento6"]. "\n";
    echo "***************************************************\n";
}
    
/* ... COMPLETAR ... */
    

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
        $usuario = "0";
    }
    return($usuario);
}

/** Funcion para ordenar alfabéticamente el array por jugador
 * 
 */
function cmp($a, $b)
{
    if ($a["jugador"] == $b["jugador"]) {
        if ($a["palabraWordix"] == $b["palabraWordix"]) {
            return 0;
        }
        return ($a["palabraWordix"] < $b["palabraWordix"]) ? -1 : 1;
    }
    return ($a["jugador"] < $b["jugador"]) ? -1 : 1;
}

/**
 * Dado un array, lo ordena por orden alfabético y muestra el array ordenado
 * @param array $arrayAOrdenar
 */
function ordenarArray($arrayAOrdenar){
    uasort($arrayAOrdenar, 'cmp');
    print_r($arrayAOrdenar);
}

/**
 * valida si el nombre es correcto
 * @param string $usuario
 * @return boolean
 */
function validarNombre($usuario){
    /* boolean $resultado */
    $resultado = false;
    if ($usuario == "0"){
        $resultado = true;
    }
    return($resultado);
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
                $nombreJugador = solicitarJugador();
                $nombreValido = validarNombre($nombreJugador);
                echo "\n";
                if ($nombreValido){
                    echo "*********** \n";
                    echo "El usuario ingresado fue incorrecto! \n";
                    echo "Recuerda que no puede contener \n";
                    echo "numeros en el primer digito... \n";
                    echo "*********** \n";
                }
            } while ($nombreValido);

            do{
                $numeroDeIngreso = solicitarNumeroEntre($minimoPalabras, $maximoPalabras);
                $palabraParaJugar = $arregloPalabras[($numeroDeIngreso - 1)];
                $palabraUtilizada = elegirOtraPalabra($nombreJugador, $palabraParaJugar, $arregloPartidas);
                if($palabraUtilizada){
                    echo "\nUsted ya jugó con la palabra " .$palabraParaJugar. ". Por favor, elija otra.\n";
                }
            } while($palabraUtilizada);
            $partida = jugarWordix($palabraParaJugar, $nombreJugador);
            $arregloPartidas [($maximoPartidas)] = $partida;
            $maximoPartidas = count($arregloPartidas);

            break;
        case 2: 
            //Jugar con palabra aleatoria. array_rand() obtiene un elemento de un array de forma aleatoria
            do{
                echo "Ingrese su nombre: ";
                $nombreJugador = solicitarJugador();
            } while ($nombreJugador == "Nombre no valido");
            $palabraParaJugar =  $arregloPalabras[array_rand($arregloPalabras)];
            $palabraUtilizada = elegirOtraPalabra($nombreJugador, $palabraParaJugar, $arregloPartidas);
            do{
                $palabraParaJugar =  $arregloPalabras[array_rand($arregloPalabras)];
                $palabraUtilizada = elegirOtraPalabra($nombreJugador, $palabraParaJugar, $arregloPartidas);
                if($palabraUtilizada){
                    $palabraParaJugar =  $arregloPalabras[array_rand($arregloPalabras)];
                }
            } while($palabraUtilizada);
            $partida = jugarWordix($palabraParaJugar, $nombreJugador);
            $arregloPartidas [($maximoPartidas)] = $partida;
            $maximoPartidas = count($arregloPartidas);
            break;
        case 3: 
            //Mostrar una partida
            $numeroDeIngreso = solicitarNumeroEntre($minimoPartidas, $maximoPartidas);
            $indicePartida = $numeroDeIngreso - 1;
            mostrarPartida($arregloPartidas[$indicePartida], $numeroDeIngreso);

            break;
        case 4:
            //Mostrar la primera partida ganadora de un jugador
            echo "Ingrese el nombre del jugador: ";
            $jugadorBuscado = trim(fgets(STDIN));
            $indicePartidaGanada = primerPartidaGanada (strtolower($jugadorBuscado), $arregloPartidas);
            $existeJugador = existeJugador($arregloPartidas, $jugadorBuscado);

            if ($indicePartidaGanada != -1) {
                mostrarPartida($arregloPartidas[$indicePartidaGanada], $indicePartidaGanada);
            }
            if(!$existeJugador){
                echo "\nEl jugador " .$jugadorBuscado. " no existe.\n";
            }
            if($indicePartidaGanada == -1 && $existeJugador) {
                echo "\nEl jugador " .$jugadorBuscado. " no ganó ninguna partida.\n";
                }
            break;
        case 5:
            //Mostrar resumen de un jugador
            echo "Ingrese el nombre del jugador: ";
            $nombreJugador = trim(fgets(STDIN));
            $existeJugador = existeJugador($arregloPartidas, $nombreJugador);
            if ($existeJugador) {
            resumenJugador($nombreJugador, $arregloPartidas);
            } else {
                echo "\nNo existe el jugador\n";
            }
            break;
        case 6:
            //Mostrar listado de partidas ordenadas por jugador y palabra
            $partidasOrdenadas = ordenarArray($arregloPartidas);
            break;
        case 7:
            //Agregar una palabra
            $nuevaPalabra = leerPalabra5Letras();
            $existePalabra = existePalabra($arregloPalabras, $nuevaPalabra);
            while($existePalabra){
                echo "\nLa palabra ya existe! Por favor ingrese otra.\n";
                $nuevaPalabra = leerPalabra5Letras();
                $existePalabra = existePalabra($arregloPalabras, $nuevaPalabra);
            }
            $arregloPalabras = agregarPalabra($arregloPalabras, $nuevaPalabra);
            $maximoPalabras = count($arregloPalabras);
            echo "\nse agrego la palabra exitosamente!\n ";
            break;
        }
    } while ($opcionElegida !=8);
 //La instrucción de switch corresponde a la estructura de control alternativa if/elseif o SI/OTRO-SI vista en la teoría