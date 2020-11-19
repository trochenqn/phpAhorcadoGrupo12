<?php
/******************************************
*Completar:
* ANGEL ADRIAN MELILLAN - FAI-3139
* JOSE LUIS TROCHE - 108488
******************************************/

/**
* genera un arreglo de palabras para jugar
* @return array
*/
function cargarPalabras(){
  $coleccionPalabras = array();
  $coleccionPalabras[0]= array("palabra"=> "papa" , "pista" => "se cultiva bajo tierra", "puntosPalabra"=>5);
  $coleccionPalabras[1]= array("palabra"=> "hepatitis" , "pista" => "enfermedad que inflama el higado", "puntosPalabra"=> 8);
  $coleccionPalabras[2]= array("palabra"=> "volkswagen" , "pista" => "marca de vehiculo", "puntosPalabra"=> 10);
  $coleccionPalabras[3]= array("palabra"=> "rock" , "pista" => "genero musical", "puntosPalabra"=> 4);
  $coleccionPalabras[4]= array("palabra"=> "avioneta" , "pista" => "se encuentra en un hangar", "puntosPalabra"=> 7);
  $coleccionPalabras[5]= array("palabra"=> "minotauro" , "pista" => "bestia de la mitologia griega", "puntosPalabra"=> 8);
  $coleccionPalabras[6]= array("palabra"=> "leon" , "pista" => "rey de la selva", "puntosPalabra"=> 6);
  $coleccionPalabras[7]= array("palabra"=> "netflix" , "pista" => "plataforma de entretenimiento online", "puntosPalabra"=> 7);
  /*>>> Agregar al menos 4 palabras más <<<*/
  return $coleccionPalabras;
}
/**
 * genera un arreglo de letras para jugar 
 * @return array
 */
function cargarLetras(){
    $coleccionLetras = array();
    $coleccionLetras [0] = array("letra" => "l", "descubierta" => true);
    $coleccionLetras [1] = array("letra" => "e", "descubierta" => true);
    $coleccionLetras [2] = array("letra" => "o", "descubierta" => true);
    $coleccionLetras [3] = array("letra" => "n", "descubierta" => true);
    return $coleccionLetras;
}
/**
 * determina los puntos que ganó el jugador
 * @return array
* /*>>> completar comentario <<<*/
function cargarJuegos(){
	$coleccionJuegos = array();
	$coleccionJuegos[0] = array("puntos"=> 0, "indicePalabra" => 1);
	$coleccionJuegos[1] = array("puntos"=> 10,"indicePalabra" => 2);
    $coleccionJuegos[2] = array("puntos"=> 0, "indicePalabra" => 1);
    $coleccionJuegos[3] = array("puntos"=> 8, "indicePalabra" => 0);
    $coleccionJuegos[4] = array("puntos"=> 5,"indicePalabra" => 7);
    $coleccionJuegos[5] = array("puntos"=> 8, "indicePalabra" => 5);
    $coleccionJuegos[6] = array("puntos"=> 10, "indicePalabra" => 6);
    /*>>> Agregar al menos 3 juegos realizados más <<<*/ 
    return $coleccionJuegos;
}
/**
* a partir de la palabra genera un arreglo para determinar si sus letras fueron o no descubiertas
* @param string $palabra
* @return array
*/
function dividirPalabraEnLetras($palabra){
    /*>>> Completar para generar la estructura de datos b) indicada en el enunciado. 
          recuerde que los string pueden ser recorridos como los arreglos.  <<<*/
     //Variables internas: array $coleccionLetras
    //Variables internas: int $i
    $coleccionLetras = array();
    for($i = 0; $i < strlen($palabra); $i++){
        $coleccionLetras[$i] = array("letra" => $palabra[$i], "descubierta" => false);
    }
//print_r($coleccionLetras);
return $coleccioneLetras;
}
/**
* muestra y obtiene una opcion de menú ***válida***
* @return int
*/
function seleccionarOpcion(){
    echo "--------------------------------------------------------------\n";
    echo "\n ( 1 ) Jugar con una palabra aleatoria"; 
    echo "\n ( 2 ) Jugar con una palabra elegida";
    echo " \n ( 3 ) Agregar una palabra al listado ";
    echo " \n ( 4 ) Mostrar la información completa de un número de juego  ";
    echo "\n ( 5 ) Mostrar la información completa del primer juego con más puntaje  ";
    echo "\n ( 6 ) Mostrar la información completa del primer juego que supere un puntaje indicado por el usuario  ";
    echo "\n ( 7 ) Mostrar la lista de palabras ordenada por orden alfabético  ";
    echo "\n ( 8 ) Salir  ";
    do{
        echo " \n Ingrese una opcion valida: ";
        $opcion = trim(fgets(STDIN));
        }while (($opcion<1) || ($opcion>8));
    /*>>> Además controlar que la opción elegida es válida. Puede que el usuario se equivoque al elegir una opción <<<*/
    echo "--------------------------------------------------------------\n";
    return $opcion;
}

/**
* Determina si una palabra existe en el arreglo de palabras
* @param array $coleccionPalabras
* @param string $palabra
* @return boolean
*/
function existePalabra($coleccionPalabras,$palabra){
    $i=0;
    $cantPal = count($coleccionPalabras);
    $existe = false;
    while($i<$cantPal && !$existe){
        $existe = $coleccionPalabras[$i]["palabra"] == $palabra;
        $i++;
    }
    
    return $existe;
} 

/**
* Determina si una letra existe en el arreglo de letras
* @param array $coleccionLetras
* @param string $letra
* @return boolean
*/
function existeLetra($coleccionLetras,$letra){
    // Variable interna: boolean $encontrado
    $encontrado = false; 
    foreach ($coleccionLetras as $indiceExisteLetras => $valorExisteLetras) {
        if ($valueExisteLetras["letra"] == $letra);
        $encontrado = true;
    }
    return $encontrado;
}

/**
* Solicita los datos correspondientes a un elemento de la coleccion de palabras: palabra, pista y puntaje. 
* Internamente la función también verifica que la palabra ingresada por el usuario no exista en la colección de palabras.
* @param array $coleccionPalabras
* @return array  colección de palabras modificada con la nueva palabra.
*/
/*>>> Completar la interfaz y cuerpo de la función. Debe respetar la documentación <<<*/
function noExiste($coleccionPalabras){
    // Variable interna: strin $palabra, $pista
    // Variable interna: int $contador, $j, $puntosNoExiste 
    // Varibale interna: boolean $noExiste 
    $j = 0;
    $noExiste = false;
    $contador = count($coleccionPalabras);
    echo "Ingrese una palabra: ";
    $palabraNoExiste = trim(fgets(STDIN));
    while ($j < $contador && !$noExiste) {
        if (($coleccionPalabras [$j]["palabra"]<>$palabraNoExiste)){
            $coleccionPalabras[$j] = array ("palabra"=> $palabraNoExiste);
            $noExiste = true;
        }else{
          echo "La palabra ingresada ya existe  ";
          }
        }
        echo "Ingrese pista:  ";
        $pistaNoExiste = trim(fgets(STDIN));
        echo "Ingrese los puntos:  ";
        $puntosNoExiste = trim(fgets(STDIN));
        $coleccionPalabras[$i]= array ("pista" => $pistaNoExiste, "puntosPalabra" => $puntosNoExiste);
   
    return $coleccionPalabras;
  }


/**
* Obtener indice aleatorio
* /*>>> Completar documentacion <<<*/
function indiceAleatorioEntre($min,$max){
    $i = rand($min,$max); // la funcion "rand" se encarga de dar un numero entero aleatorio. /*>>> documente qué hace la función rand según el manual php.net en internet <<<*/
    return $i;
}

/**
* solicitar un valor entre min y max
* @param int $min
* @param int $max
* @return int
*/
function solicitarIndiceEntre($min,$max){ 
    do{
        echo "Seleccione un valor entre $min y $max: ";
        $i = trim(fgets(STDIN));
    }while(! ($i >= $min && $i <= $max));
    return $i;
}

/**
* Determinar si la palabra fue descubierta, es decir, todas las letras fueron descubiertas
* @param array $coleccionLetras
* @return boolean
*/
function palabraDescubierta($coleccionLetras){
  //Variable interna: int $numero1, $numero2
  //Variable interna: boolean $auxiliar
    $auxiliar = false;
    $numero1 = count($coleccionLetras);
    $numero2 = 0;
    foreach($coleccionLetras as $indice => $valor){
        if($valor["descubierta"] == !($auxiliar)){
            $numero2 = $numero2 + 1;  // Se incrementa el valor en caso de que descubierta sea verdadero.
        }
    }
     if($numero2 == $numero1){ // Al iniciar se le asigna a $numero1 el valor de la función count en el arreglo $coleccionPalabras..
                                                    //.. por lo tanto, si $numero2 y $numero1 son iguales, significa que la palabra se a descubierto!
         $auxiliar = true;
     }else{
        $auxiliar = false; // En el caso que $numero2 y $numero1 sean desiguales, eso significa que la palabra no ha sido descubierta.
     }
    return $auxiliar;
 }

/**
 * Solicitar una letra para completar la palabra del juego.
* @return string 
* /*>>> Completar documentacion <<<*/

function solicitarLetra(){
    $letraCorrecta = false;
    do{
        echo "Ingrese una letra: ";
        $letra = strtolower(trim(fgets(STDIN)));
        if(strlen($letra)!=1){
            echo "Debe ingresar 1 letra!\n";
        }else{
            $letraCorrecta = true;
        }
        
    }while(!$letraCorrecta);
    
    return $letra;
}

/**
* Descubre todas las letras de la colección de letras iguales a la letra ingresada.
* Devuelve la coleccionLetras modificada, con las letras descubiertas
* @param array $coleccionLetras
* @param string $letra
* @return array colección de letras modificada.
*/
function destaparLetra($coleccionLetras, $letra){
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
    for($i = 0; $i < strlen($coleccionLetras); $i++){
        if($coleccionLetras[$i]["letra"] == $letra){
           $coleccionLetras[$i]= array("letra"=> $letra , "descubierta" => true);
           print_r($coleccionLetras);
        }
     }
  return $coleccionLetras;
}

/**
* obtiene la palabra con las letras descubiertas y * (asterisco) en las letras no descubiertas. Ejemplo: he**t*t*s
* @param array $coleccionLetras
* @return string  Ejemplo: "he**t*t*s"
*/
function stringLetrasDescubiertas($coleccionLetras){
    //Variable interna: string $pal
    $pal= " ";
    
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
    return $pal;
}


/**
* Desarrolla el juego y retorna el puntaje obtenido
* Si descubre la palabra se suma el puntaje de la palabra más la cantidad de intentos que quedaron
* Si no descubre la palabra el puntaje es 0.
* @param array $coleccionPalabras
* @param int $indicePalabra
* @param int $cantIntentos
* @return int puntaje obtenido
*/
function jugar($coleccionPalabras, $indicePalabra, $cantIntentos){
    $pal = $coleccionPalabras[$indicePalabra]["palabra"];
    $coleccionLetras = dividirPalabraEnLetras($pal);
    //print_r($coleccionLetras);
    $puntaje = 0;
    
    
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
    
    //Mostrar pista:
    
    //solicitar letras mientras haya intentos y la palabra no haya sido descubierta:
    
    If($palabraFueDescubierta){
        //obtener puntaje:
        
        echo "\n¡¡¡¡¡¡GANASTE ".$puntaje." puntos!!!!!!\n";
    }else{
        echo "\n¡¡¡¡¡¡AHORCADO AHORCADO!!!!!!\n";
    }
    
    return $puntaje;
}

/**
* Agrega un nuevo juego al arreglo de juegos
* @param array $coleccionJuegos
* @param int $ptos
* @param int $indicePalabra
* @return array coleccion de juegos modificada
*/
function agregarJuego($coleccionJuegos,$puntos,$indicePalabra){
    $coleccionJuegos[] = array("puntos"=> $puntos, "indicePalabra" => $indicePalabra);    
    return $coleccionJuegos;
}

/**
* Muestra los datos completos de un registro en la colección de palabras
* @param array $coleccionPalabras
* @param int $indicePalabra
*/
function mostrarPalabra($coleccionPalabras,$indicePalabra){
    //$coleccionPalabras[0]= array("palabra"=> "papa" , "pista" => "se cultiva bajo tierra", "puntosPalabra"=>7);
    
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
}


/**
* Muestra los datos completos de un juego
* @param array $coleccionJuegos
* @param array $coleccionPalabras
* @param int $indiceJuego
*/
function mostrarJuego($coleccionJuegos,$coleccionPalabras,$indiceJuego){
    //array("puntos"=> 8, "indicePalabra" => 1)
    echo "\n\n";
    echo "<-<-< Juego ".$indiceJuego." >->->\n";
    echo "  Puntos ganados: ".$coleccionJuegos[$indiceJuego]["puntos"]."\n";
    echo "  Información de la palabra:\n";
    mostrarPalabra($coleccionPalabras,$coleccionJuegos[$indiceJuego]["indicePalabra"]);
    echo "\n";
}


/*>>> Implementar las funciones necesarias para la opcion 5 del menú <<<*/

/*>>> Implementar las funciones necesarias para la opcion 6 del menú <<<*/

/*>>> Implementar las funciones necesarias para la opcion 7 del menú <<<*/




/************************************************/
/************** PROGRAMA PRINCIAL *********/
/***********************************************/
define("CANT_INTENTOS", 6); //Constante en php para cantidad de intentos que tendrá el jugador para adivinar la palabra.

do{
    $opcion = seleccionarOpcion();
    switch ($opcion) {
    case 1: //Jugar con una palabra aleatoria...

        break;
    case 2: //Jugar con una palabra elegida

        break;
    case 3: //Agregar una palabra al listado

        break;
    case 4: //Mostrar la información completa de un número de juego

        break;
    case 5: //Mostrar la información completa del primer juego con más puntaje

        break;
    case 6: //Mostrar la información completa del primer juego que supere un puntaje indicado por el usuario

        break;
    case 7: //Mostrar la lista de palabras ordenada por orden alfabetico

        break;
    }
}while($opcion != 8);

