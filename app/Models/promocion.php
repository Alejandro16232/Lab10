<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promocion extends Model
{
    use HasFactory;
    public function Fotos(){
        return $this->belongsTo(Foto::class);
    }
}
