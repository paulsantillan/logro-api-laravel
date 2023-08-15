<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoCandidato extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'tipocandidatos';

     protected $fillable = [
        'descripcion','icon','estado',
    ];
    //  public function candidatos()
    // {
    //     return $this->hasMany('App\Condidato', 'idtipocandidato', 'id');

    // }


    public function Candidato():HasMany{
        return $this->HasMany(Candidato::class,'idtipocandidato');
    }
}
