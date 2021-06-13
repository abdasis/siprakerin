<div>
    <div class="nk-block">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Memilih Penempatan siswa magang</h5>
                        </div>
                        @if($errors->any())
                            <div class="alert alert-info">
                                <ol type="1">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ol>
                            </div>
                        @endif
                        <form wire:submit.prevent="simpan">
                            <div class="form-group">
                                <label for="" class="form-label">Siswa</label>
                                <select name="" wire:model="siswa_id" id="" class="form-control">
                                    <option value="">Pilih Siswa</option>
                                    @foreach(\App\Models\Siswa::latest()->get() as $siswa)
                                        <option value="{{$siswa->id}}">{{$siswa->nama_lengkap}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Dudi</label>
                                <select name="" wire:model="dudi_id" id="" class="form-control">
                                    <option value="">Pilih Siswa</option>
                                    @foreach(\App\Models\Dudi::latest()->get() as $dudi)
                                        <option value="{{$dudi->id}}">{{$dudi->nama_perusahaan}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>
                                Bantuan
                            </h5>
                        </div>
                        Silahkan pilih salah satu siswa dan tempat dudi yang akan dipilih kemudian tekan Tombol Simpan

                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card border-top border-primary">
                    <div class="card-body">
                        <div class="card-title">List data dudi dengan siswa terpilih</div>
                        <div class="row">

                        @foreach(\App\Models\Dudi::latest()->get() as $dudi)
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="user-avatar user-avatar-md m-auto">
                                                <span>{{$dudi->id}}</span>
                                                <div class="status dot dot-lg dot-success"></div>
                                            </div>
                                            <h5 class="text-center">{{$dudi->nama_perusahaan}}</h5>
                                            <p class="text-center">{{$dudi->nama_direktur}}</p>
                                            <hr>
                                            <ul>
                                                @foreach($dudi->siswa as $siswa)
                                                    <li>{{$siswa->nama_lengkap}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
