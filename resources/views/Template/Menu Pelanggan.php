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
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
body{
	margin: 0;
	padding: 0;
	justify-content: center;
	align-items: center;
    background-color:#B0EBDB;
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
    font-size: 20px;
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
        </nav>
    </section>
</body>
</html>