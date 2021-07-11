<?php

namespace App\Http\Livewire\Nilai;

use App\Models\Dudi;
use App\Models\Nilai;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Sunting extends Component
{

    public $siswa_id, $keterampilan, $sikap, $kerajinan, $perilaku, $nilai_id;

    public function mount($id)
    {
        $nilai = Nilai::find($id);
        $this->siswa_id = $nilai->siswa_id;
        $this->keterampilan = $nilai->keterampilan;
        $this->sikap = $nilai->sikap;
        $this->kerajinan = $nilai->kerajinan;
        $this->perilaku = $nilai->perilaku;
        $this->nilai_id = $nilai->id;
    }
    public function rules()
    {
        return  [
            'siswa_id' => 'required',
            'keterampilan' => 'required|max:100',
            'sikap' => 'required|max:100',
            'kerajinan' => 'required|max:100',
            'perilaku' => 'required|max:100'
        ];
    }

    public function simpan()
    {
        $this->validate();
        $nilai = Nilai::find($this->nilai_id);
        $nilai->sikap = $this->sikap;
        $nilai->keterampilan = $this->keterampilan;
        $nilai->kerajinan = $this->kerajinan;
        $nilai->perilaku = $this->perilaku;
        $nilai->siswa_id = $this->siswa_id;
        $nilai->save();
        $this->alert('success', 'Data berhasl di update');
        return redirect()->route('nilai.semua');
    }
    public function render()
    {
        $dudi =  Dudi::where('user_id', \Auth::user()->id)->first();
        return view('livewire.nilai.sunting', [
            'dudi' => $dudi
        ]);
    }
}
