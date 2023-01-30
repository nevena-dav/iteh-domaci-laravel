<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dobavljac extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv',
        'adresu',
        'kontakt'

    ];
    public function proizvod()
    {
        return $this->hasMany(Proizvod::class);
    }
}
