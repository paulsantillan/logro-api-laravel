<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Candidato extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'candidatos';

     protected $fillable = [
        'descripcion','foto','idlista','idtipocandidato','estado'
    ];
    public function Lista():BelongsTo{
        return $this->belongsTo(Lista::class,'idlista');
    }
    public function TipoCandidato():BelongsTo{
        return $this->belongsTo(TipoCandidato::class,'idtipocandidato');
    }
    public function Votos():HasMany{
        return $this->HasMany(Voto::class,'idcandidato');
    }
}
