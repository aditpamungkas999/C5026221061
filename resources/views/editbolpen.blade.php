@extends('master2')
@section('JudulHalaman', 'Bolpen')
@section('konten')
    <h3>Edit Bolpen</h3>

    <a href="/bolpen" class="btn btn-info"> Kembali</a>
    <br />

    @foreach ($bolpen as $b)
        <form action="/bolpen/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="kodebolpen" value="{{ $b->kodebolpen }}"> <br />
            <div class="form-group row">
                <label for="merkBolpen" class="col-2 col-form-label mr-2">Merk</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="merkbolpen" name="merkbolpen" value="{{ $b->merkbolpen }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="stockBolpen" class="col-2 col-form-label mr-2">Stock</label>
                <div class="col-8">
                    <input type="number" class="form-control" id="stockbolpen" name="stockbolpen" value="{{ $b->stockbolpen }}">
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach

@endsection
