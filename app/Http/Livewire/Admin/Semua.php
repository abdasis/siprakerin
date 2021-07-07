<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Models\User;
use Livewire\Component;

class Semua extends Component
{

    public function hapus($id)
    {
        try {
            \DB::beginTransaction();
            $admin = Admin::find($id);
            $admin->delete();

            if ($admin){
                User::where('id', $admin->user_id)->delete();
            }
            $this->alert('success','Data berhasil dihapus');
            \DB::commit();
        }catch (\Exception $exception){
            $this->alert('error', 'Terjadi kesalahan saat menyimpan data');
        }

    }
    public function render()
    {
        return view('livewire.admin.semua', [
            'semua_admin' => Admin::latest()->paginate(10)
        ]);
    }
}
