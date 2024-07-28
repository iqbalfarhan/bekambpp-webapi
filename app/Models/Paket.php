<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use NumberFormatter;

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

    public function getRupiahAttribute()
    {
        $formatter = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
        $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
        return $formatter->formatCurrency($this->harga, 'IDR');
    }
}
