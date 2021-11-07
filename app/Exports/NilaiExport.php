<?php

namespace App\Exports;

use App\Models\Nilai;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class NilaiExport implements FromView, ShouldAutoSize
{
    use Exportable;


    public $jurusan;
    public function __construct($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function view(): View
    {
        $jurusan = $this->jurusan;
        $nilai = Nilai::whereHas('siswa', function ($query) use($jurusan){
            return $query->where('jurusan', $jurusan);
        })->get();


        return view('print.export-nilai', [
            'semua_nilai' => $nilai
        ]);
    }


}
