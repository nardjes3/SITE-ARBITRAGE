<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Technical Instructor</title>
  <link rel="stylesheet" href="css/instechCss/prflinstech.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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
        <li><a href="{{URL('choix1')}}">
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
          
            <a href="{{ URL('prflinstech') }}"><img src="{{ URL('images/imagesinstech/profile.png')}}" ></a>
        </div>
    </div>
    <div class="wrapper">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
  </div>
    <span class="main_bg"></span>
    <div class="container5">

        <!-- ===== ===== Header/Navbar ===== ===== -->
        


        <!-- ===== ===== User Main-Profile ===== ===== -->
        <section class="userProfile card">
            <div class="profile">
              @foreach ($members as $member )
                <figure><img src="{{URL('images/imagesinstech')}}/{{$member->image}}" alt="profile" width="250px" height="250px"></figure>
                
                <br>

               
                <h1>{{$member->nom}}    {{$member->prenom}}</h1>
            </div>
        </section>


        <!-- ===== ===== Work & Skills Section ===== ===== -->
        <section class="work_skills card">
            <div class="right">
                <div class="info">
                    <h3>Informations</h3>
                    <div class="info_data">
                        <div class="data">
                          
                            <h4>First Name</h4>
                            <br>
                             <p>{{$member->nom}}</p>
                         </div>
                         <div class="data">
                            <h4>Last Name</h4>
                            <br>
                             <p>{{$member->prenom}}</p>
                         </div>
                    </div>
                </div>
                <div class="info_data">
                     <div class="data">
                        <h4>Email</h4>
                        <br>
                        <p>{{$member->email}}</p>
                     </div>
                     <div class="data">
                       <h4>Phone</h4>
                       <br>
                        <p>{{$member->num_tel}}</p>
                    </div>
                </div>
                <br>
                
                <div class="info_data">
                    <div class="data">
                       <h4>Gender</h4>
                       <br>
                       <p>{{$member->gender}}</p>
                    </div>
                    <div class="data">
                      <h4>Country</h4>
                      <br>
                       <p>{{$member->country}}</p>
                   </div>
               </div>
               <br>
               <div class="info_data">
                <div class="data">
                   <h4>Level</h4>
                   <br>
                   <p>{{$member->level}}</p>
                </div>
                <div class="data">
                  <h4>Main Role</h4>
                  <br>
                   <p>{{$member->main_role}}</p>
                   @endforeach
               </div>
           </div>
            </div>
        </section>
       
        
    </div>
</div>
    <script type="text/javascript" src="js/InsTechJs/vanilla-tilt.js"></script>
    <script type="text/javascript" src="js/InsTechJs/vanilla-tilt.js"></script>
    <script>
    VanillaTilt.init(document.querySelectorAll(".card"), {
        max: 25,
        speed: 400
    });
    </script>
    </div>
</body>
</html>
