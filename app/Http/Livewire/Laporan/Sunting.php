<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Laporan;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Livewire\WithFileUploads;

class Sunting extends Component
{
    use WithFileUploads;
    public $document, $document_id;

    public function mount($id)
    {
        $laporan = Laporan::find($id);
        $this->document_id = $laporan->id;
    }
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
        $laporan = Laporan::find($this->document_id);
        $laporan->file_laporan = $this->document->storeAs('laporan', \Str::slug(\Auth::user()->name) . '.' . $this->document->extension());
        $laporan->ukuran_file = $this->document->getSize();
        $laporan->siswa_id = $siswa->id;
        $laporan->save();
        $this->alert('success', 'Laporan berhasil diupdate');
        $this->redirectRoute('laporan.tambah');
    }
    public function render()
    {
        return view('livewire.laporan.sunting');
    }
}
