<?php

namespace App\Http\Livewire\SuratKeterangan;

use App\Models\Siswa;
use App\Models\SuratKeterangan;
use Livewire\Component;
use Livewire\WithFileUploads;
use const http\Client\Curl\AUTH_ANY;

class Upload extends Component
{
    use WithFileUploads;

    public $nama_surat, $file;

    public function rules()
    {
        return [
            'file' => 'required'
        ];
    }

    public function simpan()
    {
        $siswa = Siswa::where('user_id', \Auth::user()->id)->first();
        $this->validate();
        $keterangan = new SuratKeterangan();
        $keterangan->nama_surat = $this->file;
        $keterangan->file = $this->file->storeAs('keterangan', \Str::slug(\Auth::user()->name . '-' . 'surat-keterangan') . '.' . $this->file->extension());
        $keterangan->siswa_id = $siswa->id;
        $keterangan->save();
        $this->alert('success', 'Document Berhasil Diupload');
    }
    public function render()
    {
        return view('livewire.surat-keterangan.upload');
    }
}
