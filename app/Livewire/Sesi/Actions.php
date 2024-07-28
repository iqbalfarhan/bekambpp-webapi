<?php

namespace App\Livewire\Sesi;

use App\Livewire\Forms\SesiForm;
use App\Models\Sesi;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;

    public SesiForm $form;

    #[On('reOrder')]
    public function orderUp(Sesi $sesi, $order)
    {
        $sesi->order = $order;
        $sesi->save();
        $this->dispatch('reload');
    }

    #[On('createSesi')]
    public function createSesi()
    {
        $this->show = true;
    }

    #[On('editSesi')]
    public function editSesi(Sesi $sesi)
    {
        $this->show = true;
        $this->form->setSesi($sesi);
    }

    #[On('deleteSesi')]
    public function deleteSesi(Sesi $sesi){
        $sesi->delete();
        $this->dispatch('reload');
    }

    public function closeModal()
    {
        $this->reset('show');
        $this->dispatch('reload');
    }

    public function simpan()
    {
        if (isset($this->form->sesi)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.sesi.actions');
    }
}
