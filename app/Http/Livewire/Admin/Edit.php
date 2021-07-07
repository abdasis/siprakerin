<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use PHPUnit\Exception;


class Edit extends Component
{

    public $nama_lengkap, $title, $jabatan, $email, $password, $password_confirmation;
    public $admin_id;

    public function mount($id)
    {
        $admin = Admin::where('user_id', $id)->first();
        $this->nama_lengkap = $admin->nama_lengkap;
        $this->title = $admin->title;
        $this->jabatan = $admin->jabatan;
        $this->email = $admin->user->email;
        $this->admin_id = $admin->user_id;

    }
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'title' => 'required',
            'jabatan' => 'required',
        ];
    }


    public function simpan()
    {

        $this->validate();
        try {
            \DB::beginTransaction();
            $user = \App\Models\User::find($this->admin_id);
            $user->name = $this->nama_lengkap;
            $user->email = $this->email;
            $user->password = \Hash::make($this->password);
            $user->save();

            $admin = Admin::where('user_id', $this->admin_id)->first();
            $admin->nama_lengkap = $this->nama_lengkap;
            $admin->title = $this->title;
            $admin->jabatan = $this->jabatan;
            $user->admin()->save($admin);
            $this->alert('success', 'Data Berhasil disimpan');
            \DB::commit();
        }catch (Exception $exception){
            session()->flash('message', 'Ada kesalahan saat menyimpan data');
            $this->alert('error', 'Ada kesalahaan saat menyimpan data');
            \DB::rollBack();
        }

    }

    public function render()
    {
        return view('livewire.admin.edit');
    }
}
