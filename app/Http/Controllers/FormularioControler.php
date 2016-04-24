<?php
namespace App\Http\Controllers;
use App\Formulario;
use resources\views\respostas;
use Input;
class FormularioControler extends Controller{
	
	public function getIndex(){
		$questionario = Formulario::get();
		return view('respostas', ['questionario'=>$questionario]);

	} 

	public function postEnviar(){
		$dadosFormulario = \Input::all();
		$resposta = new Formulario($dadosFormulario);
		$resposta->save();
		
		return redirect('/');
	} 

	

}

