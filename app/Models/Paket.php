<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'harga',
        'keterangan',
        'photo',
    ];

    public function getImageAttribute(){
        return $this->photo ? Storage::url($this->photo) : url('noimage.png');
    }
}
