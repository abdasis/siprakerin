<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="card bg-white">
        <div class="card-header bg-white border-bottom">
            <div class="row justify-between">
                <div class="col-4 my-auto">
                    <h6>Data Laporan Semua Siswa</h6>
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
                <th>Nama Lengkap</th>
                <th>Jurusan</th>
                <th>File</th>
                <th>Tanggal Upload</th>
                <th class="text-center">Option</th>
            </tr>
            </thead>

            <tbody>
            @foreach($semua_laporan as $key => $document)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$document->siswa->nama_lengkap}}</td>
                    <td>{{$document->siswa->jurusan}}</td>
                    <td>{{$document->file_laporan}}</td>
                    <td>{{\Carbon\Carbon::parse($document->create_at)->format('d-F-Y')}}</td>
                    <td class="text-center">
                        <a wire:click="download({{$document->id}})">
                            <button class="btn btn-sm btn-outline-success"><em class="icon ni ni-download-cloud"></em></button>
                        </a>
                        @if(Auth::user()->roles == 'siswa')
                            <a href="{{route('laporan.sunting', $document->id)}}">
                                <button class="btn btn-sm btn-outline-warning"><em class="icon ni ni-edit-alt"></em></button>
                            </a>
                            <button wire:click="delete({{$document->id}})" class="btn btn-sm btn-outline-danger"><em class="icon ni ni-trash-alt"></em> Hapus</button>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white">
        </div>
    </div>
</div>
