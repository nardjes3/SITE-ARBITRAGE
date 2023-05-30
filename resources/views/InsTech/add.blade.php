<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Technical Instructor</title>
  <link rel="stylesheet" href="css/instechCss/question.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  


*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: Georgia, 'Times New Roman', Times, serif;
}

body {
  background-color: #15013b;
  height: 100vh;
  font-family: arial, sans-serif;
 
  align-items: center;
  justify-content: center;
}
img {
  width: 100%;
  height: 100%;
}
nav{
  position: fixed;
  top: 0;
  bottom: 0;
  height: 100vh;
  left: 0;
  width: 90px;
  /* width: 280px; */
  background: #fff;
  overflow: hidden;
  transition: 1s;
}
nav:hover{
  width: 280px;
  transition: 1s;
}
.logo{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
  padding-bottom: 3rem;
}

.logo img{
  width: 70px;
  height: 80px;
  border-radius: 50%;
}
.logo span{
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
}
li a{
  position: relative;
  width: 280px;
  font-size: 14px;
  color: rgb(85, 83, 83);
  display: table;
  padding: 10px;
}
nav .fas{
  position: relative;
  width: 70px;
  height: 40px;
  top: 20px;
  font-size: 20px;
  text-align: center;
}





.nav-item{
  position: relative;
  top: 30px;
  margin-left: 9px;
  font-size: smaller;
  
}
.nav-item2{
  position: relative;
  top: 15px;
  margin-left: 9px;
  font-size: smaller;
}
li a:hover{
  background: #eee;
}
li a:hover i{
  color: #1e9bff;
  transition: 0.5s;
}
.logout{
  position: absolute;
  bottom: 0;
}

.container{
  display: flex;
}





.main
{
  position: absolute;
  width:calc(100% - 300px);
  left: 300px;
  min-height: 100vh;
  background: var(--white2);
  transition: 0.5s;
  
}

.main .topbar{
  
  color: var(--black4);
}

.main.active
{
  width:calc(100% - 80px); 
  left: 80px;
}

.topbar
{
  
  width:100%;
  height: 60px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 10px;
}

.search
{
    position: relative;
    width: 400px;
    margin: 0 10px;
    font-size: smaller;
}

.notification
{
    cursor: pointer;
    padding-left: 150px;
   

}

.notification:hover
{
color: #1e9bff;
}  
.search label
{
    position: relative;
    width: 100%;
}

.search label input
{
    width: 80%;
    height: 40px;
    border-radius: 40px;
    padding: 5px 20px;
    padding-left: 35px;
    font-size: 13px;
    outline: none;
    border: 2px solid #1e9bff;
}

.search label .fas
{
    position: absolute;
    top: 0;
    left: 10px;
    font-size: 1.2em;
}

.user
{
    position: relative;
    min-width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    
}

.user img
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.lotg a
{
    margin-right: 120px;
    position: relative;
    background:#eee;
    color: black;
    text-decoration: none;
    /*text-transform: uppercase;*/
    font-size: 1em;
    font-size: smaller;
    letter-spacing: 0.1em;
    font-weight: 400;
    padding: 10px 10px;
    transition: 0.5s;
    
}

.lotg a:hover
{
  background: var(--clr);
  color: var(--clr);
  letter-spacing: 0.25em;
  box-shadow: 0 0 35px var(--clr);
}

.lotg a:before
{
  content: '';
  position: absolute;
  inset: 2px;
  background:white;
}

.lotg a span
{
  position: relative;
  z-index: 1;
}

.lotg a i
{
  position: absolute;
  inset: 0;
  display: block;
}

.lotg a i::before
{
  content: '';
  position: absolute;
  top: 0;
  left: 80%;
  width: 10%;
  height: 4px;
  background: var(--clr);
  transform: translateX(-50%) skewX(325deg);
  transition: 0.5s;

}

.lotg a:hover i::before
{
  width: 20px;
  left: 20%;
}

.lotg a i::after
{
  content: '';
  position: absolute;
  bottom: 0;
  left: 20%;
  width: 10%;
  height: 4px;
  background: var(--clr);
  transform: translateX(-50%) skewX(325deg);
  transition: 0.5s;

}

.lotg a:hover i::after
{
  width: 20px;
  left: 80%;
}


.form1 {
  margin-top: 25px;
  margin-left: 100px;
  background: rgba(255, 255, 255, .3);
  padding: 3rem;
  height: 570px;
  width: 800px;
  border-radius: 20px;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  -moz-backdrop-filter: blur(10px);
  box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
  text-align: center;
}

p {
  color: black;
  font-weight: 500;
  opacity: .7;
  font-size: 1.4rem;
  margin-bottom: 60px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  font-family: 'Times New Roman', Times, serif;
}

input {
  background: white;
  border: none;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 0px solid rgba(255, 255, 255, .3);
  padding: 1rem;
  width: 300px;
  border-radius: 50px;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  -moz-backdrop-filter: blur(5px);
  box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
  color: black;
  font-weight: 50;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  transition: all .3s;
  margin-bottom: 0.1em;
  font-family: 'Times New Roman', Times, serif;
}
.inpq{
  width: 600px;
}
button {
  background: rgba(255, 255, 255, .3);
  margin-top: 10px;
  width: 150px;
  height: 35px;
  font-size: 1rem;
  cursor: pointer;
  margin-left: 260px;
  text-decoration: none;
  border-radius: 5px;
  font-family: 'Times New Roman', Times, serif;
}
button:first-child:hover{
  color: green;
}
button:last-child a:hover {
  color: rgb(212, 22, 22);
}
button:last-child a {
  text-decoration: none;
  outline: none;
  box-sizing: border-box;
  color: black;
}


  </style>
<body>
  
  
  <div class="container">
  
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="{{ URL('images/imagesInsTech/lgo.png')}}">
          <span class="nav-item"><small>Whistle Experts</small></span>
        </a></li>
        <li><a href="{{ URL('InsTech') }}">
            <i class="fas fa-house"></i>
          <span class="nav-item2">Dashboard</span>
        </a></li>
        <li><a href="{{ URL('choix1') }}">
          <i class="fas fa-file-lines"></i>
          <span class="nav-item2">Prepare Test</span>
        </a></li>
        <li><a href="{{URL('choix_test')}}">
          <i class="fas fa-globe"></i>
          <span class="nav-item2">Online Test</span>
        </a></li>
        <li><a href="{{URL('site_arbi/results')}}">
          <i class="fas fa-square-poll-vertical"></i>
          <span class="nav-item2">Results</span>
        </a></li>
        <br>
        @if(Auth::guard('instricteur_tech')->user()->grade == "1")
        <li><a href="{{URL('site_arbi/questions')}}">
          <i class="fas fa-file-edit"></i>
          <span class="nav-item2">Edit Questions</span>
        </a></li>
        <li><a href="{{URL('site_arbi/videos')}}">
          <i class="fas fa-video"></i>
          <span class="nav-item2">Edit Videos</span>
        </a></li>
        @endif

        <li><a href="{{URL('/ins_tech/logout')}}" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item2">Log out</span>
        </a></li>
      </ul>
    </nav>
   <!-- main -->
   <div class="main">
    <div class="topbar">
        <!-- Search -->
        <div class="search">
            <label>
                <input type="text" placeholder="Search Here">
                <i class="fas fa-search"></i>
            </label>
        </div>
        <div class="lotg">
          <a href="#" style="--clr:#1e9bff"><span>Laws Of The Game</span><i></i></a>
        </div>
        <!-- Notification -->
        <div class="notification">
          <i class="fas fa-bell"></i>
        </div>
        <!-- UserImg -->
        <div class="user" >
          
            <a href="{{  URL('prflinstech') }}"><img src="{{ URL('images/imagesInsTech/profile.png')}}" ></a>
        </div>
    </div>
    <div class="container2">
    <div class="container3">
      <div class="cont">
        <div class="form1">
    
    <p>Add Question</p>
    
          <form action="/add" method="post">
              @csrf
              <!--<input type="text" name="id"  placeholder="Enter id">-->
              <input type="text" name="level"  placeholder="Enter level : Beginners or Advanceds">
              <br><br>
              <input type="text" name="question"  placeholder="Enter Question" class="inpq">
              <br><br>
              <input type="text" name="a"   placeholder="Enter answer1">
              <input type="text" name="b"   placeholder="Enter answer2">
              <input type="text" name="c"   placeholder="Enter answer3">
              <input type="text" name="d"   placeholder="Enter answer4">
              <br><br>
              <input type="text" name="ans"   placeholder="Enter the correct answer">
              <br><br>
              <button class="btn btn-primary" type="submit"><a href="InsTech/questions">Add</a></button>
              <button class="btn btn-primary" ><a href="/site_arbi/questions">Back </a></button>
            </form>
      
        </div>
        
      </div>
            </div>
        
    </div>
    
    <script type="text/javascript" src="{{URL('js/InsTechJs/vanilla-tilt.js')}}"></script>
    <script type="text/javascript" src="{{URL('js/InsTechJs/vanilla-tilt.js')}}"></script>
    <script>
    VanillaTilt.init(document.querySelectorAll(".card"), {
        max: 25,
        speed: 400
    });
    </script>
    </div>
 
  
</body>
</html>






 