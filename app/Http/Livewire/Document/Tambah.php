<?php

namespace App\Http\Livewire\Document;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use WithFileUploads;

    public $nama_document, $diskripsi, $document;

    public function rules()
    {
        return [
            'document' => 'required|mimes:pdf,docx,doc',
            'nama_document' => 'required',
            'diskripsi' => 'required'
        ];
    }

    public function simpan()
    {
        $this->validate();
        $document = new Document();
        $document->nama_dokumen = $this->nama_document;
        $document->file = $this->document->storeAs('document', \Str::slug($this->nama_document) . '.' . $this->document->extension());
        $document->diskripsi = $this->diskripsi;
        $document->save();
        $this->alert('success', 'Data berhasil disimpan');
        $this->redirectRoute('document.semua');
    }

    public function render()
    {
        return view('livewire.document.tambah');
    }
}
