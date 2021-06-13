<?php

namespace App\Http\Livewire\Dudi;

use App\Models\Dudi;
use Livewire\Component;

class Semua extends Component
{
    public function render()
    {
        return view('livewire.dudi.semua',[
            'semua_dudi' => Dudi::latest()->paginate(25)
        ]);
    }
}
