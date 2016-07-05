<?php

class MatrixController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function configurar($arrainput)
	{

		
       	//variables de configuracion
		
		$N=$arrainput["valor_N"];
		
	 	Session::put('N', $N);
	 	

		// el algoritmo  para configurar la matrix

	 	$matrix3D = array();

		for($i=0;$i<$N;$i++){

			$arra_info=array(0,0,0);
			array_push($matrix3D, $arra_info);

		}

	

		Session::put('matrix', $matrix3D);
		
		
		return Response::json(array("status"=>'ok', "matrix"=>$matrix3D));
		
		
	}

	public function query($arrainput)
	{


		
		
       	//desde
		$posX_A=$arrainput["posicionx_A"];
		$posY_A=$arrainput["posicionx_A"];
		$posZ_A=$arrainput["posicionx_A"];

		//hasta
		$posX_B=$arrainput["posicionx_B"];
		$posY_B=$arrainput["posicionx_B"];
		$posZ_B=$arrainput["posicionx_B"];


		$suma_rangos=0;

		$matrix = Session::get('matrix');

		return Response::json(array("resultado"=>$suma_rangos,"status"=>'ok', "matrix"=>$matrix));

		
		
		
	}


	public function update($arrainput){

		//Posicion
		$posX=$arrainput["posicionx_m"];
		$posY=$arrainput["posiciony_m"];
		$posZ=$arrainput["posicionz_m"];

		//valor
		$valor=$arrainput["valor"];

		$matrix = Session::get('matrix');

		//aqui va el algoritmo de modificacion de la matrix
		
		return Response::json(array("status"=>'ok',"mensaje"=>"Matrix Modificada correctamente"));
	}

}
