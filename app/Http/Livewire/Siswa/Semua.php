<?php

namespace App\Http\Livewire\Siswa;

use App\Models\Siswa;
use http\Client\Curl\User;
use Livewire\Component;

class Semua extends Component
{

    public function hapus($id)
    {
        try {
            \DB::beginTransaction();
            $siswa = Siswa::find($id);
            $siswa->delete();
            $user = \App\Models\User::find($siswa->user_id);
            $user->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }catch (\Exception $exception){
            $this->alert('error', 'Terjadi kesalahan saat menghapus data');
        }
    }

    public function render()
    {
        $semua_siswa = Siswa::orderBy('nama_lengkap', 'desc')->paginate('25');
        return view('livewire.siswa.semua',[
            'semua_siswa' => $semua_siswa
        ]);
    }
}
