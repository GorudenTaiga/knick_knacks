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
.container{
    display: inline-block;
    text-align: center;
    justify-content: center;
    max-width: 100%;
    width: 100%;
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
    height:35px;
    margin: 3px;
    border: none;
    outline: none;
    font-family: 'Poppins', sans-serif;
    padding: 10px;
    border-radius: 7px;
    border: 2px solid grey;
    display: inline-block;
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

.loginn{
    font-family: 'Poppins', sans-serif;
    font-size: 25px;
    background: #009B71;
    color: #FFFFFF;
    border: #009B71 3px solid;
    border-radius: 15px;
    padding: 7px 53px;
    justify-content: right;
}

</style>
</head>
<body>
	<section>
        <nav>
            <a href="#" class="logo"><span>Knick</span> <span>Knacks</span></a>
            <ul>
                <li><img class="user" src="user.png"></li>
            </ul>
              </nav>
    </section>

    <div class="container">
            <form>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nama Produk</span>
                    <input type="text" name="nama" placeholder="Nama Produk" required="">
                </div>
                <div class="input-box">
                    <span class="details">Harga Produk</span>
                    <input type="number" name="harga" placeholder="Harga" required="">
                </div>
                <div class="input-box">
                    <span class="details">Deksripsi</span>
                    <input type="text" name="detail" placeholder="Deksripsi" required="">
                </div>
                <div class="input-box">
                    <span class="details">Total Produk</span>
                    <input type="number" name="stok" placeholder="Total Produk" required="">
                </div>
                <div class="input-box">
                    <span class="details">Gambar Produk</span>
                    <input type="file" name="image" placeholder="Total Produk" required="">
                </div>
            </div>
            <br>
            <input type="submit" value="Upload" class="loginn">
            </form>
    </div>
  </body>
</html>
