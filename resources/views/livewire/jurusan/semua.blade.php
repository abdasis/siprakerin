<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-white">
                <div class="card-body">
                    <div class="card-title">
                        <h5>Tambah Jurusan</h5>
                    </div>
                    <form wire:submit.prevent="simpan">
                        <div class="form-group">
                            <label for="" class="form-label">Kode Jurusan</label>
                            <div class="form-wrap">
                                <input type="text" class="form-control" wire:model="kode_jurusan" name="" id="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Nama Jurusan</label>
                            <div class="form-wrap">
                                <input type="text" class="form-control" wire:model="nama_jurusan" name="" id="">
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Simpan Jurusan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card bg-white">
                <div class="card-header bg-white border-bottom">
                    <div class="row justify-between">
                        <div class="col-4 my-auto">
                            <h6>Data Semua Jurusan</h6>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-user"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-sm rounded-pill" id="default-03" placeholder="Pencarian">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Jurusan</th>
                        <th>Nama Jurusan</th>
                        <th>Dibuat Pada</th>
                        <th class="text-center">Option</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($semua_jurusan as $key => $jurusan)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$jurusan->kode_jurusan}}</td>
                            <td>{{$jurusan->nama_jurusan}}</td>
                            <td> {{\Carbon\Carbon::parse($jurusan->created_at)->format('d-m-Y')}}</td>
                            <td class="text-center">
                                <a wire:click.prevent="edit({{$jurusan->id}})" href="{{route('siswa.sunting', $jurusan->id)}}">
                                    <button class="btn btn-sm btn-outline-warning"><em class="icon ni ni-pen"></em></button>
                                </a>
                                <button wire:click="hapus({{$jurusan->id}})" class="btn btn-sm btn-outline-danger"><em class="icon ni ni-trash-alt"></em></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="card-footer bg-white">
                    {{$semua_jurusan->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
