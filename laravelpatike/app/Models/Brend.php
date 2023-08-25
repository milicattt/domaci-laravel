<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brend extends Model
{
    use HasFactory;

    protected $table = 'brendovi';

    protected $fillable = [
        'imeBrenda',
        'opis',
        'kategorija_id',
    ];

    public function patika()
    {
        return $this->hasMany(Patika::class);
    }

    public function kategorija()
    {
        return $this->belongsTo(Kategorija::class);
    }
}
