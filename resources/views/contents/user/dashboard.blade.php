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
<style type="text/css">
        @charset "utf-8";
/* CSS Document*/
body{
    font-family: 'Poppins', sans-serif;
    background-color:#B0EBDB;
    margin:0px;
    padding:0px;
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
p{
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
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
.text-judul-halaman {
    font-weight: bold;
    font-size: 36px;
    line-height: 59px;
    color: #000000;
}
table{
    border:3px solid #000;
    width: 80%;
    text-align: center;
    margin: 10px auto;
    border-radius: 15px;
    padding-bottom: 15px;
}
th{
    font-size: 25px;
    text-align: center;
    padding-bottom: 25px;
}
td{
    font-size: 20px;
    text-align: center;
}
.img-cart {
    width: 170px;
    height: auto;
}
.input-kuantitas {
    width: 119px;
    height: 25px;
}
.beli{
    font-family: 'Poppins', sans-serif;
    font-size: 25px;
    background: #009B71;
    color: #FFFFFF;
    border: #009B71 3px solid;
    border-radius: 15px;
    padding: 7px 53px;
    justify-content: right;
}
.container{
    padding-top: 20px;
    text-align: center;
    position: inline-block;
}


</style>
@include('contents.style-navbar')
</head>
<body>
@include('partials.navbar')
<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Tanggal</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Produk</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
                @foreach ($isi as $isian)
                <tr>
                    <td>
                        {{ $isian->created_at }}
                    </td>
                    <td>
                        {{ $isian->produk }}
                    </td>
                    <td>
                        {{ $isian->jumlah }}
                    </td>
                    <td>
                        Rp {{ $isian->total }}
                    </td>
                    <td>
                        {{ $isian->status }}
                    </td>
                </tr>
                @endforeach
              </table>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
@endsection
