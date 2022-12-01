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
    font-family: 'Poppins', sans-serif;
    color: #E20000;
}
.logo span:nth-child(2){
    font-family: 'Poppins', sans-serif;
    color: #3C38EA;
}
.container{
	margin: 50px auto;
	justify-content: center;
	max-width: 400xp;
	width: 50%;
	background: #D9D9D9;
	padding: 30px 30px;
	border-radius: 15px;
}
.container .title{
	font-size: 30px;
	font-weight: 500;
	position: relative;
}
.container .title .before{
	content: '';
	position: absolute;
	left: 0;
	bottom: 0;
	height: 3px;
	width: 30px;
	background: #000;
}
.container form .user-details{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	margin: 20px 0 12px 0;
}
form .user-details .input-box{
	margin-bottom: 28px;
	width: calc(100% / 2 - 20px);
}
.user-details .input-box .details{
	display: block;
	font-size: 17px;
	margin-bottom: 5px;
}
.user-details .input-box input{
	width: 100%;
    height: 60%;
    margin: 3px;
    border: none;
    outline: none;
    font-family: 'Poppins', sans-serif;
    padding: 10px;
    border-radius: 7px;
    border: 2px solid grey;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
	border-color: #000;
}
p{
    display: block;
    font-size: 18px;
    margin-bottom: 5px;
}

.radio {
    display: inline-block;
    justify-content: center;
    position: relative;
    padding-left: 30px;
    margin-bottom: 5px;
    left: 120px;
    bottom: 10px;
    cursor: pointer;
    font-size: 20px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.radio input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}
.radio .check {
    position: absolute;
    top: 0;
    left: 0;
    height: 22px;
    width: 22px;
    background-color: #fff;
    border: 3px solid #000;
    border-radius: 50%;
}
.radio:hover input ~ .check {
    border: 3px solid #009B71;
}
.radio input:checked ~ .check {
    background-color: #B0EBDB;
    border:none;
}
.radio .check:after {
    content: "";
    position: absolute;
    display: none;
}
.radio input:checked ~ .check:after {
    display: block;
}
.radio .check:after {
    top: 7px;
    left: 7px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}
.loginn{
    height: 45px;
	margin: 30px 0;
    text-align: center;
    align-items: center;
}
.loginn{
    margin: 0 auto;
    outline: none;
    padding: 13px 300px;
    width: 220px;
    color: #FFF;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    cursor: pointer;
    border-radius: 5px;
    letter-spacing: 1px;
    background: #009B71;
    position: absolute;
}

.loginn:hover{
	background: grey;
	color: #FFF;
}
</style>
</head>
<body>
	<div class="container">
        <div class="title">Registration</div>
        <form action="{{ route('postregister') }}" method="POST">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" required name="fullname">
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" required name="name">
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter your address" required name="alamat">
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Email" required name="email">
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" required name="phonenumber">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Password" required name="password">
                </div>
                <div class="input-box">
                    <p>Gender</p><br>
                    <label class="radio">Male
                        <input type="radio" checked="checked" name="gender" value="Male">
                        <span class="check"></span>
                    </label>
                    <label class="radio">Female
                        <input type="radio" checked="checked" name="gender" value="Female">
                        <span class="check"></span>
                    </label>
                </div>
                <div class="input-box">
                    <p>Role</p><br>
                    <label class="radio">Admin
                        <input type="radio" checked="checked" name="level" value="admin">
                        <span class="check"></span>
                    </label>
                    <label class="radio">User
                        <input type="radio" checked="checked" name="level" value="user">
                        <span class="check"></span>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" name="confirm" placeholder="Confirm your Password" required>
                    {{-- <label>Password Tidak Sesuai</label> --}}
                </div>
            </div>
            <input type="submit" value="Register" class="loginn">
        </form>
    </div>
</body>
</html>
