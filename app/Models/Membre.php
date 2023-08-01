<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'grade',
        'id_equipe'
    ];


    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    }

}
