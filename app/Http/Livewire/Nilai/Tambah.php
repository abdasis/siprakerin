<?php

namespace App\Http\Livewire\Nilai;

use App\Models\Nilai;
use Livewire\Component;

class Tambah extends Component
{

    public $siswa_id, $keterampilan, $sikap, $kerajinan, $perilaku;

    public function rules()
    {
        return  [
            'siswa_id' => 'required',
            'keterampilan' => 'required',
            'sikap' => 'required',
            'kerajinan' => 'required',
            'perilaku' => 'required'
        ];
    }

    public function simpan()
    {
        $nilai = new Nilai();
        $nilai->sikap = $this->sikap;
        $nilai->keterampilan = $this->keterampilan;
        $nilai->kerajinan = $this->kerajinan;
        $nilai->perilaku = $this->perilaku;
        $nilai->siswa_id = $this->siswa_id;
        $nilai->save();
        $this->alert('success', 'Data berhasl ditambahkan');
    }
    public function render()
    {
        return view('livewire.nilai.tambah');
    }
}
