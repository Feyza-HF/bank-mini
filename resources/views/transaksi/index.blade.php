@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if(Auth::user()->peran == 'teller')
                <a href="{{route('home')}}" class="btn btn-warning">kembali</a>
                <a href="{{ route('transaksi.create')}}" class="btn btn-primary">tambah transaksi</a>            
                <br>
                <br>
                <table class="table">
                    <tr>
                        <th>no</th>
                        <th>tanggal transaksi</th>
                        <th>nasabah</th>
                        <th>nominal</th>
                        <th>aksi</th>
                    </tr>
                    @foreach($semuaTransaksi as $st)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $st->created_at }}</td>
                        <td>{{ $st->user->name }}</td>
                        <td>{{ $st->tabungan }}</td>
                        <td>
                            <a href="{{route('transaksi.delete', $st->id) }}" class="btn btn-danger">hapus</a>
                            <a href="{{route('transaksi.edit', $st->id)}}" class="btn btn-warning">edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
