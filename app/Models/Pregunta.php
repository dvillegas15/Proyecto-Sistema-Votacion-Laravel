<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    use HasFactory;
    public function respuesta(){
        
        return $this->belongsTo(Pregunta::class);
    }

    
}
