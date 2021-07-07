<div>
    {{-- Stop trying to control. --}}
    <div class="card">
        <div class="card-header bg-white border-bottom">
            <h5>Form Tambah Siswa</h5>
        </div>
        <div class="card-body">
            @if(session()->has('message'))
                <div class="alert alert-success">{{session()->get('message')}}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form wire:submit.prevent="simpan">
                <div class="row">
                    <div class="col-md-4 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input wire:model="nama_lengkap" type="text" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input wire:model="email" type="text" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">NIS</label>
                            <input wire:model="nis" type="text" name="" id="" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Tempat Lahir</label>
                            <input wire:model="tempat_lahir" type="text" name="" id="" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input wire:model="tanggal_lahir" type="date" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <select name="" wire:model="jenis_kelamin" id="" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Jurusan</label>
                            <select name="" wire:model="jurusan" id="" class="form-control">
                                <option value="">Pilih Jurusan</option>
                                @foreach(\App\Models\Jurusan::latest()->get() as $jurusan)
                                    <option value="{{$jurusan->nama_jurusan}}">{{$jurusan->nama_jurusan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Alamat</label>
                            <textarea class="form-control" wire:model="alamat" name="" id="" cols="30" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Password</label>
                            <input wire:model="password" type="password" name="password" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for=""  class="form-label">Password Confirmation</label>
                            <input wire:model="password_confirmation" type="password" name="password_confirmation" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for=""  class="form-label">Photo</label>
                            <input wire:model="photo" type="file" name="password_confirmation" id="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <button class="btn btn-dark">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reload</button>
                </div>
            </form>
        </div>
    </div>
</div>
