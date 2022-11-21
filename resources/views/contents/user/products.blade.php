@extends('layouts.main')
@section('content')
<div class="gambar">
    @foreach ($isi as $produk)
    <a href="/product/{{ $produk->id }}">
    <div class="foto">
        <img src="foto_produk/{{ $produk->image }}">
        <p>{{ $produk->nama }}<br>Harga Rp. {{ $produk->harga }}</p>
    </div>
    </a>
    @endforeach
</div>
@endsection
