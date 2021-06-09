<?php

namespace App\Http\Livewire\Siswa;

use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use WithFileUploads;
    public  $nama_lengkap, $jenis_kelamin, $nis, $jurusan, $tempat_lahir, $tanggal_lahir, $email, $password,
            $password_confirmation, $photo, $alamat;

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
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            \DB::beginTransaction();

            $user = new User();
            $user->name = $this->nama_lengkap;
            $user->email = $this->email;
            $user->password = $this->password;
            $user->roles = 'siswa';
            $user->save();

            $siswa = new Siswa();
            $siswa->nama_lengkap = $this->nama_lengkap;
            $siswa->jenis_kelamin = $this->jenis_kelamin;
            $siswa->nis = $this->nis;
            $siswa->jurusan = $this->jurusan;
            $siswa->tempat_lahir = $this->tempat_lahir;
            $siswa->tanggal_lahir = $this->tanggal_lahir;
            $siswa->alamat = $this->alamat;
            $siswa->photo = $this->photo->storeAs('avatar', \Str::slug($this->nama_lengkap) . '.png');
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
        return view('livewire.siswa.tambah');
    }
}
