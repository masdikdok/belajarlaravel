@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Tambah Barang</div>
                    <div class="card-body">
                        <form class="" action="{{ url('/barang/tambah') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" autocomplete="false" autofocus>

                                @error('nama')
                                    <span class="invalid-feedback" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="cabang_id">Cabang ID</label>
                                <input type="number" name="cabang_id" class="form-control" id="cabang_id" placeholder="Cabang ID" autocomplete="false" autofocus>
                                @error('cabang_id')
                                    <span class="invalid-feedback" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status">
                                    <option value="" selected disabled>-- Choose status --</option>
                                    <option value="0" >Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('/barang') }}" class="btn btn-info">Kembali</a>
                                <button type="submit" name="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
