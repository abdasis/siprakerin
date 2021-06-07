<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Tambah extends Component
{

    public $nama_lengkap, $title, $jabatan, $email, $password;

    public function rules()
    {
        return [
            'nama_langkap' => 'required',
            'title' => 'required',
            'jabatan' => 'required'
        ];
    }

    public function simpan()
    {

        $user = new User();
        $user->name = $this->nama_lengkap;
        $user->email = $this->email;
        $user->password = \Hash::make($this->password);
        $user->save();

        $admin = new Admin();
        $admin->nama_lengkap = $this->nama_lengkap;
        $admin->title = $this->title;
        $admin->jabatan = $this->jabatan;
        $admin->user()->save($user);



    }

    public function render()
    {
        return view('livewire.admin.tambah');
    }
}
