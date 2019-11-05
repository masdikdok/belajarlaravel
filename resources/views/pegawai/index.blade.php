<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Pegawai')

@section('css_tambahan')
<style>
	.pagination li{
		list-style-type: none;
		display: inline-block;
	}
</style>
@endsection

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<a href="/pegawai/tambah">+ Tambah Pegawai Baru</a>
    <br>
    <br>

	<form action="/pegawai" method="get" align="right">
		<input type="text" name="cari" value="">
		<button type="submit">Cari</button>
		<button type="button" onclick="document.location.href = '/pegawai'">Reset</button>
	</form>
	<br>

	<table border="1" width="100%">
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

	<br><br>
	Halaman {{ $pegawai->currentPage() }} <br>
	Jumlah Data {{ $pegawai->total() }} <br>
	Data Per Halaman {{ $pegawai->perPage() }} <br>

	<br>
	{{ $pegawai->links() }}


@endsection
