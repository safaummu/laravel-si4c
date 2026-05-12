@extends('main')

@section('title', 'periode')

@section('content')
<a href="{{route('periode.create')}}" class="btn btn-primary mb-3">Tambah Periode</a>
<h1>Data Periode</h1>
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>tahun_akademik</th>
        <th>semester</th>
    </tr>

    @foreach($periode as $key => $periode )
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $periode->tahun_akademik}}</td>
        <td>{{ $periode->semester }}</td>
    </tr>
    @endforeach

@endsection