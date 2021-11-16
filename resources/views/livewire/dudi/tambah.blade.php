<div>
    {{-- Stop trying to control. --}}
    <div class="card">
        <div class="card-header bg-white border-bottom">
            <h5>Form Tambah Dunia Usaha / Dunia Industri</h5>
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
                            <label for="" class="form-label">Nama Perusahaan</label>
                            <input wire:model="nama_perusahaan" type="text" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Nama Direktur</label>
                            <input wire:model="nama_direktur" type="text" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Telepon</label>
                            <input wire:model="telepon" type="text" name="" id="" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input wire:model="email" type="email" name="" id="" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Password</label>
                            <input wire:model="password" type="password" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Konfirmasi Password</label>
                            <input wire:model="password_confirmation" type="password" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Pembimbing</label>
                            <input wire:model="pembimbing" type="text" name="" placeholder="" id="" class="form-control">

                        </div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="" class="form-label">Alamat</label>
                            <textarea class="form-control" wire:model="alamat" name="" id="" cols="30" rows="6"></textarea>
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
