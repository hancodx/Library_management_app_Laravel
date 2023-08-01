<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'responsable_id',
        'type',
        'description',
        'date'
    ];


    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'equipe_id');
    }
    public function chef()
    {
        return $this->belongsTo(Membre::class, 'responsable_id');
    }
}
