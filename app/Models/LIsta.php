<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LIsta extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'listas';

     protected $fillable = [
        'descripcion','numero','foto',
    ];

    public function Candidato():HasMany{
        return $this->HasMany(Candidato::class,'idlista');
    }
}
