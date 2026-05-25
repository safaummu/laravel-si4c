@extends('main')

@section('title', 'tambah mahasiwa')

@section('content')
<h2></h2>
<a href={{route('mahasiswa.create')}} class="btn btn-primary mb-3">Tambah Program Studi</a>
    @session('success')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession
<table class="table table-bordered table-hover">
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

    @foreach($mahasiswa as $key => $mhs)
    <tr>
        <td>{{ $mhs->npm }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->prodi->nama_prodi ?? '-' }}</td>
        <td>
            @if ($mhs->foto)<img src="{{asset ('storage/' . $mhs->foto)}}" alt="Foto" width="50">   
            @else
               <span class="text-muted">tidak ada foto</span> 
            @endif
        </td>
        <td>
                <form method="POST" action="{{ route('prodi.destroy', $prodi->id) }}">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                    data-toggle="tooltip" title='Delete'
                    data-nama_prodi='{{ $prodi->nama_prodi }}'>Hapus</button>
                </form>
    </tr>
    @endforeach

</table>
@endsection