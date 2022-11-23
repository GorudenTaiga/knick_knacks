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
    height:80vh;
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
.text-container p:nth-child(1){
    font-family: 'Poppins', sans-serif;
    color: #000000;
    font-size: 30px;
}

.text-container p:nth-child(2){
    font-family: 'Poppins', sans-serif;
    color: #000000;
    font-size: 40px;
    word-spacing: -2px;
    z-index: 2;
}

.text-container p:nth-child(3){
    font-family: 'Poppins', sans-serif;
    color: #000000;
    font-size: 20px;
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
    height: 450px;
    position: absolute;
    top: 20%;
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

footer {
    position: relative;
    bottom: 0;
}

.footer {
    background-color: #000;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 40px 40px 30px 40px;
    margin-top: 90px;
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
    width: 35%;
}

.footer h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
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
    font-size: 20px;
}

.footer .footer-right {
    width: 25%;
}

.footer .footer-about {
    color: #92999f;
    font-size: 15px;
    font-weight: normal;
    margin: 0px;
}

.footer .footer-about span {
    display: block;
    color: #ffffff;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px;
}
@media (max-width: 800px) {

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
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
    z-index: 2;
}

li a,
.dropbtn {
    display: block;
    color: white;
    text-align: center;
    text-decoration: none;
}

li a:hover,
.dropdown:hover .dropbtn {
    transition: all 0.5s ease;
}

li.dropdown {
    display: block;
}

.dropdown-content {
    display: none;
    position: absolute;
    width: 5%;
    height: 5%;
    background-color: #f9f9f9;
    border-radius: 10px;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 2;
}

.dropdown-content a {
    color: black;
    display: block;
    width: 20px;
    text-decoration: none;
    font-size: 20px;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>
<body>
	<section>
        <nav>
            <a href="#" class="logo"><span>Knick</span> <span>Knacks</span></a>
            <ul>
                <li><a href="Home.php" class="active">Home</a></li>
                <li><a href="Product.php">Product</a></li>
                <li><a href="About.php">About Us</a></li>
            </ul>
            <ul class="list">
                <li><a href="Keranjang.php"><img class="krnjg" src="{{ asset('img/krnjg.png') }}"></a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn"><img class="user" src="{{ asset('img/user.png') }}"></a>
                    <div class="dropdown-content">
                        <a href="#">Log out</a>
                        <a href="#">Log out</a>
                    </div>
                </li>
            </ul>
              </nav>
    </section>

        <div class="text-container">
            <p>Welcome To <span>Knick</span> <span>Knacks</span></p>
            <p>Here we provide a lot of products<br>for children at relatively Cheap Prices</p>
            <p>Make your child enjoy the time</p><br>
        </div>
        <picture>
            <source media="(max-width:1000px)" srcset="logo1-large.png">
            <source media="(max-width:600px)" srcset="logo1-medium.png">
            <source media="(max-width:400px)" srcset="logo1-small.png">
            <img alt="model" class="model" src="{{ asset('img/logo1.png') }}">
        </picture>

    <footer class="footer">
        <div class="footer-left">
            <h3>Knick Knacks</h3>
            <div class="credit-cards">
                <img src="{{ asset('img/logo.jpeg') }}">
            </div>
        </div>

        <div class="footer-center">
            <div>
                <p><span>Indonesia</span> Bojonggede, Bogor</p><br><br>
            </div>

            <div class="wrapper">

                <div class="button">
                   <div class="icon"><a href="https://facebook.com/" target="_blank">
                      <i class="fa fa-facebook-f"></i>
                   </div>
                   <span>Facebook</span>
                </div>

                <div class="button">
                   <div class="icon"><a href="https://www.instagram.com/tokogrosirkosmetikmurah/" target="_blank">
                      <i class="fa fa-instagram" ></i>
                   </div>
                   <span>Instagram</span></a>
                </div>

                <div class="button">
                   <div class="icon"><a href="https://shopee.co.id/search?keyword=tokoknickknacks" target="_blank">
                      <i class="fa fa-shopping-cart"></i>
                   </div>
                   <span>Shopee</span></a>
                </div>

                <div class="button">
                   <div class="icon"><a href="https://goo.gl/maps/RTHx6rGEe8c8yiyV8" target="_blank">

                    <i class="fa fa-map"></i>
                   </div>
                   <span>Maps</span></a>
                </div>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <span>About</span>
                Knick Knacks menjual produk peralatan mandi dalam bentuk paket. Banyak gambar kartun lucu yang tentunya disukai oleh anak anda. Ayo ibu bahagiakan si buah hati.
            </p>
        </div>
    </footer>
</body>
</html>
