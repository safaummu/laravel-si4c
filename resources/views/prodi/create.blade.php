@extends('main')

@section('title','tambah fakultas')

@section('content')
    <form action={{ route('fakultas.store')}} method="post">
        @csrf
        <div class="m-3">
            <h5>Form Pengisian Data Fakultas</h5>
            <label for="nama" class="form-label">Nama Fakultas</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama fakultas..">
            @error('nama')
            <div class="text-danger">{{$message}}</div>
            @enderror

            <label for="Singkatan" class="form-label">Singkatan Fakultas</label>
            <input type="text" class="form-control" id="Singkatan" name="Singkatan" placeholder="Masukkan nama dekan fakultas..">
            @error('Singkatan')
            <div class="text-danger">{{$message}}</div>
            @enderror

            <label for="dekan" class="form-label">Nama Dekan Fakultas</label>
            <input type="text" class="form-control" id="dekan" name="dekan" placeholder="Masukkan nama dekan fakultas..">
            @error('dekan')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </div>
    </form>
@endsection