<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Erabiltzailea extends Model
{
    protected $table = "erabiltzaileak";
    //
    protected $fillable = [
        'izena',
        'abizena',
        'email',
    ];

    //erabiltzaile batek kotxe bat baino gehiago izan dezake
    public function autoak()
    {
        return $this->hasMany(Autoa::class, 'erabiltzaile_id');
    }
}
