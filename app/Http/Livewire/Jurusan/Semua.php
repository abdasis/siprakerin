<?php

namespace App\Http\Livewire\Jurusan;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Semua extends Component
{

    public $kode_jurusan, $nama_jurusan, $jurusan_id, $statusUpdate;

    public function rules()
    {
        return [
            'kode_jurusan' => 'required',
            'nama_jurusan' => 'required',
        ];
    }

    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        $this->kode_jurusan = $jurusan->kode_jurusan;
        $this->nama_jurusan = $jurusan->nama_jurusan;
        $this->jurusan_id = $jurusan->id;
        $this->statusUpdate = true;
    }

    public function hapus($id)
    {
        Jurusan::find($id)->delete();
        $this->alert('success', 'Data berhasil dihapus');
    }

    public function simpan()
    {
        $this->validate();
        try {
            if ($this->statusUpdate){
                $jurusan = Jurusan::find($this->jurusan_id);
                $jurusan->kode_jurusan = $this->kode_jurusan;
                $jurusan->nama_jurusan = $this->nama_jurusan;
                $jurusan->dibuat_oleh = \Auth::user()->name;
                $jurusan->diupdate_oleh = \Auth::user()->name;
                $jurusan->save();
                $this->alert('success', 'Data berhasil update');
            }else{
                $jurusan = new Jurusan();
                $jurusan->kode_jurusan = $this->kode_jurusan;
                $jurusan->nama_jurusan = $this->nama_jurusan;
                $jurusan->dibuat_oleh = \Auth::user()->name;
                $jurusan->diupdate_oleh = \Auth::user()->name;
                $jurusan->save();
                $this->reset();
                $this->alert('success', 'Data berhasil disimpan');
            }
        }catch (QueryException $exception){
            $this->alert('error', $exception->getMessage());
        }
    }

    public function delete($id)
    {
        $jurusan = Jurusan::find($id);
        if ($jurusan){
            $jurusan->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }else{
            $this->alert('error', 'Data tidak di temukan');
        }
    }
    public function render()
    {
        return view('livewire.jurusan.semua',[
            'semua_jurusan' => Jurusan::paginate(25)
        ]);
    }
}
