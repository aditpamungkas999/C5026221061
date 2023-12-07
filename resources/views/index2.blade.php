@extends('master2')
@section('judulhalaman','Nilai Kuliah')

@section('konten')
	<h2>Nilai Kuliah Mahasiswa Sistem Informasi ITS</h2>

	<a href="/nilaikuliah/tambah2" class="btn btn-primary"> + Tambah Nilai Baru</a>

	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>NilaiAngka</th>
			<th>SKS</th>
			<th>NilaiHuruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                @if ($n->NilaiAngka <= 40)D
                @elseif ($n->NilaiAngka >= 41 && $n->NilaiAngka <= 60)C
                @elseif ($n->NilaiAngka >= 61 && $n->NilaiAngka <= 80)B
                @else A
                @endif
            </td>
            <td>
                {{$n->NilaiAngka * $n->SKS}}
            </td>
		</tr>
		@endforeach
	</table>
    {{$nilaikuliah->links() }}

@endsection