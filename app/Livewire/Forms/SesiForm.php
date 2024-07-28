<?php

namespace App\Livewire\Forms;

use App\Models\Sesi;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SesiForm extends Form
{
    public $order;
    public $name;
    public $jam = ['00:00', "00:00"];
    public $keterangan;
    public ?Sesi $sesi;

    public function setSesi(Sesi $sesi){
        $this->sesi = $sesi;

        $this->order = $sesi->order;
        $this->name = $sesi->name;
        $this->jam = $sesi->jam;
        $this->keterangan = $sesi->keterangan;
    }
    public function store(){
        $valid = $this->validate([
            'order' => 'required',
            'name' => 'required',
            'jam' => 'required',
            'keterangan' => 'required'
        ]);
        Sesi::create($valid);
    }

    public function update(){
        $valid = $this->validate([
            'order' => 'required',
            'name' => 'required',
            'jam' => 'required',
            'keterangan' => 'required'
        ]);
        $this->sesi->update($valid);
    }
}
