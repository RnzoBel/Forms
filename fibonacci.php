<?php

 // foreach ($array as  $x)  nos recorre un array donde x  es cada uno de los valores de los elementos del arreglo 
//
function fibonacci ($limit){

    $limit = abs ($limit);
    $error ="";
    if (is_numeric($limit)){
    	$serie = array();
		$a=1;
		$b=0;
		for ( $i = 0 ; $i < $limit ; $i ++){
    		$suma = $a + $b;
    		$serie[] =$suma;
    		$a = $b;
    		$b = $suma; 
    	}
    return $serie;
    }else {
    	$error = 'error, el valor ingresado no es numerico ';
        return $error; 
    	}

    
}


?>




