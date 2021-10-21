<?php

namespace App\Http\Livewire\Nilai;

use App\Models\Nilai;
use Livewire\Component;

class Semua extends Component
{
    public $jurusan;

    public function render()
    {
        $jurusan = $this->jurusan;
        if (!empty($this->jurusan)) {
            $nilai = Nilai::whereHas('siswa', function ($query) use ($jurusan) {
                $query->where('jurusan', $jurusan);
            })->paginate(25);
        } else {
            $nilai = Nilai::latest()->paginate(25);
        }
        return view('livewire.nilai.semua', [
            'semua_nilai' => $nilai
        ]);
    }
}
