@extends('main')

@section('title', 'fakultas')
    
@section('content')
<h1>Data Fakultas</h1>
<table border="table table-border table-hover">
    <tr>
        <th>No</th>
        <th>Nama fakultas</th>
        <th>Singkatan</th>
        <th>dekan</th>
    </tr>

    @foreach($fakultas as $key => $fakultas )
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $fakultas->nama_fakultas}}</td>
        <td>{{ $fakultas->singkatan }}</td>
        <td>{{ $fakultas->dekan }}</td>
    </tr>
    @endforeach
</table>
@endsection