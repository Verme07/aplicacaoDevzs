<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
	protected $fillable = ['nome', 'provincia', 'bairro', 'doencas', 'atendimento',
	'prioridade', 'tempoEspera', 'suborno', 'utilidade', 'sugestao'];
    protected $table= 'formulario';
    protected $primaryKey = 'idFormulario'; 

}
