<div>
    {{-- Stop trying to control. --}}
    <div class="card">
        <div class="card-header bg-white border-bottom">
            <h5>Form Tambah Admin</h5>
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
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input wire:model="nama_lengkap" type="text" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">NIP</label>
                            <input wire:model="nip" type="text" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input wire:model="email" type="text" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Jabatan</label>
                            <input wire:model="jabatan" type="text" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Pendidikan</label>
                            <input wire:model="title" type="text" name="" id="" class="form-control">
                        </div>
                    </div>



                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input wire:model="tanggal_lahir" type="date" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Telepon</label>
                            <input wire:model="telepon" type="text" name="" id="" class="form-control">
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
                </div>

                <div class="form-group mt-2">
                    <button class="btn btn-dark">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reload</button>
                </div>
            </form>
        </div>
    </div>
</div>
