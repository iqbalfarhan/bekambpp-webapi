<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class SesiForm extends Form
{
    public $order;
    public $name;
    public $jam = ['00:00', "00:00"];
    public $keterangan;
}
