<!-- Menghubungkan dengan view template layouts/app -->
@extends('layouts.app')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">{{ __('Tambah Pegawai') }}</div>

				<div class="card-body">
					<form action="/pegawai/tambah" method="post">
						@csrf

						@if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $key => $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" name="nama" placeholder="Nama" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Jabatan</label>
							<input type="text" name="jabatan" placeholder="Jabatan" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Umur</label>
							<input type="number" name="umur" placeholder="Umur" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<textarea name="alamat" rows="2" cols="20" class="form-control"></textarea>
						</div>
						<a href="/pegawai" class="btn btn-info">Kembali</a>
						<button type="submit" class="btn btn-success" name="submit">Simpan Data</button>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection
