<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;

class Detail extends Component
{
    public $admin_id;
    public function mount($id)
    {
        $this->admin_id = $id;
    }
    public function render()
    {
        $admin = Admin::find($this->admin_id);
        return view('livewire.admin.detail',[
            'admin' => $admin
        ]);
    }
}
