<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Edit Pegawai')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<a href="/pegawai">Kembali</a>
    <br>
    <br>
    <form action="/pegawai/edit" method="post">
        {{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $pegawai->id }}">
        <div>
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Nama" value="{{ $pegawai->nama }}">
        </div>
        <div>
            <label for="">Jabatan</label>
            <input type="text" name="jabatan" placeholder="Jabatan" value="{{ $pegawai->jabatan }}">
        </div>
        <div>
            <label for="">Umur</label>
            <input type="number" name="umur" placeholder="Umur" value="{{ $pegawai->umur }}">
        </div>
        <div>
            <label for="">Alamat</label>
            <textarea name="alamat" rows="2" cols="20">{{ $pegawai->alamat }}</textarea>
        </div>
        <input type="submit" name="submit" value="Simpan Data">

    </form>

@endsection
