<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Calculo;
use Validator;

class BaseController extends Controller
{
	/**
     * Calcula la cantidad de apariciones de la palabra OIE.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCalculo(Calculo $request){
    	$busqueda = "OIE";
    	$sopas = $request->input('sopas');
    	$lineas = preg_split("/[\s]+/", $sopas);
    	$apariciones = array();
    	do{
    		$occurrence = 0;
	        $f = array_shift($lineas);
	        $c = array_shift($lineas);
	        $matriz = array();
	        
	        // Construyendo la matriz
            for ($i=0; $i < $f; $i++) {
            	array_push($matriz, str_split(array_shift($lineas)));
            }
            // Revisa Horizontal
            for ($i=0; $i < $f; $i++) {
            	$horizontal = '';
            	for ($j=0; $j < $c; $j++) {
            		$horizontal = $horizontal . $matriz[$i][$j];
            	}	
            	$occurrence = $occurrence + substr_count($horizontal, $busqueda) + substr_count(strrev($horizontal), $busqueda);
            }
            
            // Revisa Vertical
            for ($i=0; $i < $c; $i++) {
            	$vertical = '';
            	for ($j=0; $j < $f; $j++) {
            		$vertical = $vertical . $matriz[$j][$i];
            	}	
            	$occurrence = $occurrence + substr_count($vertical, $busqueda) + substr_count(strrev($vertical), $busqueda);
            }

            // Revisa Diagonal principal
            $diagonal_principal = '';
            for ($i=0; $i < $f; $i++) {
            	for ($j=0; $j < $c; $j++) {
            		if($i == $j){
            			$diagonal_principal = $diagonal_principal . $matriz[$i][$j];	
            		}
            	}
            }
        	$occurrence = $occurrence + substr_count($diagonal_principal, $busqueda) + substr_count(strrev($diagonal_principal), $busqueda);

            // Revisa Diagonal Secundaria
            $diagonal_secundaria = '';
            for ($i=0; $i < $f; $i++) {
            	for ($j=0; $j < $c; $j++) {
            		if((($c-1) - $i) == $j){
            			$diagonal_secundaria = $diagonal_secundaria . $matriz[$i][$j];	
            		}
            	}
            }
        	$occurrence = $occurrence + substr_count($diagonal_secundaria, $busqueda) + substr_count(strrev($diagonal_secundaria), $busqueda);

            array_push($apariciones, $occurrence);
	    }while(count($lineas) > 0);

	    return response()->json($apariciones);
    }
}
