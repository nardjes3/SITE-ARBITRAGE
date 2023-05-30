<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Technical Instructor</title>
  <link rel="stylesheet" href="css/instechCss/techins.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="{{ URL('images/imagesInsTech/logo.png')}}">
          
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
    <div>
       <!-- image -->
       <div id="image">
        <img src="{{ URL('images/imagesInsTech/football_player.png')}}" alt="football player png">
    </div>
    

    <!-- content -->
    <div id="content">
        <h2>Foot</h2>
        <h4>Ball</h4>
    </div>
    <!-- lines -->
    <div id="line1"></div>
    <div id="line2"></div>
  </div>
</body>
</html>
