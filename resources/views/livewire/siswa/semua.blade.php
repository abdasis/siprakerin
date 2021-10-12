<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card bg-white">
        <div class="card-header bg-white border-bottom">
            <div class="row justify-between">
                <div class="col-4 my-auto">
                    <h6>Data Semua Siswa</h6>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-icon form-icon-left">
                                <em class="icon ni ni-search"></em>
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
                <th>Nama Lengkap</th>
                <th>NIS</th>
                <th>TTL</th>
                <th>Jurusan</th>
                <th class="text-center">Option</th>
            </tr>
            </thead>

            <tbody>
            @foreach($semua_siswa as $key => $siswa)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$siswa->nama_lengkap}}</td>
                    <td>{{$siswa->nis}}</td>
                    <td>{{$siswa->tempat_lahir}}, {{\Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d-m-Y')}}</td>
                    <td>{{$siswa->jurusan}}</td>
                    <td class="text-center">
                        <a href="{{route('siswa.sunting', $siswa->user->id)}}">
                            <button class="btn btn-sm btn-outline-warning"><em class="icon ni ni-pen"></em></button>
                        </a>
                        <a href="{{route('siswa.detail', $siswa->id)}}">
                            <button class="btn btn-sm btn-outline-info"><em class="icon ni ni-eye"></em></button>
                        </a>
                        <button wire:click="hapus({{$siswa->id}})" class="btn btn-sm btn-outline-danger"><em class="icon ni ni-trash-alt"></em></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white">
            {{$semua_siswa->links()}}
        </div>
    </div>
</div>
