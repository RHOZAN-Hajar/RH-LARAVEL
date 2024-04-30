<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prime extends Model
{
    protected $fillable = ['id_salarie', 'montant', 'date'];



    public function salarie()
{
    return $this->belongsTo(Salarie::class, 'id_salarie');
}

}

