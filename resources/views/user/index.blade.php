@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">Beranda Admin - User / Nasabah</div>

                <div class="card-body">
                @if(Auth::user()->peran == 'admin')
                <a href="{{ route('home')}}" class="btn btn-danger">kembali</a>
                <a href="{{route('users.create')}}" class="btn btn-primary">tambah user/nasabah</a>
                <br>
                <br>
                <table class="table">
                    <tr>
                        <th>no</th>
                        <th>nik</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>hp</th>
                        <th>peran</th>
                        <th>aksi</th>
                    </tr>
                    @foreach($users as $u)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$u->ktp}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->hp}}</td>
                        <td>{{$u->peran}}</td>
                        <td>
                            <a href="{{ route('users.delete', $u->id)}}" class="btn btn-danger">hapus</a>
                            <a href="{{ route('users.edit', $u->id)}}" class="btn btn-warning">edit</a>
                            @if($u->peran=='nasabah')
                            <a href="{{ route('admin.laporan.cetak.pilih', $u->id)}}" class="btn btn-success">cetak</a>
                            @endif
                        </td>
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
