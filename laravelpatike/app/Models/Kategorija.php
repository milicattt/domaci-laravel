<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    use HasFactory;

    protected $table = 'kategorije';

    protected $fillable = [
        'naziv',
        'slug',
        'opis',
    ];

    public function brend(){
        return $this->hasMany(Brend::class);
    }
}
