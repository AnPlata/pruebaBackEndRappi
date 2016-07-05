<?php

/*
|--------------------------------------------------------------------------
| Application Routes - Actualizado
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{

	

	Session::forget('matrix');
	Session::forget('N');
	

	return View::make('ejercicio');

});


Route::post('/configurar_ejercicio',function(){
	if(Request::ajax()){
		$arrainput=array();
		$arrainput=Input::all();

		$pagina_controller=new MatrixController();		
		return $pagina_controller->configurar($arrainput);
	}	
});


Route::post('/consultar_matrix',function(){
	if(Request::ajax()){
		$arrainput=array();
		$arrainput=Input::all();

		$pagina_controller=new MatrixController();		
		return $pagina_controller->query($arrainput);
	}	
});



Route::post('/editar_matrix',function(){
	if(Request::ajax()){
		$arrainput=array();
		$arrainput=Input::all();

		$pagina_controller=new MatrixController();		
		return $pagina_controller->update($arrainput);
	}	
});





