@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Toko Knick Knacks | {{ $title }}</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    @charset "utf-8";
/* CSS Document*/
body{
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
height:15vh;
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
margin:30px;
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
font-family: 'Poppins', sans-serif;
color: #E20000;
}
.logo span:nth-child(2){
font-family: 'Poppins', sans-serif;
color: #3C38EA;
}
.content p{
font-family: 'Poppins', sans-serif;
font-size: 20px;
}
.content p span:nth-child(1){
font-family: 'Poppins', sans-serif;
color: #E20000;
}
.content p span:nth-child(2){
font-family: 'Poppins', sans-serif;
color: #3C38EA;
}
.gambar{
width: 80%;
display: grid;
grid-template-columns: 1fr 1fr 1fr 1fr;
margin: auto;
margin-bottom: 0;
}
.gambar .foto img{
padding-top: 25px;
padding-bottom: 5px;
width: 300px;
border-radius: 10px;
}
.foto{
border: 3px solid #000;
margin: 10px;
text-align: center;
border-radius: 10px ;
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

.menu{
height: 45px;
margin: 30px 0;
}
.menu{
outline: none;
padding: 5px 50px;
width: 200px;
color: #FFF;
font-family: 'Poppins', sans-serif;
font-size: 23px;
cursor: pointer;
margin: 50px;
border-radius: 10px;
letter-spacing: 1px;
background: #000;
text-align: right;
position: inline-block;
}

.menu:hover{
background: grey;
color: #FFF;
}
.user {
position: relative;
width: 35px;
height: 38.09px;
left: 100;
top: 10px;
}


</style>
</head>
<body>
    <section>
        <nav>
            <a href="#" class="logo"><span>Knick</span> <span>Knacks</span></a>
            <ul>
              <li><a href="/admin/tambah" class="menu">Tambah Menu</a></li>
              <li><a href="/logout"><img class="user" src="{{ asset('img/user.png') }}"> | {{ Auth::user()->name }}</a></li>
            </ul>
        </nav>
    </section>

    <div class="gambar">
        @foreach ($isi as $produk)
            <div class="foto">
                <a href="admin/{{ $produk->id }}"><img src="{{ asset('foto_produk/'.$produk->image) }}"></a>
                <p><a href="admin/{{ $produk->id }}/edit" class="loginn">EDIT</a><br><br><a href="admin/{{ $produk->id }}/hapus" class="hapus">HAPUS</a></p>
            </div>
        @endforeach
    </div>
</body>
</html>
@endsection
