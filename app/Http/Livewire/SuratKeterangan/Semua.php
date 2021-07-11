<?php

namespace App\Http\Livewire\SuratKeterangan;

use App\Models\SuratKeterangan;
use Livewire\Component;

class Semua extends Component
{

    public function download($id)
    {
        $document = SuratKeterangan::find($id);
        return response()->download(storage_path('app' . '/' . $document->file ));
    }
    public function render()
    {
        return view('livewire.surat-keterangan.semua');
    }
}
