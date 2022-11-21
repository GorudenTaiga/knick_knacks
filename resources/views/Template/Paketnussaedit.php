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
.user{
    position: relative;
width: 35px;
height: 38.09px;
left: 100;
top: 10px;
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
    width: 600px;
    border-radius: 10px;
    text-align: left;
}
.foto{
    margin: 25px;
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

    <div class="gambar">
      <div class="foto">
        <img src="logo3.jpeg">
      </div>
    
    <div class="container">
            <form>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nama Produk</span>
                    <input type="text" placeholder="Nama Produk" required="">
                </div>
                <div class="input-box">
                    <span class="details">Harga Produk</span>
                    <input type="text" placeholder="Harga" required="">
                </div>
                <div class="input-box">
                    <span class="details">Deksripsi</span>
                    <input type="text" placeholder="Deksripsi" required="">
                </div>
                <div class="input-box">
                    <span class="details">Total Produk</span>
                    <input type="text" placeholder="Total Produk" required="">
                </div>
            </div>
            <br>
                <a href="admin.php" class="loginn">Simpan</a>
            </form>
            </div>
</body>
</html>