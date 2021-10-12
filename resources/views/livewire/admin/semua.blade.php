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
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Jabatan</th>
                <th>Title</th>
                <th class="text-center">Option</th>
            </tr>
            </thead>

            <tbody>
            @foreach($semua_admin as $key => $admin)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$admin->nama_lengkap}}</td>
                    <td>{{$admin->user->email}}</td>
                    <td>{{$admin->jabatan}}</td>
                    <td>{{$admin->title}}</td>
                    <td class="text-center">
                        <a href="{{route('admin.edit', $admin->user->id)}}">
                            <button class="btn btn-sm btn-outline-warning"><em class="icon ni ni-pen"></em></button>
                        </a>
                        <a href="{{route('admin.detail', $admin->id)}}">
                            <button class="btn btn-sm btn-outline-info"><em class="icon ni ni-eye"></em></button>
                        </a>
                        <button wire:click="hapus({{$admin->id}})" class="btn btn-sm btn-outline-danger"><em class="icon ni ni-trash-alt"></em></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white">
            {{$semua_admin->links()}}
        </div>
    </div>
</div>
