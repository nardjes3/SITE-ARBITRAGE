<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Technical Instructor</title>
  <link rel="stylesheet" href="css/instechCss/choix2.css" />
  <!-- Font Awesome Cdn Link -->
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
          
            <a href="{{  URL('prflinstech') }}"><img src="{{ URL('images/imagesInsTech/profile.png')}}" ></a>
        </div>
    </div>
    <div class="container2">
    <div class="container3">
        <h4>Please Choose The Level Of Test :</h4>
        <div class="card">
          <img src="{{  URL('images/imagesInsTech/beg.png') }}" width="190px" class="img" >
            <div class="content">
                <h2>01</h2>
                <h3>Level 1</h3>
                <p>For Beginners</p>
                <a href="{{  URL('site_arbi/test_vid') }}">
                    <span>Level 1</span></a>
            </div>
        </div>
        <div class="card">
          <img src="{{  URL('images/imagesInsTech/adv.png') }}" width="190px" class="img" >
            <div class="content">
                <h2>02</h2>
                <h3>Level 2</h3>
                <p>For Advanceds</p>
                <a href="{{  URL('site_arbi/test_vid_adv') }}"><span>Level 2</span></a> 
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript" src="{{URL('js/vanilla-tilt.js')}}"></script>
    <script type="text/javascript" src="{{URL('js/vanilla-tilt.js')}}"></script>
    <script>
    VanillaTilt.init(document.querySelectorAll(".card"), {
        max: 25,
        speed: 400
    });
    </script>
    </div>
</body>
</html>
