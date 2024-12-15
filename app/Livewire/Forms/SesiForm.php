<?php

namespace App\Livewire\Forms;

use App\Models\Sesi;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SesiForm extends Form
{
    public $order;
    public $name;
    public $jam;
    public $keterangan;
    public ?Sesi $sesi;

    public function setSesi(Sesi $sesi){
        $this->sesi = $sesi;

        $this->order = $sesi->order;
        $this->name = $sesi->name;
        $this->jam = implode("-", $sesi->jam);
        $this->keterangan = $sesi->keterangan;
    }

    public function store(){
        $valid = $this->validate([
            'order' => 'required',
            'name' => 'required',
            'jam' => 'required',
            'keterangan' => 'required'
        ]);
        if($this->jam){
            $valid['jam']  = explode(',', trim($this->jam));
        }
        Sesi::create($valid);

        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'order' => 'required',
            'name' => 'required',
            'jam' => 'required',
            'keterangan' => 'required'
        ]);
        if($this->jam){
            $valid['jam']  = explode('-', preg_replace('/\s+/', ' ', $this->jam));
        }
        $this->sesi->update($valid);
        $this->reset();
    }
}
