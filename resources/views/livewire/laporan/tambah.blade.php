<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div>
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <div class="card my-2">
            <div class="card-body">
                <div class="card-title">
                    <h5>Upload Laporan Prakerin</h5>
                </div>
                <form wire:submit.prevent="simpan">
                    <div class="form-group">
                        <input wire:model="document" type="file" class="form-control-lg form-control" name="" id="">
                    </div>
                    <button class="btn btn btn-primary">Upload File</button>
                </form>
            </div>
        </div>
    </div>

    <livewire:laporan.semua/>
</div>
