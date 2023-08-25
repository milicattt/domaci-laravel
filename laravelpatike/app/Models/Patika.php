<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patika extends Model
{
    use HasFactory;

    protected $table = 'patike';

    protected $fillable = [
        'ime',
        'url_slike',
        'opis',
        'cena',
        'brend_id',
        'user_id'
    ];

    public function brend()
        {
            return $this->belongsTo(Brend::class);
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
