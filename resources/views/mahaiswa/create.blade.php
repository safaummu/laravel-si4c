@extends('main')

@section('title', 'Tambah Mahasiswa')
@endsection

@section('content')
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm" value="{{ old('npm') }}" required>
            @error('npm')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="prodi_id" class="form-label">Prodi</label>
            <select class="form-select" id="prodi_id" name="prodi_id" required>
                <option value="" disabled selected>Pilih Prodi</option>
                @foreach ($prodi as $p)
                    <option value="{{ $p->id }}" {{ old('prodi_id') == $p->id ? 'selected' : '' }}>
                        {{ $p->nama_prodi }}
                    </option>
                @endforeach
            </select>
            @error('prodi_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" value="{{ old('foto') }}">
            @error('foto')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection