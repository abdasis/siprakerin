<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-white border-bottom">Detail Pengguna</div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('storage') . '/' . $dudi->photo ?? 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png' }}" width="150" class="rounded-circle" alt="">
                        <h5 class="mt-3">{{$dudi->nama_direktur}}</h5>
                        <p class="">{{$dudi->user->email}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-bottom bg-white">Biodata dudi</div>
                <div class="card-body">
                    <table class="table table-borderless table-sm table-responsive">
                        <tr>
                            <td>Nama Perusahaan</td>
                            <td>:</td>
                            <td>{{$dudi->nama_perusahaan}}</td>
                        </tr>

                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td>{{$dudi->telepon}}</td>
                        </tr>

                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td>{{$dudi->jurusan->nama_jurusan}}</td>
                        </tr>

                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{$dudi->alamat}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
