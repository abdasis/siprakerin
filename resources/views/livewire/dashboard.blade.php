<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @if(empty($absensi))
        <livewire:absensi.tambah/>
    @else
        <div class="alert alert-success">Anda sudah melakukan absensi, dan tidak dapat mengulangi absensi lagi</div>
    @endif
</div>
