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
footer {
    position: relative;
    bottom: 0;
}

.footer {
    background-color: #040a18;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 40px 50px;
    margin-top: 80px;
    font-family: 'Poppins', sans-serif;
}

.footer .footer-left,
.footer .footer-center,
.footer .footer-right {
    display: inline-block;
    vertical-align: top;
}

@media (max-height:800px) {
    footer {
        position: static;
    }

    header {
        padding-top: 40px;
    }
}

.footer .footer-left {
    width: 30%;
}

.footer h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 28px;
    color: #f5f5f5;
    margin: 0;
    padding-bottom: 20px;
}

.footer .footer-left img {
    width: 27%;
    vertical-align: middle;
}

.footer .footer-left .credit-cards {
    width: 100%;
}

.footer .footer-center {
    width: 35%;
}

.footer .footer-center p {
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin: 0px;
}

.footer .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 28px;
}

.footer .footer-right {
    width: 25%;
}

.footer .footer-about {
    color: #92999f;
    font-size: 17px;
    font-weight: normal;
    margin: 0px;
}

.footer .footer-about span {
    display: block;
    color: #ffffff;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
}
@media (max-width: 880px) {

    .footer .footer-left,
    .footer .footer-center,
    .footer .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: left;
    }

    .footer .footer-center i {
        margin-left: 0px;
    }
}
.wrapper .button {
  display: inline-block;
  height: 60px;
  width: 60px;
  margin: 0 5px;
  overflow: hidden;
  background: #fff;
  border-radius: 50px;
  cursor: pointer;
  box-shadow: 0px 0px 10px #000;
  transition: all 0.3s ease-out;
}
.wrapper .button:hover {
  width: 200px;
}
.wrapper .button .icon{
  display: inline-block;
  height: 60px;
  width: 58px;
  text-align: center;
  border-radius: 50px;
  box-sizing: border-box;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1):hover .icon{
  background: #4267B2;
}
.wrapper .button:nth-child(2):hover .icon{
  background: #1DA1F2;
}
.wrapper .button:nth-child(3):hover .icon{
    background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,
    #dc2743 50%,#cc2366 75%,#bc1888 100%);
}
.wrapper .button:nth-child(4):hover .icon{
  background: #FF7F00;
}
.wrapper .button .icon i{
  font-size: 25px;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:hover .icon i{
  color: #000;
}
.wrapper .button span{
  font-size: 20px;
  font-weight: 500;
  line-height: 60px;
  margin-left: 10px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1) span{
  color: #4267B2;
}
.wrapper .button:nth-child(2) span{
  color: #1DA1F2;
}
.wrapper .button:nth-child(3) span{
  color: linear-gradient(45deg, #f09433 0%,#e6683c 25%,
    #dc2743 50%,#cc2366 75%,#bc1888 100%);
}
.wrapper .button:nth-child(4) span{
  color: #FF7F00;
}
</style>
@include('contents.style-navbar')
</head>
<body>
	@include('partials.navbar')
    <div class="gambar">
        @foreach ($isi as $produk)
        <div class="foto">
            <a href="/product/{{ $produk->id }}"><img src="{{ asset($produk->image) }}">
            <p>{{ $produk->nama }}<br>Rp. {{ $produk->harga }}</p></a>
        </div>
        @endforeach
    </div>
</body>
</html>
@endsection
