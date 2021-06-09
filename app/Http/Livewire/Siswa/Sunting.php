<?php

namespace App\Http\Livewire\Siswa;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Sunting extends Component
{
    public  $nama_lengkap, $jenis_kelamin, $nis, $jurusan, $tempat_lahir, $tanggal_lahir, $email, $password,
            $password_confirmation, $photo, $alamat, $user_id;

    public function mount($id)
    {
        $siswa = Siswa::where('user_id', $id)->first();
        $this->nama_lengkap = $siswa->nama_lengkap;
        $this->jenis_kelamin = $siswa->jenis_kelamin;
        $this->nis = $siswa->nis;
        $this->jurusan = $siswa->jurusan;
        $this->tempat_lahir = $siswa->tempat_lahir;
        $this->tanggal_lahir = $siswa->tanggal_lahir;
        $this->email = $siswa->user->email;
        $this->user_id = $siswa->user->id;
    }
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nis' => 'required',
            'jurusan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required',
            'alamat' => 'required|min:3',
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            \DB::beginTransaction();

            $user = User::find($this->user_id);
            $user->name = $this->nama_lengkap;
            $user->email = $this->email;
            $user->password = $this->password;
            $user->roles = 'siswa';
            $user->save();

            $siswa = Siswa::where('user_id', $this->user_id)->fisrt();
            $siswa->nama_lengkap = $this->nama_lengkap;
            $siswa->jenis_kelamin = $this->jenis_kelamin;
            $siswa->nis = $this->nis;
            $siswa->jurusan = $this->jurusan;
            $siswa->tempat_lahir = $this->tempat_lahir;
            $siswa->tanggal_lahir = $this->tanggal_lahir;
            $siswa->alamat = $this->alamat;
            $user->siswa()->save($siswa);
            $this->alert('success', 'Data siswa berhasil disimpan');

            \DB::commit();
        }catch (\Exception $exception){
            $this->alert('error', $exception->getMessage());
            \DB::rollBack();
        }

    }

    public function render()
    {
        return view('livewire.siswa.sunting');
    }
}
