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

                nama :{{ $transaksi->user->name }} <br>
                nik :{{ $transaksi->user->ktp }} 
                <br>
                <br>
                <form action="{{ route('transaksi.update', $transaksi ->id)}}" method="post" id="form-nabung" name="nabung">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $transaksi->user_id }}">
                    <div class="form-group">
                        <label for="tabungan">nominal</label>
                        <input type="number" name="tabungan" id="tabungan" class="form-control"
                        value="{{$transaksi->tabungan}}">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">simpan</button>
                </form>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
