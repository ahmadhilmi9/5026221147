@extends('template')

@section('tulisan1','Data Snack')

@section('link1')
    <a href="/snack"> Kembali</a>
@endsection

@section('konten')
	<form action="/snack/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merk" class="form-control" id="merk" required="required">
            </div>
          </div>
          <div class="row mb-3">
            <label for="stock" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
              <input type="number" name="stock" class="form-control" id="stock" required="required" min="0">
            </div>
          </div>
          <div class="row mb-3 align-items-center">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10 d-flex">
              <div class="form-check me-3">
                <input type="radio" class="form-check-input" id="tersedia1" required="required" name="tersedia" value="Y" disabled>
                <label class="form-check-label" for="tersedia1">Ada</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="tersedia2" required="required" name="tersedia" value="N" disabled>
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
@endsection

@section('script')
<script>
    const stockInput = document.getElementById('stock');
    const tersediaOption = document.getElementById('tersedia1');
    const habisOption = document.getElementById('tersedia2');

    stockInput.addEventListener('input', function () {
        const stockValue = parseInt(stockInput.value, 10);

        if (stockValue > 0) {
            tersediaOption.disabled = false; // Aktifkan opsi "Ada"
            habisOption.disabled = true;   // Nonaktifkan opsi "Habis"
            habisOption.checked = false;   // Pastikan tidak terpilih
        } else {
            tersediaOption.disabled = true; // Nonaktifkan opsi "Ada"
            tersediaOption.checked = false; // Pastikan tidak terpilih
            habisOption.disabled = false;   // Aktifkan opsi "Habis"
        }
    });
</script>
@endsection
