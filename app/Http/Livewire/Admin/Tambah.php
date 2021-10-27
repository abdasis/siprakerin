<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use PHPUnit\Exception;

class Tambah extends Component
{

    public $nama_lengkap, $title, $jabatan, $email, $password, $password_confirmation, $tanggal_lahir, $telepon, $nip;

    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'title' => 'required',
            'jabatan' => 'required',
            'password_confirmation' => 'required',
            'password' => 'required|confirmed|min:8',
            'email' => 'unique:users',
            'telepon' => 'required',
            'tanggal_lahir' => 'required',
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
            $user->password = \Hash::make($this->password);
            $user->roles = 'admin';
            $user->save();

            $admin = new Admin();
            $admin->nama_lengkap = $this->nama_lengkap;
            $admin->title = $this->title;
            $admin->jabatan = $this->jabatan;
            $admin->tanggal_lahir = $this->tanggal_lahir;
            $admin->nip = $this->nip;
            $admin->telepon = $this->telepon;
            $user->admin()->save($admin);
            $this->alert('success', 'Data Berhasil disimpan');
            $this->reset();
            \DB::commit();
        }catch (Exception $exception){
            session()->flash('message', 'Ada kesalahan saat menyimpan data');
            $this->alert('error', 'Ada kesalahaan saat menyimpan data');
            \DB::rollBack();
        }

    }

    public function render()
    {
        return view('livewire.admin.tambah');
    }
}
