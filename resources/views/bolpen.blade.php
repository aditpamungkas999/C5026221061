@extends('master')

@section('title','Data Bolpen')


@section('konten')
    <h3>Data Bolpen</h3>


    <a href="/bolpen/tambah" class="btn btn-primary"> + Tambah Data Bolpen</a>

    <br/>
    <p>Cari Data Bolpen Berdasarkan Nama Merk:</p>
	<form action="/bolpen/cari" method="GET">
		<input class="form-control fluid" type="text" name="cari" placeholder="Cari Merk Bolpen" value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary " type="submit" value="CARI">
	</form>
    <br/>

    <table class="table table-striped table-hover rounded">
        <tr class="bg-primary text-white text-center row">
            <th class="col-2">Merk Bolpen</th>
            <th class="col-2">Stock Bolpen</th>
            <th class="col-1">Tersedia</th>
        </tr>
        @foreach ($bolpen as $b)
            <tr class="row">
                <td class="col-2">{{ $b->merkbolpen }}</td>
                <td class="col-2 text-center">{{ $b->stockbolpen }}</td>
                <td class="col-1 text-center">{{ $b->tersedia }}</td>
                <td class="col-3">
                    <a href="/bolpen/view/{{ $b->kodebolpen }}" class="btn btn-success">View</a>
                    <a href="/bolpen/edit/{{ $b->kodebolpen }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/bolpen/hapus/{{ $b->kodebolpen }} " class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$bolpen->links()}}
@endsection
