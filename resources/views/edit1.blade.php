@extends('template')

@section('tulisan1','Edit Snack')

@section('link1')
    <a href="/snack"> Kembali</a>
@endsection

@section('konten')
	@foreach($snack as $s)
	<form action="/snack/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->kodesnack }}"> <br/>
        <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merk" class="form-control" id="merk" required="required" value="{{ $s->merksnack }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="stock" class="col-sm-2 col-form-label">Stok </label>
            <div class="col-sm-10">
              <input type="number" name="stock" class="form-control" id="stock" required="required" value="{{ $s->stocksnack }}">
            </div>
          </div>
          <div class="row mb-3 align-items-center">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10 d-flex">
              <div class="form-check me-3">
                <input type="radio" class="form-check-input" id="tersedia1" name="tersedia" value="Y" required='required'
                {{ $s->stocksnack > 0 ? '' : 'disabled' }} {{ $s->stocksnack > 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="tersedia1">Ada</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="tersedia2" name="tersedia" value="N" required="required"
                {{ $s->stocksnack == 0 ? '' : 'disabled' }} {{ $s->stocksnack == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="tersedia2">Habis</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
          </div>
	</form>
	@endforeach
@endsection

@section('script')
<script>
    const stockInput = document.getElementById('stock');
    const tersediaOption = document.getElementById('tersedia1');
    const habisOption = document.getElementById('tersedia2');

    stockInput.addEventListener('input', function () {
        const stockValue = parseInt(stockInput.value, 10);

        if (stockValue > 0) {
            tersediaOption.disabled = false;
            habisOption.disabled = true;
            habisOption.checked = false;
        } else {
            tersediaOption.disabled = true;
            tersediaOption.checked = false;
            habisOption.disabled = false;
        }
    });
</script>
@endsection
