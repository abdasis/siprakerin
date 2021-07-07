<?php

namespace App\Http\Livewire\Absensi;

use App\Models\Absensi;
use App\Models\Siswa;
use Carbon\Carbon;
use Carbon\Exceptions\Exception;
use Livewire\Component;

class Tambah extends Component
{
    public function simpan()
    {
        $siswa = Siswa::where('user_id', \Auth::user()->id)->first();
        $absensi = new Absensi();
        $absensi->tanggal_absensi = Carbon::now();
        $absensi->status = 'belum disetujui';
        $absensi->user_id = \Auth::user()->id;
        $absensi->dudi_id = $siswa->dudi->first()->id;
        $absensi->save();
        $this->alert('success', 'Berhasil abses hari ini');
        $this->redirect('dashboard');
    }
    public function render()
    {
        $absensi = Absensi::where('tanggal_absensi', Carbon::now()->format('Y-m-d'))->first();
        return view('livewire.absensi.tambah',[
            'absensi' => $absensi
        ]);
    }
}
