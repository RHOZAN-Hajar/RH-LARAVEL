<?php


// Absence.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    public function salarie()
    {
        return $this->belongsTo(Salarie::class, 'id_salarie');
    }
}

