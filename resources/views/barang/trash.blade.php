@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Trash Barang</div>
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col">
                                <a href="{{ url('/barang' )}}" class="btn btn-info">{{ __('Kembali') }}</a>
                            </div>
                            <div class="col">
                                <form class="" action="{{ url('/barang') }}" method="get" align="right">
                                    <input type="text" name="cari">
                                    <button type="submit">{{ __('Cari') }}</button>
                                    <button type="button" onclick="document.location.href = '/barang'">Reset</button>
                                </form>
                            </div>
                        </div>

                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Cabang ID</th>
                                        <th>Status</th>
                                        <th>Deleted At</th>
                                        <th width="20%" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($barang))
                                        @foreach($barang as $key => $item)
                                            <tr>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->cabang_id }}</td>
                                                <td >{{ (!empty($item->status)) ? 'Active' : 'Inactive' }}</td>
                                                <td>{{ $item->deleted_at }}</td>
                                                <td class="text-center">
                                                    <a href="{{ url('/barang/restore', ['id' => $item->id])}}" class="btn btn-warning">{{ __('Restore') }}</a>
                                                    <a class="btn btn-danger" onclick="event.preventDefault(); document.querySelector('#delete-form-' + {{ $item->id }}).submit(); ">{{ __('Force Delete') }}</a>

                                                    <form id="delete-form-{{ $item->id }}" action="{{ url('/barang/forcedelete') }}" method="POST" style="display: none;">
        		                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $item->id }}">
        		                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" class="text-center">No data avaible</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
