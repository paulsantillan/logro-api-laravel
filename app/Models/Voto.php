<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Voto extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'votos';

     protected $fillable = [
        'votos','idcandidato','user_id','estado'
    ];
    public function Usuario():BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }
    public function Candidato():BelongsTo{
        return $this->BelongsTo(Candidato::class,'idcandidato');
    }
}
