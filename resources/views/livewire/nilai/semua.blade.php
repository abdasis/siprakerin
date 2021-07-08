<div>
    {{-- Success is as dangerous as failure. --}}
    <a href="{{route('nilai.tambah')}}">
        <button class="btn btn-primary mb-2"><em class="icon ni ni-note-add"></em>Tambah Nilai</button>
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
                <th>Sikap</th>
                <th>Perilaku</th>
                <th>Keterampilan</th>
                <th>Kerajinan</th>
                <th class="text-center">Option</th>
            </tr>
            </thead>

            <tbody>
            @foreach($semua_nilai as $key => $nilai)
                <tr>
                    <td>{{$nilai->siswa->nama_lengkap}}</td>
                    <td>{{$nilai->sikap}}</td>
                    <td>{{$nilai->perilaku}}</td>
                    <td>{{$nilai->keterampilan}}</td>
                    <td>{{$nilai->kerajinan}}</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white">
        </div>
    </div>
</div>
