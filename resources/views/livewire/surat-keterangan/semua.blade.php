<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card bg-white">
        <div class="card-header bg-white border-bottom">
            <div class="row justify-between">
                <div class="col-4 my-auto">
                    <h6>Data Surat Keterangan</h6>
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
                <th>Nama File</th>
                <th>File</th>
                <th>Keterangan</th>
                <th class="text-center">Option</th>
            </tr>
            </thead>

            <tbody>
            @foreach(\App\Models\SuratKeterangan::paginate(25) as $key => $document)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$document->siswa->nama_lengkap}}</td>
                    <td>{{$document->file}}</td>
                    <td>Setuju</td>
                    <td class="text-center">
                        <a wire:click.prevent="download({{$document->id}})" href="{{route('document.sunting', $document->id)}}">
                            <button class="btn btn-sm btn-outline-success"><em class="icon ni ni-eye-alt"></em></button>
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


