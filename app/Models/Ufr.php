<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ufr extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom'
    ];
    public function filieres()
    {
        return $this->belongsToMany(Filiere::class);
    }
}
