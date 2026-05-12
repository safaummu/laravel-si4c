@extends('main')

@section('title', 'fakultas')
    
@section('content')
<a href="{{route('fakultas.create')}}" class="btn btn-primary mb-3">Tambah Fakultas</a>
<h1>Data Fakultas</h1>
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>Nama fakultas</th>
        <th>Singkatan</th>
        <th>dekan</th>
    </tr>

    @foreach($fakultas as $key => $fakultas )
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $fakultas->nama}}</td>
        <td>{{ $fakultas->Singkatan }}</td>
        <td>{{ $fakultas->dekan }}</td>
    </tr>
    @endforeach
</table>
@endsection