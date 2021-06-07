<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;

class Semua extends Component
{
    public function render()
    {
        return view('livewire.admin.semua', [
            'semua_admin' => Admin::latest()->paginate(10)
        ]);
    }
}
