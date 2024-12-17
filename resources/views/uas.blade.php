@extends('template')

@section('tulisan1','UAS')
@section('link1')
	<a href="/uas/tambah" class="btn btn-primary">Tambah Data</a>
@endsection

@section('konten')

<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>
    @foreach($nilaikuliah as $n)
    <tr>
        <td>{{ $n->ID }}</td>
        <td>{{ $n->NRP }}</td>
        <td>{{ $n->NilaiAngka }}</td>
        <td>{{ $n->SKS }}</td>
        <td>
            @if($n->NilaiAngka <= 40)
                D
            @elseif($n->NilaiAngka <= 60)
                C
            @elseif($n->NilaiAngka <= 80)
                B
            @elseif($n->NilaiAngka <= 100)
                A
            @else
                E
            @endif
        </td>
        <td>
            {{ $n->NilaiAngka * $n->SKS }}
        </td>
        <td>

        </td>
    </tr>
    @endforeach
</table>


@endsection
