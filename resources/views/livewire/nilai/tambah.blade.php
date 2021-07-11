<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        <div class="card-header bg-white border-bottom">
            <h5>Entry Nilai Siswa</h5>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="simpan">
                <div class="form-group">
                    <label for="" class="form-label">Pilih Siswa</label>
                    <select name="" class="form-control" wire:model="siswa_id" id="">
                        <option value="">Pilih Siswa</option>
                        @foreach($dudi->siswa as $siswa)
                            <option value="{{$siswa->id}}">{{$siswa->nama_lengkap}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Nilai Sikap</label>
                    <input type="text" class="form-control" name="" id="" wire:model="sikap">
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Nilai Perilaku</label>
                    <input type="text" class="form-control" name="" id="" wire:model="perilaku">
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Nilai Keterampilan</label>
                    <input type="text" class="form-control" name="" id="" wire:model="keterampilan">
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Nilai Kerajinan</label>
                    <input type="text" class="form-control" name="" id="" wire:model="kerajinan">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Simpan Nilai</button>
                </div>
            </form>
        </div>
    </div>
</div>
