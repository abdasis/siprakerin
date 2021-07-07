<?php

namespace App\Http\Livewire\Absensi;

use App\Models\Absensi;
use App\Models\Dudi;
use Livewire\Component;
use function GuzzleHttp\default_user_agent;

class Semua extends Component
{
    public function setujui($id)
    {
        $absensi = Absensi::find($id);
        $absensi->status = 'masuk';
        $absensi->save();
        $this->alert('success', 'Siswa berhasil diabsensi');
    }

    public function absen($id)
    {
        $absensi = Absensi::find($id);
        $absensi->status = 'tidak masuk';
        $absensi->save();
        $this->alert('error', 'Siswa tidak masuk');
    }
    public function render()
    {
        $dudi = Dudi::where('user_id', \Auth::user()->id)->first();
        $absensi = Absensi::where('dudi_id', $dudi->id)
            ->join('users', 'users.id', 'absensis.user_id')
            ->select('users.*', 'absensis.*' , 'absensis.id as id')
            ->paginate(25);
        return view('livewire.absensi.semua',[
            'semua_absensi' => $absensi
        ]);
    }
}
