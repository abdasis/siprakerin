<?php

namespace App\Http\Livewire\Siswa;

use App\Models\Siswa;
use Livewire\Component;

class Semua extends Component
{

    public function render()
    {
        $semua_siswa = Siswa::orderBy('nama_lengkap', 'desc')->paginate('25');
        return view('livewire.siswa.semua',[
            'semua_siswa' => $semua_siswa
        ]);
    }
}
