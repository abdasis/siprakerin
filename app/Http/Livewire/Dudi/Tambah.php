<?php

namespace App\Http\Livewire\Dudi;

use App\Models\Dudi;
use App\Models\User;
use Livewire\Component;
use function PHPUnit\Framework\exactly;

class Tambah extends Component
{
    public  $nama_perusahaan, $nama_direktur, $telepon, $email, $alamat, $password, $password_confirmation;

    public function rules()
    {
        return [
            'nama_perusahaan' => 'required',
            'nama_direktur' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|min:8',
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {

            \DB::beginTransaction();
            $user = new User();
            $user->email = $this->email;
            $user->password = \Hash::make($this->password);
            $user->name = $this->nama_perusahaan;
            $user->save();


            $dudi = new Dudi();
            $dudi->nama_perusahaan = $this->nama_perusahaan;
            $dudi->nama_direktur = $this->nama_direktur;
            $dudi->telepon = $this->telepon;
            $dudi->alamat = $this->alamat;
            $user->dudi()->save($dudi);
            \DB::commit();
            $this->alert('success', 'Data berhasil disimpan');
        }catch (\Exception $exception){
            $this->alert('error', $exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.dudi.tambah');
    }
}
