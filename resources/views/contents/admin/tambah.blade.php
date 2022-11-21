@extends('layouts.admin')
@section('content')
<form class="row g-3" method="POST" action="{{ route('simpan') }}" enctype="multipart/form-data">
    @csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="validationCustom01" name="nama" required>
  </div>
  <input type="text" name="detail" id="">
  <input type="number" name="harga" id="">
  <input type="number" name="stok" id="">
  <div class="col-md-4">
    <label for="image" class="form-label">Inputkan File</label>
    <input type="file" class="form-control"  name="image" id="image" placeholder="File Gambar Produk" aria-describedby="fileHelpId">
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
@endsection
