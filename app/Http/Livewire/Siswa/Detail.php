<?php

namespace App\Http\Livewire\Siswa;

use App\Models\Siswa;
use Livewire\Component;

class Detail extends Component
{

    public $siswa_id;
    public function mount($id)
    {
        $this->siswa_id = $id;
    }
    public function render()
    {
        $siswa = Siswa::find($this->siswa_id);
        return view('livewire.siswa.detail',[
            'siswa' => $siswa
        ]);
    }
}
