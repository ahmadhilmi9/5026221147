@extends('template')

@section('tulisan1','Data Nilai')


@section('link1')
    <a href="/uas"> Kembali</a>
@endsection

    @section('konten')
	<form action="/uas/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
              <input type="text" name="NRP" class="form-control" id="NRP" required="required">
            </div>
          </div>
          <div class="row mb-3">
            <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
              <input type="text" name="NilaiAngka" class="form-control" id="NilaiAngka" required="required">
            </div>
          </div>
          <div class="row mb-3">
            <label for="umur" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
              <input type="text" name="SKS" class="form-control" id="SKS" required="required">
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
          </div>
	</form>
    @endsection

