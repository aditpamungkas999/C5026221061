@extends('master2')
@section('judulhalaman','Nilai Kuliah')

@section('konten')

	<h2><a href="https://www.its.ac.id/">Institut Teknologi Sepuluh Nopember</a></h2>
	<h3>Nilain Kuliah Mahasiswa</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/add" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-md-2 col-form-label mr-2">NRP</label>
            <div class="col-xs-">
            <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col-md-2 col-form-label mr-2">Nilai Angka</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="jabatan" name="NilaiAngka">
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-md-2 col-form-label mr-2">SKS</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="SKS" name="SKS">
            </div>
     
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
 
