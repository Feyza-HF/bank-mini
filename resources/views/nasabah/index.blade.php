@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">Beranda Nasabah</div>

                <div class="card-body">
                @if(Auth::user()->peran == 'nasabah')
                <a href="{{ route('home')}}" class="btn btn-danger">kembali</a>
                <a href="{{route('nasabah.cetak')}}" target="_blank" class="btn btn-primary">cetak laporan</a>
                <br>
                <br>
                <h1>detail nasabah</h1>
                <table class="table table-bordered">
                <tr>
                        <th>nama</th>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th>saldo</th>
                        <td>{{ Auth::user()->transaksi->sum('tabungan') }}</td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <tr>
                        <th>no</th>
                        <th>tanggal transaksi</th>
                        <th>nominal</th>
                    </tr>
                    @foreach($semuaTrans as $st)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td> {{ $st->created_at }}</td>
                        <td> {{ $st->tabungan }}</td>
                    </tr>
                    @endforeach
                </table>
                @else
                <h1>anda tidak memiliki akses ke halaman ini</h1>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
