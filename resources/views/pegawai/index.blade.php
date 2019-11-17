<!-- Menghubungkan dengan view template layouts/app -->
@extends('layouts.app')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Tentang</div>
					<div class="card-body">
						<div class="row justify-content-between">
							<div class="col-md-4">
								<a href="/pegawai/tambah" class="btn btn-success">+ Tambah Pegawai Baru</a>
							</div>
							<div class="col-md-5">
								<form action="/pegawai" method="get" align="right">
									<input type="text" name="cari" value="">
									<button type="submit">Cari</button>
									<button type="button" onclick="document.location.href = '/pegawai'">Reset</button>
								</form>
							</div>
						</div>
						<br>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<th>Nama</th>
									<th>Jabatan</th>
									<th>Umur</th>
									<th>Alamat</th>
									<th width="15%" class="text-center">Opsi</th>
								</thead>
								<tbody>
									@foreach($pegawai as $p)
									<tr>
										<td>{{ $p->nama }}</td>
										<td>{{ $p->jabatan }}</td>
										<td>{{ $p->umur }}</td>
										<td>{{ $p->alamat }}</td>
										<td class="text-center">
											<a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
											<a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger" onclick="return confirm('Apa kamu yakin?')">Hapus</a>
											
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
