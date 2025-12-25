<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoa extends Model
{
    use HasFactory;
    protected $table = 'cars';
    //atributuak
    protected $fillable = [
        'Plaka',
        'Beraz',
        'Modeloa',
    ];

    //ibilgailu guztiak lortzeko
    public static function lortu()
    {
        $cars = Autoa::with('erabiltzailea')->get();
        return $cars;
    }

    //Auto bat edo gehiago erabiltzaile bakar batena da.
    public function erabiltzailea()
    {
        return $this->belongsTo(Erabiltzailea::class, 'erabiltzaile_id');
    }
}
