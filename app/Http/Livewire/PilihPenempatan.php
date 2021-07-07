<?php

namespace App\Http\Livewire;

use App\Models\Dudi;
use App\Models\Siswa;
use Livewire\Component;

class PilihPenempatan extends Component
{
    public $siswa_id, $dudi_id;

    public function rules()
    {
        return [
            'siswa_id' => 'required|unique:dudi_siswa',
            'dudi_id' => 'required'
        ];
    }
    public function simpan()
    {
        $this->validate();
        try {
            \DB::beginTransaction();
            $dudi = Dudi::find($this->dudi_id);

            $siswaId = $this->siswa_id;
            $dudi->siswa()->attach($siswaId);
            \DB::commit();
            $this->alert('success', 'Data berhasil disimpan');
        }catch (\Exception $exception){
            $this->alert('error', $exception->getMessage());
        }
    }

    public function deleteSiswa($id)
    {
        $siswa = Siswa::find($id);
        $siswa->dudi()->detach();
        $this->alert('success', 'Data berhasil dihapus');
    }
    public function render()
    {
        return view('livewire.pilih-penempatan');
    }
}
