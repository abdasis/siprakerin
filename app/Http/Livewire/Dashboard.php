<?php

namespace App\Http\Livewire;

use App\Models\Absensi;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        if (\Auth::user()->roles == 'siswa'){
            $absensi = Absensi::where('tanggal_absensi', Carbon::now()->format('Y-m-d'))->where('user_id', \Auth::user()->id)->first();
        }else{
            $absensi = 'bukan siswa';
        }
        return view('livewire.dashboard', [
            'absensi' => $absensi
        ]);
    }
}
