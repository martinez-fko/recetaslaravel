<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    // Relación 1:1 de Perfil con usuario
    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
