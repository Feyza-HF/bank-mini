@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if(Auth::user()->peran == 'admin')
                <a href="{{ route('home')}}" class="btn btn-danger">kembali</a>
                <form action="{{ route('users.update', $edit->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="ktp">nik</label>
                        <input type="text" name="ktp" class="form-control" value="{{ $edit->ktp }}" required>
                        @error('ktp')
                        <span class= text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $edit->name }}" required>
                        @error('name')
                        <span class= text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" class="form-control" value="{{ $edit->email }}" required>
                        @error('email')
                        <span class= text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" name="password" class="form-control" >
                        @error('password')
                        <span class= text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="hp">hp</label>
                        <input type="text" name="hp" class="form-control" value="{{ $edit->hp }}" required>
                        @error('hp')
                        <span class= text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="peran">peran</label>
                    <select name="peran" class="form-control" required>
                        <option @if($edit->peran == 'admin') selected @endif value="admin">admin</option>
                        <option @if($edit->peran == 'teller') selected @endif value="teller">teller</option>
                        <option @if($edit->peran == 'nasabah') selected @endif value="nasabah" selected>nasabah</option>
                    </select>
                    @error('peran')
                        <span class= text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary mt-3">simpan</button>
                </form>

                @else
                <h1>anda tidak memiliki akses ke halaman ini</h1>
                <a href="{{ route('home')}}">kembali</a>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
