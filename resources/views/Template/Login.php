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
    font-size: 20px;
    font-weight:700;
}
.login{
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    background: #D9D9D9;
    color: #009B71;
    border: #009B71 3px solid;
    border-radius: 20px;
    padding: 10px 47px;
    margin-top: 20px;
}
.register{
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    background: #009B71;
    color: #FFFFFF;
    border: #009B71 3px solid;
    border-radius: 20px;
    padding: 10px 37px;
    margin-top: 20px;
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
.container{
    margin: 50px auto;
    justify-content: center;
    max-width: 600px;
    width: 50%;
    background: #D9D9D9;
    padding: 30px 30px;
    border-radius: 15px;
}
.login{
    background: #D9D9D9;
    width: 500px;
}
form{
    width: 300px;
    margin: 50px auto;
}
h1 {
    margin: 25px;
    text-align: center;
    text-transform: uppercase;
    color: #000;
}
hr{
    border-top: 3px solid #000;
    width: 270px;
}
p {
    margin: 10px auto;
    text-align: center;
}
p span:nth-child(1){
    font-family: 'Poppins', sans-serif;
    color: #000;
    text-align: center;
}
p span:nth-child(2){
    font-family: 'Poppins', sans-serif;
    color: #E20000;
    text-align: center;
}
p span:nth-child(3){
    font-family: 'Poppins', sans-serif;
    color: #3C38EA;
    text-align: center;
}
.right img{
    width: 450px;
    height: 100%
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


</style>
</head>
<body>
	<section>
        <nav>
            <a href="#" class="logo"><span>Knick</span> <span>Knacks</span></a>
            <ul>
                <li>
                    <a href="Login.php" class="login">Login</a>
                    <a href="Register.php" class="register">Register</a>
                </li>
            </ul>
        </nav>
    </section>
   
    <div class="container">
        <div class="login">
            <form action="">
                <h1>Login</h1>
                <hr>
                <p><span>Toko</span> <span>Knick</span> <span>Knacks</span></p>
                <label for="">Email</label>
                <input type="text" name="email" placeholder="Example@gmail.com">
                <label for="">Password</label>
                <input type="Password" name="Password" placeholder="Password"><br><br>
                <a href="Home.php" class="loginn">Login</a>
            </form>
        </div>
    </div>
</body>
</html>