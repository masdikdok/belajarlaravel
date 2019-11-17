<!-- Menghubungkan dengan view template layouts/app -->
@extends('layouts.app')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Article</div>
					<div class="card-body">
						<div class="row justify-content-between">
							<div class="col-md-4">
								<a href="/article/tambah" class="btn btn-success">+ Tambah Article</a>
							</div>
							<div class="col-md-5">
								<form action="/article" method="get" align="right">
									<input type="text" name="cari" value="">
									<button type="submit">Cari</button>
									<button type="button" onclick="document.location.href = '/article'">Reset</button>
								</form>
							</div>
						</div>
						<br>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<th>Judul</th>
									<th>Tag</th>
									<th width="15%" class="text-center">Opsi</th>
								</thead>
								<tbody>
									@if(!empty($articles))
										@foreach($articles as $a)
										<tr>
											<td>{{ $a->judul }}</td>
											<td>{{ $a->tags->count() }}</td>
											<td class="text-center">
												<a href="/article/edit/{{ $a->id }}" class="btn btn-warning">Edit</a>
												<a href="/article/hapus/{{ $a->id }}" class="btn btn-danger" onclick="return confirm('Apa kamu yakin?')">Hapus</a>

											</td>
										</tr>
										@endforeach
									@else
										<tr>
											<td colspan="3" class="text-center">No data available</td>
										</tr>
									@endif
								</tbody>
							</table>


							<br><br>
							Halaman {{ $articles->currentPage() }} <br>
							Jumlah Data {{ $articles->total() }} <br>
							Data Per Halaman {{ $articles->perPage() }} <br>

							<br>
							{{ $articles->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
