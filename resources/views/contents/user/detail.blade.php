@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Toko Knick Knacks</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        @charset "utf-8";
/* CSS Document*/
body{
    font-family: 'Poppins', sans-serif;
    background-color:#B0EBDB;
    margin:0px;
    padding:0px;
}
ul{
    list-style:none;
}

a{
    text-decoration:none;
}
section{
    width:100%;
    height: 15vh;
    position: relative;
}

nav{
    display: flex;
    justify-content: space-between;
    align-items:center;
    height:90px;
    background-color:#D9D9D9;
    box-shadow:2px 2px 12px rgba(0,0,0,0.2);
    padding:0px 5%;

}
nav ul{
    display: flex;
}

nav ul li a{
    justify-content: center;
    margin: 10px;
    font-family: 'Poppins', sans-serif;
    color:#000000;
    font-size: 25px;
    font-weight:700;
}
.logo{
    font-family: 'Poppins', sans-serif;
    color:#000000;
    font-size: 30px;
}
.logo span:nth-child(1){
    font-family: font-family: 'Poppins', sans-serif;
    color: #E20000;
}
.logo span:nth-child(2){
    font-family: font-family: 'Poppins', sans-serif;
    color: #3C38EA;
}
.gambar{
    width: 90%;
    display: flex;
    grid-template-columns: 1fr 1fr 1fr;
    margin: auto;
}
.gambar .foto img{
    padding-top: 30px;
    padding-bottom: 5px;
    width: 570px;
    border-radius: 10px;
    text-align: left;
}
.foto{
    margin: 25px;
}
.text-container{
    position: absolute;
    right: 13%;
    top: 50%;
    transform: translate(-13%, -42%);
}
span{
    font-size: 35px;
    color: #E20000;
}
p:nth-child(1){
    font-size: 40px;
}
p:nth-child(2){
    font-size: 25px;
}
p:nth-child(3){
    font-size: 30px;
    font-weight: bold;
}
p:nth-child(4){
    font-size: 25px;
    font-weight: bold;
}
.beli{
    font-family: 'Poppins', sans-serif;
    font-size: 25px;
    background: #009B71;
    color: #FFFFFF;
    border: #009B71 3px solid;
    border-radius: 15px;
    padding: 5px 50px;
}
.krnjg{
    position: relative;
width: 100px;
height: 55.52px;
left: 100;
top: 0px;

}
.user{
    position: relative;
width: 35px;
height: 38.09px;
left: 100;
top: 10px;
}
.foto p{
font-family: 'Poppins', sans-serif;
font-size: 20px;
}
.loginn{
height: 45px;
margin: 30px 0;
}
.loginn{
outline: none;
padding: 12px 100px;
width: 200px;
color: #FFF;
font-family: 'Poppins', sans-serif;
font-size: 20px;
cursor: pointer;
margin: 50px;
border-radius: 10px;
letter-spacing: 1px;
background: #009B71;
}

.loginn:hover{
background: grey;
color: #FFF;
}

.hapus{
height: 45px;
margin: 30px 0;
}
.hapus{
outline: none;
padding: 12px 87px;
width: 200px;
color: #FFF;
font-family: 'Poppins', sans-serif;
font-size: 20px;
cursor: pointer;
margin: 50px;
border-radius: 10px;
letter-spacing: 1px;
background: #E20000;
}

.hapus:hover{
background: grey;
color: #FFF;
}
p {
    white-space:pre-line;
}

</style>
@include('contents.style-navbar')
</head>
<body>
	@include('partials.navbar')
    @foreach ($isi as $produk)
    <div class="gambar">
    	<div class="foto">
            {{-- @php
                $images = explode('|', $produk->image)         //Kalau mau banyak gambar
            @endphp
            @foreach ($images as $foto)
    		<img src="{{ asset($foto) }}">
            @endforeach --}}
            <img src="{{ asset($produk->image) }}">               {{-- Kalau mau gambarnya 1 aja --}}
    	</div>
        <div class="foto">
            <h1>{{ $produk->nama }}</h1><br>
            <span>Rp {{ $produk->harga }}</span>
            <p>Details : </p>
            <p>{{ $produk->detail }}</p>
            @if (Auth::user()->level == 'user')
            <a href="" class="beli">Beli</a>
            @else
            <p><a href="admin/{{ $produk->id }}/edit" class="loginn">EDIT</a><br><br><a href="admin/{{ $produk->id }}/hapus" class="hapus">HAPUS</a></p>
            @endif
        </div>
    </div>
    @endforeach
</body>
</html>
@endsection
