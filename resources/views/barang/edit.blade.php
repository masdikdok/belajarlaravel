<!-- Menghubungkan dengan view template layouts/app -->
@extends('layouts.app')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">{{ __('Edit Barang') }}</div>

				<div class="card-body">
					<form action="/barang/edit" method="post">
						@csrf
						<input type="hidden" name="id" value="{{ $barang->id }}">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $barang->nama }}" placeholder="Nama" autocomplete="false" autofocus>

                            @error('nama')
                                <span class="invalid-feedback" role="alert" style="display: block;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cabang_id">Cabang ID</label>
                            <input type="number" name="cabang_id" class="form-control" id="cabang_id" value="{{ $barang->cabang_id }}" placeholder="Cabang ID" autocomplete="false" autofocus>
                            @error('nama')
                                <span class="invalid-feedback" role="alert" style="display: block;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status">
                                <option value="" <?= (empty($barang->status)) ? 'selected' : '' ?> disabled>-- Choose status --</option>
                                <option value="0" <?= ((int) $barang->status === 0) ? 'selected' : '' ?> >Inactive</option>
                                <option value="1" <?= ((int) $barang->status === 1) ? 'selected' : '' ?>>Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('/barang') }}" class="btn btn-info">Kembali</a>
                            <button type="submit" name="submit" class="btn btn-success">Edit</button>
                        </div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection
