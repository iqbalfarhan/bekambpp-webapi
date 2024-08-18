<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
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
        'keterangan',
        'status',
    ];

    public $casts = [
        'tanggal' => 'date',
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

    public function getStatusTextAttribute(){
        $result = match ($this->status) {
            'approved' => 'Diterima',
            'done' => 'Selesai',
            default => 'Menunggu',
        };

        return $result;
    }

    public function scopeByTanggal(Builder $query, $tanggal = null)
    {
        return $query->when($tanggal, function ($query, $tanggal) {
            return $query->where('tanggal', $tanggal);
        }, function ($query) {
            return $query->where('tanggal', today()->toDateString());
        });
    }

}
