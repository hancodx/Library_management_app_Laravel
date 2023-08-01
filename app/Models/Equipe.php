<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'chef_id',
        'domaine_recherche',
        'mots_cles',
        'description'
    ];

    public function membres()
    {
        return $this->hasMany(Membre::class, 'id_equipe');
    }

    public function chef()
    {
        return $this->belongsTo(Membre::class, 'chef_id');
    }
}
