<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Laporan;
use App\Models\Siswa;
use Livewire\Component;
use Livewire\WithFileUploads;
use const http\Client\Curl\AUTH_ANY;

class Tambah extends Component
{
    use WithFileUploads;
    public $document;

    public function rules()
    {
        return [
            'document' => 'required|mimes:docx,pdf'
        ];
    }

    public function simpan()
    {
        $siswa = Siswa::where('user_id', \Auth::user()->id)->first();
        $this->validate();
        $laporan = new Laporan();
        $laporan->file_laporan = $this->document->storeAs('laporan', \Str::slug(\Auth::user()->name) . '.' . $this->document->extension());
        $laporan->ukuran_file = $this->document->getSize();
        $laporan->siswa_id = $siswa->id;
        $laporan->save();
        $this->alert('success', 'Laporan berhasil disimpan');
    }
    public function render()
    {
        return view('livewire.laporan.tambah');
    }
}
