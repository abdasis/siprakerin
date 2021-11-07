<table>
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama Siswa</th>
        <th>Jurusan</th>
        <th>Prilaku</th>
        <th>Sikap</th>
        <th>Kerajinan</th>
        <th>Keterampilan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($semua_nilai as $key => $nilai)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $nilai->siswa->nama_lengkap }}</td>
            <td>{{ $nilai->siswa->jurusan }}</td>
            <td>{{ $nilai->perilaku }}</td>
            <td>{{ $nilai->sikap }}</td>
            <td>{{ $nilai->kerajinan }}</td>
            <td>{{ $nilai->keterampilan }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
