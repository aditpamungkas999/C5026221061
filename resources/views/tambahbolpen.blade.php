@extends('master')

@section('title', 'Tambah Data Bolpen')


@section('konten')

    <h3>Data Bolpen</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/bolpen/store" method="post" class="form-horizontal col-5">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="merkbolpen" class="col">merk bolpen</label>
            <input type="text" class="form-control col" placeholder="Masukkan merk bolpen" name="merkbolpen">
        </div>
        <div class="form-group row">
            <label for="stockbolpen" class="col">stock bolpen</label>
            <input type="number" class="form-control col" placeholder="Masukkan stock" name="stockbolpen">
        </div>

        <input type="submit" class="btn btn-primary" value="Simpan Data">

    </form>


@endsection
