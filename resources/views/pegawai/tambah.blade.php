<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Tambah Pegawai')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<a href="/pegawai">Kembali</a>
    <br>
    <br>
    <form action="/pegawai/tambah" method="post">
        {{ csrf_field() }}

        <div>
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Nama">
        </div>
        <div>
            <label for="">Jabatan</label>
            <input type="text" name="jabatan" placeholder="Jabatan">
        </div>
        <div>
            <label for="">Umur</label>
            <input type="number" name="umur" placeholder="Umur">
        </div>
        <div>
            <label for="">Alamat</label>
            <textarea name="alamat" rows="2" cols="20"></textarea>
        </div>
        <input type="submit" name="submit" value="Simpan Data">

    </form>

@endsection
