<style>
ul{
    list-style:none;
}

a{
    text-decoration:none;
}
section{
    width:100%;
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
    margin: 0px;
    padding: 5px;
    background: none;
    float: right;
    display: flex;
}

nav ul li{
  list-style: none;
  display: inline-block;
}

nav ul li a{
    display: block;
    text-align: center;
    text-decoration: none;
    justify-content: center;
    font-family: 'Poppins', sans-serif;
    color:#000;
    font-size: 25px;
    font-weight:700;
}
nav ul li a:hover{
  display: block;
  color: 000;
  background: #D9D9D9;
}
nav ul li .dropdown{
  display: none;
}
nav ul li:hover .dropdown{
  display: block;
  background: white;
  position: absolute;
  padding: 5px 10px;
  border-radius: 15px;
  z-index: 2;
}
nav ul li .dropdown li a{
    font-size: 15px;
}
nav ul li:hover .dropdown li{
  display: block;
}
nav ul li:hover .dropdown li a{
  border-radius: 5px;
}
nav ul li:hover .dropdown li a:hover{
  background: white;
  color: black;
}
li a,
.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 5px 10px;
    text-decoration: none;
}
li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    height: 5%;
    width: 10%;
    z-index: 2;
}

.dropdown-content a {
    color: black;
    text-decoration: none;
    display: flex;
    text-align: left;
}
.dropdown:hover .dropdown-content {
    display: block;
}
</style>
