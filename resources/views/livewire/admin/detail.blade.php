<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Detail Pengguna</div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" width="150" class="rounded-circle" alt="">
                        <h5 class="mt-3">{{Auth::user()->name}}</h5>
                        <p class="">{{Auth::user()->email}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Biodata Admin</div>
                <div class="card-body">
                    <table class="table table-stripped table-sm table-responsive">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>{{Auth::user()->name}}</td>
                        </tr>

                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{$admin->jabatan}}</td>
                        </tr>

                        <tr>
                            <td>Title</td>
                            <td>:</td>
                            <td>{{$admin->title}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
