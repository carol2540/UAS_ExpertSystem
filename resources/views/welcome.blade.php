<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

section{
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  background: url(https://img.freepik.com/free-photo/turquoise-ocean-watercolor-texture-background_53876-129027.jpg?w=1060&t=st=1667725261~exp=1667725861~hmac=a7fca8d3647fedafbe9bc875de63e44ee8aebef298bb5473dd076dcc2e753729) no-repeat;
  background-size: cover;
  background-position: center;
}

header{
  position: relative;
  top: 0;
  width: 100%;
  padding: 30px 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

label{
  display: none;
}

header .logo{
  position: relative;
  color: #000;
  font-size: 30px;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 1px;
}

header .navigation a{
  color: rgb(255, 255, 255);
  font-size: 18px;
  text-decoration: none;
  font-weight: 500;
  letter-spacing: 1px;
  padding: 2px 15px;
  border-radius: 20px;
  transition: 0.3s;
  transition-property: background;
}

header .navigation a:not(:last-child){
  margin-right: 30px;
}

header .navigation a:hover{
  background: #009688;
}

.content{
  max-width: 650px;
  margin: 60px 100px;
}

.content .info h2{
  color: #ffffff;
  font-size: 55px;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 2px;
  line-height: 60px;
  margin-bottom: 30px;
}

.content .info h2 span{
  color: #fff;
  font-size: 50px;
  font-weight: 600;
}

.content .info p{
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 40px;
}

.content .info-btn{
  color: #fff;
  background: #226A80;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 700;
  letter-spacing: 2px;
  padding: 10px 20px;
  border-radius: 5px;
  transition: 0.3s;
  transition-property: background;
}

.content .info-btn:hover{
  background: #0C4F60;
}

.media-icons{
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
}

.media-icons a{
  position: relative;
  color: #111;
  font-size: 25px;
  transition: 0.3s;
  transition-property: transform;
}

.media-icons a:not(:last-child){
  margin-right: 60px;
}

.media-icons a:hover{
  transform: scale(1.5);
}

#check{
  z-index: 3;
  display: none;
}

/* Responsive CSS */

@media (max-width: 960px){
  header .navigation{
    display: none;
  }

  .info{
      width: 100%;
  }

  label{
    display: block;
    font-size: 25px;
    cursor: pointer;
    transition: 0.3s;
    transition-property: color;
  }

  label:hover{
    color: #fff;
  }

  label .close-btn{
    display: none;
  }

  #check:checked ~ header .navigation{
    z-index: 2;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(114, 223, 255, 0.9);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  #check:checked ~  header .navigation a{
    font-weight: 700;
    margin-right: 0;
    margin-bottom: 50px;
    letter-spacing: 2px;
  }

  #check:checked ~ header label .close-btn{
    z-index: 2;
    position: fixed;
    display: block;
  }

  #check:checked ~ header label .menu-btn{
    display: none;
  }

  label .menu-btn{
    position: absolute;
  }

  header .logo{
    position: absolute;
    bottom: -6px;
  }

  .content .info h2{
    text-align: center;
    font-size: 20px;
    line-height: 50px;
  }

  .content .info h2 span{
    font-size: 25px;
    font-weight: 600;
  }

  .content .info p{
    font-size: 12px;
  }

  .info-btn{
    font-size: 12px;
    width: 100%;
    display: flex;
    justify-content: center;
    text-align: center;
  }
}

@media (max-width: 560px){
  header .logo{
    font-size: 18px;
    display: flex;
    align-items: center;
    position: absolute;
  }

  .info{
    width: 100%;
  }

  .content .info h2{
    font-size: 35px;
    line-height: 40px;
    text-align: center;
  }

  .info-btn{
    font-size: 12px;
    width: 100%;
    display: flex;
    justify-content: center;
  }

  .content .info h2 span{
    font-size: 30px;
    font-weight: 600;
  }

  .content .info p{
    font-size: 1rem;
    text-align: justify;
    text-justify: inter-word;
  }
}

  </style>
</head>
  <body>
    <section>
      <input type="checkbox" id="check">
      <header>
        </div>
        <h2><a href="#" class="logo">Expert System</a></h2>
        <div class="navigation">
          <a href="#">Home</a>
          <a href="/about">About</a>
          {{-- <a href="#">Info</a> --}}
          {{-- <a href="#">Services</a> --}}
          <a href="{{ route("auth.login") }}">Admin Panel</a>
        </div>
        <label for="check">
        <i class="fas fa-bars menu-btn"></i>
        <i class="fas fa-times close-btn"></i>
        </label>
      </header>
      <div class="content">
        <div class="info">
          <h2>Diagnosis Kerusakan Jaringan Komputer<br><span>Group 7</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <a href="/diagnose" class="info-btn">Mulai diagnosis</a>
        </div>
      </div>
      {{-- <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div> --}}
    </section>

  </body>
</html>