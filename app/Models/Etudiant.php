<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'date_naissance',
        'filiere_id',
    ];
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
    public function ufr()
    {
        return $this->belongsTo(ufr::class);
    }
}
