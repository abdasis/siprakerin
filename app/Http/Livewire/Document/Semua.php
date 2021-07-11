<?php

namespace App\Http\Livewire\Document;

use App\Models\Document;
use Livewire\Component;

class Semua extends Component
{
    public function render()
    {
        $semua_document = Document::latest()->get();
        return view('livewire.document.semua',[
            'semua_document' => $semua_document
        ]);
    }
}
