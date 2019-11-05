<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Pegawai')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<a href="/pegawai/tambah">+ Tambah Pegawai Baru</a>
    <br>
    <br>

	<table border="1">
		<thead>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->jabatan }}</td>
                <td>{{ $p->umur }}</td>
                <td>{{ $p->alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->id }}">Edit</a> | <a href="/pegawai/hapus/{{ $p->id }}" onclick="return confirm('Apa kamu yakin?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
	</table>


@endsection
