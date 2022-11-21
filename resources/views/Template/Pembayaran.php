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
ul{
    list-style:none;
}
 
a{
    text-decoration:none;
}
 
section{
    width:100%;
    height:10vh;
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
    font-family: font-family: 'Poppins', sans-serif;
    color: #E20000;
}
.logo span:nth-child(2){
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
.container{
    align-content: center;
    display: flex;
    justify-content: center;
    max-width: 90%;
    width: 80%;
    padding: 30px 30px;
    border-radius: 15px;
}
.gambar{
    width: 90%;
    display: flex;
    margin: auto;
}
.gambar .foto img{
    width: 570px;
    border-radius: 10px;
    text-align: left;
}
.foto{
    margin: 25px;
}
.login{
    display: inline-block;
    width: 100%;
    height: 80%;
}
form{
    width: 300px;
    margin: 50px auto;
}
form label{
    font-family: 'Poppins', sans-serif;
    display: block;
    font-size: 17px;
    padding: 5px;
}
input{
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    font-family: 'Poppins', sans-serif;
    padding: 8px;
    border-radius: 7px;
    border: 2px solid grey;
}
.loginn{
    outline: none;
    padding:10px 33px;
    width: 200px;
    color: #FFF;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    cursor: pointer;
    margin: 90px;
    border-radius: 10px;
    background: #000; 
}
.loginn:hover{
    background: grey;
}
.foto img{
    display: inline-block;
    padding-top: 35px;
    padding-bottom: 5px;
    width: 45%;
    height: 85%;
    border-radius: 10px;
    text-align: left;
    margin: 10px;
}
.beli{
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    background: #009B71;
    color: #FFFFFF;
    border: #009B71 3px solid;
    border-radius: 15px;
    padding: 5px 50px;
}
.container{
    justify-content: center;
    max-width: 100%;
    width: 80%;
    padding-right: 20px;
    border-radius: 15px;
   
}

.user-details .input-box .details{
    display: block;
    font-size: 17px;
    margin-bottom: 5px;
    padding-right: 10px;
    width: 100%;
}

.user-details .input-box input{
    width: 450px;
    height: 30px;
    margin: 3px;
    border: none;
    outline: none;
    font-family: 'Poppins', sans-serif;
    padding: 10px;
    border-radius: 7px;
    border: 2px solid grey;
}
.loginn{
    height: 45px;
    margin: 30px 0;
}
.loginn{
    outline: none;
    padding: 13px 50px;
    width: 20px;
    color: #FFF;
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    cursor: pointer;
    border-radius: 10px;
    letter-spacing: 1px;
    background: #000000; 
}

.loginn:hover{
    background: grey;
    color: #FFF;
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

    <div class="container">
        <div class="gambar">
            <div class="foto">
                    <img src="logo3.jpeg">
            </div>
            
            <div class="container">
            <form>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nama Lengkap</span>
                    <input type="text" placeholder="Nama Lengkap" required="">
                </div>
                <div class="input-box">
                    <span class="details">Alamat Pengiriman</span>
                    <input type="text" placeholder="Alamat Pengiriman" required="">
                </div>
                <div class="input-box">
                    <span class="details">Nomor Telepon</span>
                    <input type="number" placeholder="Nomor Telepon" required="">
                </div>
                <div class="input-box">
                    <span class="details">Total Pesanan</span>
                    <input type="text" placeholder="Total Pesanan" required="">
                </div>
                <div class="input-box">
                    <span class="details">Metode Pembayaran</span>
                    <input type="text" placeholder="BCA/COD/DANA/GOPAY" required="">
                </div>
            </div>
            <br>
                <a href="#" class="loginn">Bayar</a>
            </form>
            </div>
        </div>
    </div>
</body>
</html>