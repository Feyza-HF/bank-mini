@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  @if(Auth::user()->peran == 'admin')
                    <h1>selamat datang admin</h1>
                    <a href="{{ route('users.index')}}" class="btn btn-primary">user/nasabah</a>
                    <a href="{{ route('admin.laporan.cetak')}}" target="_blank" class="btn btn-primary">laporan</a>
                  @elseif(Auth::user()->peran == 'teller')
                    <h1>selamat datang teller</h1>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Transaksi</a>
                  @elseif(Auth::user()->peran == 'nasabah')
                    <h1>selamat datang nasabah</h1>
                    <a href="{{ route('nasabah.index')}}" class="btn btn-primary">laporan</a>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
