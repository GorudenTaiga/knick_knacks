@extends('layouts.main')
@section('content')
@foreach ($isi as $produk)
<div class="gambar">
    <div class="foto">
        <img src="{{ asset('foto_produk/'.$produk->image) }}">
    </div>
    <div class="foto">
        <p>{{ $produk->nama }}<br>
        <span>Rp {{ $produk->harga }}</span></p>
        <p>{{ $produk->detail }}</p>
    </div>
</div>
@endforeach
@endsection
