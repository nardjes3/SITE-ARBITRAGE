<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Technical Instructor</title>
    <link rel="stylesheet"  />
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
body{
  background: #15013b;
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


button {
  background-color: white;
  color: #161623;
  border-radius: 5px;
  display: flex;
  width: 100%;
  height: 40px;
  padding: 0 .8rem;
  font-family:Arial, Helvetica, sans-serif;
  justify-content: center;
  align-items: center;
  
  transition: .2s;
    
}
button a {
  color: #161623;
  font-family: Georgia, 'Times New Roman', Times, serif;
  font-size:medium;
}


td a:first-child {
  color: green;
}

td a:last-child{
  color: rgb(212, 22, 22);
  margin-left: 20px;
}






table, th, td {
  border-collapse: collapse;
  padding: 1rem;
  text-align: left;
}

.table__header{
  display: flex;
}



.table__header {
  width: 100%;
  height: 10%;
  background-color: #fff4;
  padding: .8rem 1rem;

  display: flex;
  justify-content: space-between;
  align-items: center;
}

.table__body {
  width: 90%;
  
  background-color: #fffb;

  margin: .8rem auto;
  border-radius: .6rem;

  
  overflow: overlay;
}
.table{
  width: 100%;
}
tbody tr:nth-child(even) {
  background-color: #0000000b;
}

tbody tr {
  --delay: .1s;
  transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
  opacity: 0;
  transform: translateX(100%);
}

tbody tr:hover {
  background-color: #fff6 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
  transition: .2s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
  padding: 0;
  font: 0 / 0 sans-serif;
  transition: .2s ease-in-out .5s;
}
tbody tr.hide td img {
  width: 0;
  height: 0;
  transition: .2s ease-in-out .5s;
}

thead th {
  position: sticky;
  top: 0;
  left: 0;
  background-color: #d5d1defe;
  cursor: pointer;
  text-transform: capitalize;
}
main.table {
  width: 90%;
  height: 100%;
  background-color: #fff5;

  backdrop-filter: blur(7px);
  box-shadow: 0 .4rem .8rem #0005;
  border-radius: .8rem;

  overflow: hidden;
}
table, th, td {
  border-collapse: collapse;
  padding: 1rem;
  text-align: center;
}

h1{
  color: #161623;
}

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');



.alert{
  background: #9bffb1;
  padding: 20px 40px;
  min-width: 420px;
  position: absolute;
  right: 250px;
  top: 10px;
  border-radius: 4px;
  border-left: 8px solid #41b831;
  overflow: hidden;
  opacity: 0;
  pointer-events: none;
}
.alert.showAlert{
  opacity: 1;
  pointer-events: auto;
}
.alert.show{
  animation: show_slide 1s ease forwards;
}
@keyframes show_slide {
  0%{
    transform: translateX(100%);
  }
  40%{
    transform: translateX(-20%);
  }
  80%{
    transform: translateX(0%);
  }
  100%{
    transform: translateX(-20px);
  }
}
.alert.hide{
  animation: hide_slide 1s ease forwards;
  right: 0;
}
@keyframes hide_slide {
  0%{
    transform: translateX(-10px);
  }
  40%{
    transform: translateX(0%);
  }
  80%{
    transform: translateX(-10%);
  }
  100%{
    transform: translateX(100%);
  }
}
.alert .fa-check-circle{
  position: absolute;
  left: 20px;
  top: 50%;
  transform: translateY(-50%);
  color: #0aa130;
  font-size: 30px;
}
.alert .msg{
  padding: 0 20px;
  font-size: 18px;
  color: #0aa130;
}
.alert .close-btn{
  position: absolute;
  right: 0px;
  top: 50%;
  transform: translateY(-50%);
  background: #41b831;
  padding: 20px 18px;
  cursor: pointer;
}
.alert .close-btn:hover{
  background: #41b831;
}
.alert .close-btn .fas{
  color: #0aa130;
  font-size: 22px;
  line-height: 40px;
}
    </style>
  <body>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="#" class="logo">
              <img src="{{ URL('images/imagesInsTech/lgo.png')}}">
              <span class="nav-item"><small>Whistle Experts</small></span>
            </a>
          </li>
          <li>
            <a href="{{ URL('InsTech') }}">
              <i class="fas fa-house"></i>
              <span class="nav-item2">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="{{ URL('choix1') }}">
              <i class="fas fa-file-lines"></i>
              <span class="nav-item2">Prepare Test</span>
            </a>
          </li>
          <li>
            <a href="{{URL('choix_test')}}">
              <i class="fas fa-globe"></i>
              <span class="nav-item2">Online Test</span>
            </a>
          </li>
         
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
      <div class="main">
        <div class="topbar">
          <div class="search">
            <label>
              <input type="text" placeholder="Search Here">
              <i class="fas fa-search"></i>
            </label>
          </div>
          <div class="lotg">
            <a href="#" style="--clr:#1e9bff"><span>Laws Of The Game</span><i></i></a>
          </div>
          <div class="notification">
            <i class="fas fa-bell"></i>
          </div>
          <div class="user" >
            <a href="{{  URL('prflinstech') }}"><img src="{{ URL('images/imagesInsTech/profile.png')}}" ></a>
          </div>
        </div>
        <div class="container2">
          <div class="container3">
            <br><br>
            <main class="table">
              <section class="table__header">
                <h1> <i>Please choose the test that you went to share :</i> </h1>
                
              </section>
              <section class="table__body">
                <div class="tb">
                  <table class="table" >
                    <thead>
                      <tr>
                        <th> number of test </th>
                        <th> Level </th>
                        <th> View Questions</th>
                        <th> share</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($members as $member )
                      <tr>
                        <td>{{$member['id']}}</td>
                        <td>{{$member['niveau']}}</td>
                        <td>
                          <a href={{"view_qst/".$member['id']}} class="text-black btn btn-succes ml-2 pt-2" style="color:blue">
                            <i class="fa fa-eye"></i>
                          </a>   
                        </td>
                        <td>
                            <a id="{{$member['id']}}" class="share-btn" style="color:green" href="dza">
                              <i class="fa fa-share"></i>
                            </a>             
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="alert hide"> 
                  <span class="fas fa-check-circle"></span>
                  <span class="msg">Succes : Test Shared with Succes</span>
                  <div class="close-btn">
                     <span class="fas fa-times"></span>
                  </div>
               </div>
              </section>
            </main>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script>
               $(".share-btn").click(function(e){
                e.preventDefault();
                let id = $(this).attr("id");
                $.ajax({
                                url : "/set_selected_test",
                                type: "GET",
                                data: {
                                  "test_id":id,
                                },
                                dataType: 'json',
                                success:function(response) {
                                     // alert("Succesfully test created");
                                }
                            });
                  
               });
            </script>
            <script>
              $(".share-btn").click(function(){
                $('.alert').addClass("show");
                $('.alert').removeClass("hide");
                $('.alert').addClass("showAlert");
                setTimeout(function(){
                  $('.alert').removeClass("show");
                  $('.alert').addClass("hide");
                },5000);
              });
              $('.close-btn').click(function(){
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
              });
           </script>
          </div>
        </div>
      </div> 
    </div>
  </body>
  </html>
