<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="d-flex flex-row g-1">
        <div class="">
            <a href="{{Auth::user()->roles != 'dudi' ? '#' : route('nilai.tambah')}}">
                <button class="btn btn-primary mb-2"><em class="icon ni ni-note-add"></em>Tambah Nilai</button>
            </a>
        </div>
        <div>
            <select wire:model='jurusan' name="" class="custom-select" id="">
                <option value="">Pilih Jurusan</option>
                @foreach (App\Models\Jurusan::latest()->get() as $j)
                <option value="{{ $j->nama_jurusan }}">{{ $j->nama_jurusan }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="card bg-white">
        <div class="card-header bg-white border-bottom">
            <div class="row justify-between">
                <div class="col-4 my-auto">
                    <h6>Data Nilai Prakerin</h6>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-icon form-icon-left">
                                <em class="icon ni ni-search"></em>
                            </div>
                            <input type="text" class="form-control form-control-sm rounded-pill" id="default-03"
                                placeholder="Pencarian">
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
                    <td>{{$key+1}}</td>
                    <td>{{$nilai->siswa->nama_lengkap}}</td>
                    <td>{{$nilai->sikap}}</td>
                    <td>{{$nilai->perilaku}}</td>
                    <td>{{$nilai->keterampilan}}</td>
                    <td>{{$nilai->kerajinan}}</td>
                    <td class="text-center">
                        <a href="{{route('nilai.sunting', $nilai->id)}}">
                            <button class="btn btn-sm btn-outline-warning"><em class="icon ni ni-pen"></em></button>
                        </a>
                        <button class="btn btn-sm btn-outline-danger"><em class="icon ni ni-trash-alt"></em>
                            Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white">
        </div>
    </div>
    <div class="mt-2">
        @if(!empty($jurusan))
            <a href="{{route('export', $jurusan)}}">
                <button class="btn btn-success float-right">
                    Cetak
                </button>
            </a>
        @endif

    </div>
</div>
