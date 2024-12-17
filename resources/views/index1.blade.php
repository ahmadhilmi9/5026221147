@extends('template')

@section('tulisan1', 'Data Snack')


@section('link1')
	<a href="/snack/tambah" class="btn btn-primary"> + Tambah Snack Baru</a>
@endsection
@section('konten')

	<br/>
	<form action="/snack/cari1" method="GET">
        <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Cari Merk snack :</label>
            <div class="col-sm-6">
              <input type="text" name="cari1" class="form-control" id="cari1" placeholder="Cari snack .." value="{{ old('cari1') }}">
        	</div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
		</div>
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode_Snack</th>
			<th>Merk_Snack</th>
			<th>Stock_Snack</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($snack as $s)
		<tr>
			<td>{{ $s->kodesnack }}</td>
			<td>{{ $s->merksnack }}</td>
			<td>{{ $s->stocksnack }}</td>
			<td>{{ $s->tersedia }}</td>
			<td>
				<a href="/snack/edit/{{ $s->kodesnack }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/snack/hapus/{{ $s->kodesnack }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $snack->currentPage() }} <br/>
	Jumlah Data : {{ $snack->total() }} <br/>
	Data Per Halaman : {{ $snack->perPage() }} <br/>


	{{ $snack->links() }}


@endsection
