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

    <div class="gambar">
    	<div class="foto">
    		<img src="logo3.jpeg">
    	</div>
        <div class="foto">
            <p>Paket Doremi Kids Nussa Rara<br>
            <span>Rp 58.000</span></p>
            <p>DOREMI Kids Shampo Hijab Nussa untuk anak yang diformulasikan dengan proses yang Halal dan mengandung bahan-bahan natural pilihan. Diformulasikan khusus untuk anak yang menggunakan Hijab, yang disesuaikan dengan kebutuhannya.</p>
            <p>Detail Product :</p>
            <p>-Hair&Body Wash 200 ml<br>
            -Shampo+Conditioner 180 ml<br>
            -Spray Cologne 100 ml<br>
            -Handsanitizer Gel 20 ml</p>
            <input type="submit" value="Beli" class="beli">
        </div>
    </div>
</body>
</html>
