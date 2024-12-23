<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'name',
        'jam',
        'keterangan',
    ];

    protected $casts = [
        'jam' => 'array'
    ];

    public function getDurasiAttribute()
    {
        $jam = $this->jam;
        if (count($jam) !== 2) {
            return "Format penulisan jam salah";
        }

        $waktu1 = strtotime($jam[0]);
        $waktu2 = strtotime($jam[1]);

        $selisihDetik = abs($waktu2 - $waktu1);
        $selisihMenit = $selisihDetik / 60;
        return $selisihMenit . " menit";
    }

    public function getJamTextAttribute()
    {
        return implode(" - ", $this->jam);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
