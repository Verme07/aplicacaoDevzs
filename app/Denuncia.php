<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $fillable = ['nome', 'contacto', 'sugestao'];
    protected $table = 'denuncia';
    protected $primaryKey = 'idDenuncia';
}
