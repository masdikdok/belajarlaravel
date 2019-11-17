<!-- Menghubungkan dengan view template layouts/app -->
@extends('layouts.app')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">{{ __('Edit Pegawai') }}</div>

				<div class="card-body">
				    <form action="/pegawai/edit" method="post">
				        {{ csrf_field() }}
						<input type="hidden" name="id" value="{{ $pegawai->id }}">
				        <div class="form-group">
				            <label for="">Nama</label>
				            <input type="text" name="nama" placeholder="Nama" class="form-control" value="{{ $pegawai->nama }}">
				        </div>
				        <div class="form-group">
				            <label for="">Jabatan</label>
				            <input type="text" name="jabatan" placeholder="Jabatan" class="form-control" value="{{ $pegawai->jabatan }}">
				        </div>
				        <div class="form-group">
				            <label for="">Umur</label>
				            <input type="number" name="umur" placeholder="Umur" class="form-control" value="{{ $pegawai->umur }}">
				        </div>
				        <div class="form-group">
				            <label for="">Alamat</label>
				            <textarea name="alamat" rows="2" cols="20" class="form-control">{{ $pegawai->alamat }}</textarea>
				        </div>
						<div class="form-group">
							<a href="{{ url('/pegawai') }}" class="btn btn-info">Kembali</a>
							<button type="submit" name="submit" class="btn btn-success">Update Pegawai</button>
						</div>

				    </form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
