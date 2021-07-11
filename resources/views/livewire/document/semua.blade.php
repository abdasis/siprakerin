<div>
    {{-- Success is as dangerous as failure. --}}
    <a href="{{Auth::user()->roles != 'admin' ? '#' : route('document.tambah')}}">
        <button class="btn btn-primary mb-2" ><em class="icon ni ni-note-add"></em>Tambah Document</button>
    </a>
    <div class="card bg-white">
        <div class="card-header bg-white border-bottom">
            <div class="row justify-between">
                <div class="col-4 my-auto">
                    <h6>Data Nilai</h6>
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
                <th>File</th>
                <th>Keterangan</th>
                <th class="text-center">Option</th>
            </tr>
            </thead>

            <tbody>
            @foreach($semua_document as $key => $document)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$document->nama_dokumen}}</td>
                    <td>{{$document->file}}</td>
                    <td>{!! Str::limit($document->diskripsi, 150) !!}</td>
                    <td class="text-center">
                        <a href="{{route('document.sunting', $document->id)}}">
                            <button class="btn btn-sm btn-outline-warning"><em class="icon ni ni-pen"></em></button>
                        </a>
                        <button class="btn btn-sm btn-outline-danger"><em class="icon ni ni-trash-alt"></em> Hapus</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white">
        </div>
    </div>
</div>
