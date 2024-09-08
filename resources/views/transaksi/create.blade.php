@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if(Auth::user()->peran == 'teller')
                <a href="{{route('transaksi.index')}}" class="btn btn-warning">kembali</a>
                <br>
                <br>
                <form action="{{ route('transaksi.cari') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="ktp">nasabah</label>
                        <input type="text" name="ktp" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">cari</button>
                </form>
                <br>
                @isset($nasabah)
                nama : {{$nasabah->name}} <br>
                nik : {{$nasabah->ktp}} <br>
                <form action="{{route('transaksi.store')}}" method="post" id="form-nabung" name="nabung">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $nasabah->id }}">
                    <div class="form-group">
                        <label for="tabungan">nominal</label>
                        <input type="number" name="tabungan" id="tabungan" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>

                @else
                <div class="alert alert-danger">
                    nasabah tidak ditemukan
                </div>
                @endisset

                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
