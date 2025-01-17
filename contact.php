<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAYCATION - A RESORT BOOKING WEBSITE</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<style>

body{
width:100%;
height:100vh;
background:linear-gradient(rgba(0,0,0,0.45),rgba(0,0,0,0.75)),url("main_bg3.jpg");
background-repeat:repeat;
background-size:cover;
}

@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
    --orange:#ffa500;
}

*{
    font-family: 'Nunito', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-transform: capitalize;
    outline: none;
    border: none;
    text-decoration: none;
    transition: all .2s linear;
}

*::selection{
    background:var(--orange);
    color:#fff;
}

html{
    font-size:62.5%;
    overflow-x: hidden;
    scroll-padding-top: 6rem;
    scroll-behavior: smooth;
}

section{
    padding:2rem 9%;
}

.heading{
    text-align: center;
    padding:2.5rem 0;
}

.heading span{
   font-size: 3.5rem;
   background:rgba(255, 155, 0, .2);
   color:var(--orange);
   border-radius: .5rem;
   padding: .2rem 1rem;
}
.heading span.space{
    background:none;
}

.btn{
    display: inline-block;
    margin-top:1rem;
    background:var(--orange);
    color:#fff;
    padding:.8rem 3rem;
    border: .2rem solid var(--orange);
    cursor:pointer;
    font-size: 1.7rem;
}

.btn:hover{
    background: rgba(255,165,0,.2);
    color:var(--orange);
}

header{
    position:fixed;
    top:0;
    left:0;
    right:0;
    background:#333;
    z-index: 1000;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding: 2rem 9%;
}

header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: #fff;
    text-transform: uppercase;
}

header .logo span{
    color: var(--orange);
}

header .navbar a{
    color: #fff;
    font-size: 2rem;
    margin: .8rem;
}
header .navbar a:hover{
    color: var(--orange);
}

header .icons i{
    font-size: 2.5rem;
    color: #fff;
    cursor:pointer;
    margin-right: 2rem;
}

header .icons i:hover{
    color: var(--orange);
}

#menu-bar{
    color: #fff;
    border:.1rem solid #fff;
    border-radius:.5rem;
    font-size: 3rem;
    padding:.5rem 1.2rem;
    cursor:pointer;
    display:none;
}

</style>

<body>

   <header>
      <div id="menu-bar" class="fas fa-bars"></div>
      <a href="#" class="logo"><span>Stay</span>Cation</a>
      <nav class="navbar">
           <a href="home.html">HOME</a>
           <a href="gallery.html">GALLERY</a>
           <a href="packages.html">PACKAGES</a>
           <a href="book.html">BOOKINGS</a>
           <a href="contact.html">CONTACT</a>
      </nav>

      <div class="icons">
          <i class="fas fa-user" id="login-btn"></i>
      </div>
  </header>

  <center>
  <form method=post action="receive.php">
        <br><br>
        <table border=1>
            <tr>
                <td><b><label>Name </label></b></td>
                <td><input type=text name=mytxt1></td>
            </tr>
            <tr>
                <td><b><label>Gender </label></b></td>
                <td><input type=text name=mygender1></td>
            </tr>
            <tr>
                <td><b><label>Age </label></b></td>
                <td><input type=number name=myage1></td>
            </tr>
            <tr>
                <td><b><label>Email </label></b></td>
                <td><input type=text name=myocc1></td>
            </tr>
            <tr>
                <td><b><label>Subject </label></b></td>
                <td><input type=text name=mysub1></td>
            </tr>
            
        </table>
        <br><br><br>
        <input type=submit name=mysubmit value=Submit>
        <input type=reset value=Reset>
    </form>
</center>

<script src="main.js" defer data-deferred="1"></script>
</body>

</html>