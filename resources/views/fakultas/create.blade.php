@extends('main')

@section('title', 'Tambah Fakultas')

@section('content')
    <form action="{{ route('fakultas.store') }}" method="post">
        <div class="form-group">
            <label for="nama">Nama Fakultas</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="Singkatan">Singkatan</label>
            <input type="text" name="Singkatan" class="form-control" value="{{ old('Singkatan') }}">
            @error('Singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="dekan">Dekan</label>
            <input type="text" name="dekan" class="form-control" value="{{ old('dekan') }}">
            @error('dekan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
@endsection
