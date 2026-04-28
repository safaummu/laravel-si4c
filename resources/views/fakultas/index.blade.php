<h2>Data Fakultas</h2>
@foreach ($result as $item)
    {{ $item->nama_fakultas }} - {{ $item->singkatan}} - {{ $item->dekan}}<br/>
@endforeach
