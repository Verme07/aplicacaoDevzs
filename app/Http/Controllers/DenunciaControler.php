<?php
namespace App\Http\Controllers;
use App\Denuncia;
use resources\views\denuncia;
use Input;
class DenunciaControler extends Controller{
	
	public function getIndex(){
		$questionario = Denuncia::get();
		return view('tabelaDenuncias', ['denuncia'=>$questionario]);

	} 
	public function postEnviar(){
		
		$dadosFormulario = \Input::all();
		$resposta = new Denuncia($dadosFormulario);
		$resposta->save();
		return redirect('/');
	} 

	

}
