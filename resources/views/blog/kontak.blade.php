<!-- Menghubungkan dengan view template layouts/app -->
@extends('layouts.app')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Kontak</div>
					<div class="card-body">
						<p>Ini Adalah Halaman Kontak</p>

						<table class="table table-striped">
							<tr>
								<td>Email</td>
								<td>:</td>
								<td>malasngoding@gmail.com</td>
							</tr>
							<tr>
								<td>Hp</td>
								<td>:</td>
								<td>0896-0676-7404</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
