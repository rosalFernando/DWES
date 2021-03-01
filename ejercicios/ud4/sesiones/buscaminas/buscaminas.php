<?php
session_start();
	$filas; 		//filas
	$columnas; 		//Columnes
	$bombas; 		//Bombas
	$total_casillas= $filas*$columnas; //Guardo el total de las casillas para moverme luego en un for
	$vector;	//declaramos el vector vacio
 
 
	//vector vacio pero con todas las posiciones
	function vector_v(&$vector,$total_casillas,$columnas){
	$j=0;
	$p=0;
	for($i=1;$i <= $total_casillas;$i++){
		$vector[$p][$j]= "&nbsp"; //Primero dejamos las posiciones vacias para luego poner los asteriscos
			if($i % $columnas == 0){ //Si el modulo de $i con las columnas es 0 creamos otra fila y empezamos otra columna.
				$p++;
				$j=0;
			}else{ //Si no es l modulo segimos creand casillas de columna.
			$j++;
			}
		}
	  return $vector;
	}
 
 
 
	//Esta funcion introduce las minas aleatoriamente en el vector
	function poner_m($bombas,$columnas,$filas,&$vector){
	$total=1;//usaremos esta variable para controlar que se escriban correctamente las minas.
	while($total <= $bombas){
	$h=rand(0,$filas-1);//creamos un numero aleatorio para movernos por las filas
	$v=rand(0,$columnas-1);//creamos un numero para movernos por las columnas.
            if ($vector[$h][$v] == "*"){//Si en esa posición aleatoria hay un asterisco que no haga nada
 
			}else{//Si no hay un asterisco que lo ponga y que incremente el contador.
			$vector[$h][$v] = "*";
			$total++;
			}
		}
		return $vector;
	}
 
	//Esta funcion pone los números que indican las posiciones de las minas
	function poner_n($filas,$columnas,&$vector){
 
	for($I=0;$I < $filas;$I++){				//hacemos 2 fors que nos recorran el vector (columnas y filas)
		for($J=0;$J < $columnas;$J++){			//Tenemos 8 if's que miran las posiciones que rodean dónde nos encontremos
			 if($vector[$I][$J+1]=="*"){ //miramos si delante hay un asterisco	
				if($vector[$I][$J]=="*"){//Si lo hay, ahí no hacemos nada.
 
				}else{ 
					$vector[$I][$J]=$vector[$I][$J]+1;//Si delante a avido un número incrementamos en la posicion q estamos.
					}
			}if($vector[$I][$J-1]=="*"){//A partir de aquí es lo mismo todo el rato pero cambiando la posicion.
				if($vector[$I][$J]=="*"){//Miramos detras, arriba,abajo,etc.
 
				}else{
				$vector[$I][$J]=$vector[$I][$J]+1;
				}
			}if($vector[$I-1][$J-1]=="*"){
				if($vector[$I][$J]=="*"){
 
				}else{
				$vector[$I][$J]=$vector[$I][$J]+1;
				}
			}if($vector[$I+1][$J-1]=="*"){
				if($vector[$I][$J]=="*"){
 
				}else{
				$vector[$I][$J]=$vector[$I][$J]+1;
				}
 
			}if($vector[$I-1][$J]=="*"){
				if($vector[$I][$J]=="*"){
 
				}else{
				$vector[$I][$J]=$vector[$I][$J]+1;
				}
			}if($vector[$I+1][$J]=="*"){
				if($vector[$I][$J]=="*"){
 
				}else{
				$vector[$I][$J]=$vector[$I][$J]+1;
				}
			}if($vector[$I-1][$J+1]=="*"){
				if($vector[$I][$J]=="*"){
				}else{
				$vector[$I][$J]=$vector[$I][$J]+1;
				}
			}
			if($vector[$I+1][$J+1]=="*"){
				if($vector[$I][$J]=="*"){
 
				}else{
				$vector[$I][$J]=$vector[$I][$J]+1;
				}
			}
		}
	}
	return $vector;
}	
 
 
//Llamamos a todas las funciones para que se genere el array con el juego hecho.
vector_v($vector,$total_casillas,$columnas);
poner_m($bombas,$columnas,$filas,$vector);
poner_n($filas,$columnas,$vector);
 
echo "<center>";
echo "<h1><b>JUEGO DEL BUSCAMINAS</b></h1>";//Presentamos el juego
echo "Usamos $filas filas, $columnas columnas y $bombas minas";
 
	echo "<table border='3'cellpadding='20'>";//Mostramos la tabla con 2 fors que hacen las columnas y las filas
	for ($i=0;$i < $filas; $i++){
		echo "<tr>";
		for($j=0;$j < $columnas;$j++){
			echo "<td>".$vector[$i][$j]."</td>";//Aqui nos escribe el array dentro de la tabla
		}
		echo "</tr>";
	}
	echo "</table>";
 
echo "</center>";
?>