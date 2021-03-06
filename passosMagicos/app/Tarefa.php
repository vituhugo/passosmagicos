<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Materia;
use App\Unidade;

class Tarefa extends Model
{
    //
    protected $fillable = [
        "descricao",
        "data",
        "unidade_id",
        "materia_id"
    ];

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }
}
