<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5>Upload Document</h5>
                        <form wire:submit.prevent="simpan">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Nama Dokumen</label>
                                <input type="text" name="" class="form-control" wire:model="nama_document" id="">
                                @error('nama_document')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label for="" class="form-label">Document</label>
                                <input type="file" name="" class="form-control" wire:model="document" id="">
                                @error('document')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2" wire:ignore>
                                <label for="" class="form-label">Diskripsi</label>
                                <textarea name="" id="diskripsi" cols="30" rows="10"></textarea>
                                @error('diskripsi')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Simpan Document</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('js')
    <script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            height: 400,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                    @this.set('diskripsi', editor.getContent());
                });
            },
        });
    </script>
@endpush
