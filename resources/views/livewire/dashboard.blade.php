<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @if(Auth::user()->roles == 'siswa')
        @if(empty($absensi))
            <livewire:absensi.tambah/>
            <livewire:surat-keterangan.upload/>
        @else
            <div class="alert alert-success">Anda sudah melakukan absensi, dan tidak dapat mengulangi absensi lagi</div>
        @endif
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
                        <th>File</th>
                        <th>Keterangan</th>
                        <th class="text-center">Option</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(\App\Models\Document::latest()->paginate(25) as $key => $document)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$document->nama_dokumen}}</td>
                            <td>{{$document->file}}</td>
                            <td>{!! Str::limit($document->diskripsi, 150) !!}</td>
                            <td class="text-center">
                                <a wire:click.prevent="download({{$document->id}})" href="{{route('document.sunting', $document->id)}}">
                                    <button class="btn btn-sm btn-outline-success"><em class="icon ni ni-download-cloud"></em></button>
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
    @endif

   @if(Auth::user()->roles == 'admin')
        <section class=" card mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="nk-order-ovwg-data buy">
                            <div class="amount">{{\App\Models\Siswa::count()}} <small class="currenct currency-usd">Orang</small></div>
                            <div class="info">TOTAL SISWA</div>
                            <div class="title"><a href="{{route('siswa.semua')}}" class="text-success"><em class="icon ni ni-arrow-down-left"></em> Lihat Semua</a></div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="nk-order-ovwg-data sell">
                            <div class="amount">{{\App\Models\Dudi::count()}} <small class="currenct currency-usd">Orang</small></div>
                            <div class="info">TOTAL DIDUKA</div>
                            <div class="title"><a href="{{route('dudi.semua')}}" class="text-indigo"><em class="icon ni ni-arrow-down-left"></em> Lihat Semua</a></div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="nk-order-ovwg-data buy">
                            <div class="amount">{{\App\Models\Dudi::count()}} <small class="currenct currency-usd">Orang</small></div>
                            <div class="info">TOTAL ADMIN</div>
                            <div class="title"><a href="{{route('admin.semua')}}" class="text-success"><em class="icon ni ni-arrow-down-left"></em> Lihat Semua</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                    <th>File</th>
                    <th>Keterangan</th>
                    <th class="text-center">Option</th>
                </tr>
                </thead>

                <tbody>
                @foreach(\App\Models\Document::latest()->paginate(25) as $key => $document)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$document->nama_dokumen}}</td>
                        <td>{{$document->file}}</td>
                        <td>{!! Str::limit($document->diskripsi, 150) !!}</td>
                        <td class="text-center">
                            <a href="{{route('document.sunting', $document->id)}}">
                                <button class="btn btn-sm btn-outline-warning"><em class="icon ni ni-pen"></em></button>
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
    @endif
</div>
