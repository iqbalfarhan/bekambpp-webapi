<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'sesi_id',
        'user_id',
        'paket_id',
        'approved',
    ];

    public function sesi(){
        return $this->belongsTo(Sesi::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function paket(){
        return $this->belongsTo(Paket::class);
    }

}
