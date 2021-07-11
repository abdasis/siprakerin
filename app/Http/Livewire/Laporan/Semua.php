<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Laporan;
use App\Models\Siswa;
use Livewire\Component;

class Semua extends Component
{
    public function download($id)
    {
        $laporan = Laporan::find($id);
        $this->alert('success', 'Laporan berhasil didownload');
        return response()->download(storage_path('app' . '/' . $laporan->file_laporan));

    }

    public function delete($id)
    {
        $laporan = Laporan::find($id);
        $laporan->delete();
        $this->alert('success', 'Data laporan berhasil berhasil dihapus');
    }

    public function render()
    {
        $siswa = Siswa::where('user_id', \Auth::user()->id)->first();
        if (\Auth::user()->roles == 'siswa')
            $laporan = Laporan::where('siswa_id', $siswa->id)->paginate(25);
        else
            $laporan = Laporan::paginate(25);
        return view('livewire.laporan.semua', [
            'semua_laporan' => $laporan
        ]);
    }
}
