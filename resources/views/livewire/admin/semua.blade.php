<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card bg-white">
        <div class="card-header bg-white border-bottom">
            <div class="row justify-between">
                <div class="col-4 my-auto">
                    <h6>Semua Admin</h6>
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
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Option</th>
                </tr>
                </thead>

                <tbody>
                @foreach($semua_admin as $key => $admin)
                    <tr>
                        <td>{{$admin->nama_lengkap}}</td>
                        <td>{{$admin->jabatan}}</td>
                        <td>{{$admin->title}}</td>
                        <td>{{$admin->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
