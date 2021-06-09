<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-white border-bottom">Detail Pengguna</div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('storage') . '/' . $siswa->photo ?? 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png' }}" width="150" class="rounded-circle" alt="">
                        <h5 class="mt-3">{{$siswa->nama_lengkap}}</h5>
                        <p class="">{{$siswa->user->email}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-bottom bg-white">Biodata Admin</div>
                <div class="card-body">
                    <table class="table table-borderless table-sm table-responsive">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$siswa->nama_lengkap}}</td>
                        </tr>

                        <tr>
                            <td>NIS</td>
                            <td>:</td>
                            <td>{{$siswa->nis}}</td>
                        </tr>

                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{$siswa->jenis_kelamin}}</td>
                        </tr>

                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>{{$siswa->tempat_lahir}}</td>
                        </tr>

                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$siswa->tanggal_lahir}}</td>
                        </tr>

                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{$siswa->alamat}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
