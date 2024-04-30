<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    use HasFactory;

    protected $fillable = [
      
            'status',
            'admin_comments',
           
        
        'id_salarie',
        'typeDeConge',
        'certif',
        'date_debut',
        'date_fin',
    ];

    


    public function salarie()
{
    return $this->belongsTo(Salarie::class, 'id_salarie', 'id_salarie');
}

}