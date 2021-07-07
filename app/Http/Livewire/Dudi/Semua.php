<?php

namespace App\Http\Livewire\Dudi;

use App\Models\Dudi;
use App\Models\User;
use Livewire\Component;

class Semua extends Component
{
    public function hapus($id)
    {
        try {
            \DB::beginTransaction();
            $dudi = Dudi::find($id);
            $dudi->delete();
            User::where('id', $dudi->user_id)->delete();
            $this->alert('success', 'Data dudi berhasil dihapus');
            \DB::commit();
        }catch (\Exception $exception){
            $this->alert('error', 'Terjadi kesalahaan saat melakukan pengahpusan data');
        }
    }
    public function render()
    {
        return view('livewire.dudi.semua',[
            'semua_dudi' => Dudi::latest()->paginate(25)
        ]);
    }
}
