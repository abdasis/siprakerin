<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card bg-white">
        <div class="card-header bg-white border-bottom">
            <div class="row justify-between">
                <div class="col-4 my-auto">
                    <h6>Data Hadir Siswa Prakerin</h6>
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
                <th>Tanggal Absensi</th>
                <th>Status</th>
                <th>Dibuat Pada</th>
                <th class="text-center">Option</th>
            </tr>
            </thead>

            <tbody>
            @foreach($semua_absensi as $key => $absensi)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$absensi->tanggal_absensi}}</td>
                    <td>{{Str::upper($absensi->status)}}</td>
                    <td> {{\Carbon\Carbon::parse($absensi->created_at)->format('d-m-Y')}}</td>
                    <td class="text-center">
                        <button wire:click="setujui({{$absensi->id}})" class="btn btn-sm btn-outline-success"><em class="icon ni ni-check"></em> Setujui</button>
                        <button wire:click="absen({{$absensi->id}})" class="btn btn-sm btn-outline-danger"><em class="icon ni ni-signout"></em> Tidak Masuk</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white">
            {{$semua_absensi->links()}}
        </div>
    </div>
</div>
