<?php

namespace App\Http\Livewire\Dudi;

use App\Models\Dudi;
use Livewire\Component;

class Detial extends Component
{
    public $dudi;
    public function mount($id)
    {
        $this->dudi = Dudi::find($id);
    }
    public function render()
    {
        return view('livewire.dudi.detail');
    }
}
