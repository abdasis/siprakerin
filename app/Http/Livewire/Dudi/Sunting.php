<?php

namespace App\Http\Livewire\Dudi;

use App\Models\Dudi;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Sunting extends Component
{
    public  $nama_perusahaan, $nama_direktur, $telepon, $email, $alamat, $password, $password_confirmation;

    public $dudi_id;
    public function mount($id)
    {
        $dudi = Dudi::find($id);
        $this->nama_perusahaan = $dudi->nama_perusahaan;
        $this->nama_direktur  = $dudi->nama_direktur;
        $this->telepon = $dudi->telepon;
        $this->email = $dudi->user->email;
        $this->alamat = $dudi->alamat;
        $this->dudi_id = $dudi->id;
    }


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
            $dudi = Dudi::find($this->dudi_id);
            $user = User::where('id', $dudi->user_id)->first();

            $user->email = $this->email;
            $user->password = \Hash::make($this->password);
            $user->name = $this->nama_perusahaan;
            $user->save();

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
        return view('livewire.dudi.sunting');
    }
}

