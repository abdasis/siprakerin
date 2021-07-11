<?php

namespace App\Http\Livewire\Document;

use App\Models\Document;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Livewire\WithFileUploads;

class Sunting extends Component
{

    use WithFileUploads;

    public $nama_document, $diskripsi, $document, $document_id;

    public function rules()
    {
        return [
            'document' => 'required|mimes:pdf,docx,doc',
            'nama_document' => 'required',
            'diskripsi' => 'required'
        ];
    }

    public function mount($id)
    {
        $document = Document::find($id);
        $this->document = $document->document;
        $this->nama_document = $document->nama_dokumen;
        $this->diskripsi = $document->diskripsi;
        $this->document_id = $document->id;
    }

    public function simpan()
    {
        $this->validate();
        $document = Document::find($this->document_id);
        $document->nama_dokumen = $this->nama_document;
        $document->file = $this->document->storeAs('document', \Str::slug($this->nama_document) . '.' . $this->document->extension());
        $document->diskripsi = $this->diskripsi;
        $document->save();
        $this->alert('success', 'Data berhasil disimpan');
        $this->redirectRoute('document.semua');
    }
    public function render()
    {
        return view('livewire.document.sunting');
    }
}
