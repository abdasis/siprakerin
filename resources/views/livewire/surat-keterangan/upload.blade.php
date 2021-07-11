<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="card my-2">
        <div class="card-body">
            <div class="card-title">
                <h5>Upload Surat Keterangan Orang Tua</h5>
            </div>
            <form wire:submit.prevent="simpan">
                <div class="form-group">
                    <input wire:model="file" type="file" class="form-control-lg form-control" name="" id="">
                </div>
                <button class="btn btn btn-primary">Upload Surat</button>
            </form>
        </div>
    </div>
</div>
