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

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Foto</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>

                    <tr>
                        <td><img src="logo3.jpeg" class="img-cart"></td>
                        <td>
                            Paket Doremi Kids Nussa Rara A
                        </td>
                        <td>RP 58.000</td>
                        <td>
                            <input type="number" value="1" class="form-control input-kuantitas">
                        </td>
                        <td>RP 58.000</td>
                    </tr>

                    <tr>
                        <td><img src="logo4.jpeg" class="img-cart"></td>
                        <td>
                            Paket Doremi Kids Nussa Rara B
                        </td>
                        <td>RP 58.000</td>
                        <td>
                            <input type="number" value="1" class="form-control input-kuantitas">
                        </td>
                        <td>RP 58.000</td>
                    </tr>

                    <tr>
                        <td><img src="logo5.jpeg" class="img-cart"></td>
                        <td>
                            Paket Elsa Anna
                        </td>
                        <td>RP 120.000</td>
                        <td>
                            <input type="number" value="1" class="form-control input-kuantitas">
                        </td>
                        <td>RP 120.000</td>
                    </tr>
                  </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <input type="submit" value="Bayar" class="beli">
            </div>
        </div>
</body>
</html>
