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
 
ul{
    list-style:none;
}
 
a{
    text-decoration:none;
}
 
section{
    width:100%;
    height: 13vh;
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
.gambar{
    text-align: center;
    position: inline-block;
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
    padding: 40px 40px 40px 40px;
    margin-top: 40px;
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
.krnjg{
    height: 60px;
}
.user{
    height: 40px;
    justify-content: center;
    text-align: center;
}
.text{
  padding: 20px 100px;
  position: inline-block;
}
.info p{
  font-family: 'Poppins', sans-serif;
  font-size: 25px;
}
.maps{
  text-align: center;
  position: inline-block;
  margin-bottom: 60px;
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
            <ul>
                <li><a href="Keranjang.php"><img class="krnjg" src="krnjg.png"></a></li>
                <li><img class="user" src="user.png"></li>
            </ul>
        </nav>
    </section>

    <div class="text">
      <div class="info">
        <p>Toko kami menjual produk peralatan mandi dalam bentuk paket. Berbagai karakter kartun lucu yang tentunya disukai oleh para anak - anak anda. Kami merintis usaha dari tahun 2016 dan masih berjalan hingga sekarang, Toko kami beralamat di puri artha sentosa kami melayani pembelian secara offline. Tetapi akan lebih mudah jika anda memesan produk melalui web ini anda tidak perlu repot repot keluar rumah, anda bisa bersantai di rumah sambil menunggu paket anda datang.</p>
      </div>
    </div>

    <div class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d495.51441026098405!2d106.7902077!3d-6.5070887!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c30512af9b9f%3A0x228f7e9efbf537f0!2sAgen%20Kino!5e0!3m2!1sid!2sid!4v1668791801587!5m2!1sid!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <footer class="footer">
        <div class="footer-left">
            <h3>Knick Knacks</h3>
            <div class="credit-cards">
                <img src="logo.jpeg">
            </div>
        </div>

        <div class="footer-center">
            <div>
                <p><span>Indonesia</span> Bojonggede, Bogor</p><br><br>
            </div>
            <div>
                <p><a href="#">knickknacks@gmail.com</a></p><br><br>
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
    </div>
    </footer>
</body>
</html>