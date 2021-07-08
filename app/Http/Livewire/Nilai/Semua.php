<?php

namespace App\Http\Livewire\Nilai;

use App\Models\Nilai;
use Livewire\Component;

class Semua extends Component
{
    public function render()
    {
        $nilai = Nilai::latest()->paginate(25);
        return view('livewire.nilai.semua', [
            'semua_nilai' => $nilai
        ]);
    }
}
