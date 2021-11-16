<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card bg-white">
        <div class="card-header bg-white border-bottom">
            <div class="row justify-between">
                <div class="col-4 my-auto">
                    <h6>Semua Dudi</h6>
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
                <th>Nama Perusahaan</th>
                <th>Nama Direktur</th>
                <th>Nama Pembimbing</th>
                <th>Email</th>
                <th>Telepon</th>
                <th class="text-center">Option</th>
            </tr>
            </thead>

            <tbody>
            @foreach($semua_dudi as $key => $dudi)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$dudi->nama_perusahaan}}</td>
                    <td>{{$dudi->nama_direktur}}</td>
                    <td>{{$dudi->nama_pembimbing}}</td>
                    <td>{{$dudi->user->email}}</td>
                    <td>{{$dudi->telepon}}</td>
                    <td class="text-center">
                        <a href="{{route('dudi.sunting', $dudi->id)}}">
                            <button class="btn btn-sm btn-outline-warning"><em class="icon ni ni-pen"></em></button>
                        </a>
                        <a href="{{route('dudi.detail', $dudi->id)}}">
                            <button class="btn btn-sm btn-outline-info"><em class="icon ni ni-eye"></em></button>
                        </a>
                        <button wire:click="hapus({{$dudi->id}})" class="btn btn-sm btn-outline-danger"><em class="icon ni ni-trash-alt"></em></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white">
            {{$semua_dudi->links()}}
        </div>
    </div>
</div>
