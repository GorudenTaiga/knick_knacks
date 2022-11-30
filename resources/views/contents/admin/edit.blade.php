@extends('layouts.admin')
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
.text-container p:nth-child(1){
    font-family: 'Poppins', sans-serif;
    color: #000000;
    font-size: 40px;
}

.text-container p:nth-child(2){
    font-family: 'Poppins', sans-serif;
    color: #000000;
    font-size: 50px;
    word-spacing: -2px;
    z-index: 2;
}

.text-container p:nth-child(3){
    font-family: 'Poppins', sans-serif;
    color: #000000;
    font-size: 30px;
    margin-top: 10px;
    line-height: 30px;
}

.text-container{
    position: absolute;
    left: 13%;
    top: 50%;
    transform: translate(-13%, -42%);
}

.text-container button{
    width: 130px;
    height: 42px;
    border-radius: 10px;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    outline: none;
    margin: 0px 10px;
}
.model{
    height: 570px;
    position: absolute;
    bottom: 200px;
    left: 84%;
    transform: translateX(-70%);
    z-index: 1;
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
.text-container p span:nth-child(1){
    font-family: font-family: 'Poppins', sans-serif;
    color: #E20000;
}
.text-container p span:nth-child(2){
    font-family: font-family: 'Poppins', sans-serif;
    color: #3C38EA;
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
.row g-3r{
    justify-content: center;
    max-width: 100%;
    width: 80%;
    padding-right: 20px;
    border-radius: 15px;

}
</style>
@include('contents.style-navbar')
</head>
<body>
    @foreach ($produk as $edit)
<form class="row g-3" method="POST" action="/admin/edit/{{ $edit['id'] }}">
    @csrf
    <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="validationCustom01" name="nama" required value="{{ $edit['nama'] }}">
    </div>
    <span>Detail</span>
    <textarea name="detail" id="" cols="30" rows="10">{{ $edit['detail'] }}</textarea>
    <br>
    <label for="">Harga</label>
    <input type="number" name="harga" id="" value="{{ $edit['harga'] }}">
    <br>
    <label for="">Stok</label>
    <input type="number" name="stok" id="" value="{{ $edit['stok'] }}">
    <div class="col-md-4">
    <label for="image" class="form-label">Inputkan File</label>
    <input type="file" class="form-control"  name="image" id="image" placeholder="File Gambar Produk" aria-describedby="fileHelpId" value="{{ asset('foto_produk/'.$edit['image']) }}">
    <div class="col-12">
    <input type="submit" value="Submit">
    </div>
  @endforeach
</form>
</body>
</html>
@endsection
