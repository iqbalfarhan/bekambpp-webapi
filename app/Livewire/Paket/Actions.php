<?php

namespace App\Livewire\Paket;

use App\Livewire\Forms\PaketForm;
use App\Models\Paket;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Actions extends Component
{
    use WithFileUploads;

    public $show = false;
    public $photo;
    public PaketForm $form;

    #[On('createPaket')]
    public function createPaket()
    {
        $this->show = true;
    }

    #[On('editPaket')]
    public function editPaket(Paket $paket)
    {
        $this->form->setPaket($paket);
        $this->show = true;
    }

    public function deletePaket(Paket $paket)
    {
        $this->closeModal();
        $this->dispatch('deletePaket', $paket);
    }

    public function simpan()
    {
        if ($this->photo) {
            $this->form->photo = $this->photo->hashName('paket');
            $this->photo->store('paket');
        }

        if (isset($this->form->paket)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }

        $this->dispatch('reload');
        $this->closeModal();
    }

    public function closeModal()
    {
        $this->form->reset();
        $this->reset([
            'show',
            'photo'
        ]);
    }

    public function render()
    {
        return view('livewire.paket.actions');
    }
}
