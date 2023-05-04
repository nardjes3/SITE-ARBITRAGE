<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css/AdminCss/sidebar2.css">
        <link rel="stylesheet" href="css/AdminCss/header.css">
        <link rel="stylesheet" href="css/AdminCss/dashboard.css">
        <link rel="stylesheet" href="css/AdminCss/hexagone.css">
        <link rel="stylesheet" href="css/AdminCss/sdBar.css">



    



    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    

</head>
<body>

	

  <video autoplay loop muted  class="back-vid">
    <source src="images/imagesAdmin/2.mp4" type="video/mp4"><source>
</video>

<div class="sidebar">
  <div class="logo">
    <img src="images/imagesAdmin/logo04.png" alt="logo" id="logo_img" style="width: 60px; height:60px; margin-right:20px">
    <div class="logo_text">Whistle Experts</div>
    <i class='bx bx-menu-alt-right' id="btn" ></i>
  </div>

  <div class="nav_list">
    <ul>
      <li>
        <a href="/dash">
          <span ><img src="images/imagesAdmin/dashboard.png" style="width:30px; margin-left:30px;" alt=""></span>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>

      <li>
        <a href="/list">
          <span class="icon"><img src="images/imagesAdmin/referee.png" style="width:30px; margin-left:30px;" alt=""></span>
          <span class="links_name">Referees</span>
        </a>
        <span class="tooltip">Referees</span>
      </li>

      <li>
        <a href="/repport">
          <span class="icon"><img src="images/imagesAdmin/reports.png" style="width:30px; margin-left:30px;" alt=""></span>
          <span class="links_name Messages">Reports</span>
        </a>
        <span class="tooltip">Reports</span>
      </li>

      <li>
        <a href="/instructor">
          <span class="icon"><img src="images/imagesAdmin/instructor.png" style="width:33px; margin-left:30px;" alt=""></span>
          <span class="links_name">Instructors</span>
        </a>
        <span class="tooltip">Instructors</span>
      </li>

      <li>
        <a href="/payee">
          <span class="icon"><img src="images/imagesAdmin/paiement.png" style="width:30px; margin-left:30px;" alt=""></span>
          <span class="links_name">Payment</span>
        </a>
        <span class="tooltip">Payment</span>
      </li>

      <li>
        <a href="/calendar">
          <span class="icon"><img src="images/imagesAdmin/calendar.png" style="width:30px; margin-left:30px;" alt=""></span>
          <span class="links_name">Calendar</span>
        </a>
        <span class="tooltip">Calendar</span>
      </li>
      <li>
        <a href="/analytics">
          <span class="icon"><img src="images/imagesAdmin/chart.png" style="width:35px; margin-left:30px;" alt=""></span>
          <span class="links_name">Analytics</span>
        </a>
        <span class="tooltip">Analytics</span>
      </li>
    </ul>


    <div class="logout">
      <a href="#">
        <span class="icon"><img src="images/imagesAdmin/logout.png" style="width:30px; margin-left:30px;" alt=""></span>
        <span class="links_name">Log out</span>
      </a>
      <span class="tooltip">Log out</span>
    </div>
  </div>
</div>



    <div class="wrapper">
        <div class="navbar" >
          <div class="navbar_left">
            <div class="logo">
            </div>
          </div>
      
          <div class="navbar_right" >
            <div class="not" >
                <img src="images/imagesAdmin/notification.png" style="margin-right: 20px; width:30px; margin-top:8px"  onclick="menuT3();" alt="profile_img">
              
                <div class="menu3" >

                    <h2>4 Notifications</h2>
        
                    <div class="row">
                        <img src="images/imagesAdmin/alarm.png">
                        <div class="tag">
                            
                                <p class="user_activity">
                                  <strong>Mark Webber</strong> sent you a 
                                  <b>private message!</b>
                                </p>
                                <p class="time">1m ago</p>
                              
                        </div>
                    </div>
        
                    <div class="row">
                        <img src="images/imagesAdmin/alarm.png">
                        <div class="tag">
                            
                                <p class="user_activity">
                                  <strong>Mark Webber</strong> sent you a 
                                  <b>private message!</b>
                                </p>
                                <p class="time">1m ago</p>
                              
                        </div>
                    </div>
        
                    <div class="row">
                        <img src="images/imagesAdmin/alarm.png">
                        <div class="tag">
                            
                                <p class="user_activity">
                                  <strong>Mark Webber</strong> sent you a 
                                  <b>private message!</b>
                                </p>
                                <p class="time">1m ago</p>
                              
                        </div>
                    </div>
        
                    <div class="row">
                        <img src="images/imagesAdmin/alarm.png">
                        <div class="tag">
                            
                                <p class="user_activity">
                                  <strong>Mark Webber</strong> sent you a 
                                  <b>private message!</b>
                                </p>
                                <p class="time">1m ago</p>
                              
                        </div>
                    </div>
        
                    <div class="show_all">
                        <p class="link">Show All </p>
                    </div> 
        
            </div>
            </div>
            {{-- <div class="mail" >
                <img src="images/imagesAdmin/email.png"  onclick="menuT2();" alt="profile_img">
              
                <div class="menu2" >

                        <h2>List of reports</h2>
            
                        <div class="row">
                            <img src="images/imagesAdmin/etchiali.jpg">
                            <div class="tag">
                                <strong>Mr Etchiali</strong>
                                <p>Yesterday at 07:12 </p>
                            </div>
                        </div>
            
                        <div class="row">
                            <img src="images/imagesAdmin/mustapha.jpg">
                            <div class="tag">
                                <strong>Mr ghorbel</strong>
                                <p>10/04/2023</p>
                            </div>
                        </div>
            
                        <div class="row">
                            <img src="images/imagesAdmin/ar05.jpg">
                            <div class="tag">
                                <strong>Mr Burt</strong>
                                <p>10/04/2023</p>
                            </div>
                        </div>
            
                        <div class="row">
                            <img src="images/imagesAdmin/gabriel.jpg">
                            <div class="tag">
                                <strong>Mr gabriel</strong>
                                <p>21/03/2023</p>
                            </div>
                        </div>
            
                        <div class="show_all">
                            <p class="link">Show All Reports</p>
                        </div> 
            
                </div>
            </div> --}}
            <div class="profile">
              <div class="icon_wrap">
                <img src="images/imagesAdmin/sec.jpg" style="border-radius: 50%; border-color: white;" alt="profile_pic">
                <span class="name" onclick="menuT();">John Alex</span>
                <i  class="fas fa-chevron-down" onclick="menuT();"></i>
              </div>
      
              <div class="menu">
                <h3>
                    User Account
                    <div>
                        Operational Team
                    </div>
                </h3>
                <ul>
                    <li>
                        <span class="material-icons icons-size">person</span>
                        <a href="/profilAdmin">My Profile</a>
                    </li>
                   
                    <li>
                        <span class="material-icons icons-size">account_balance_wallet</span>
                        <a href="#">Wallet</a>
                    </li>
                </ul>
            </div>
            </div>
         
         </div>
</div>
</div>

{{-- <div class="anim">
    <svg viewBox="400 300 1350 1000">
        <defs>
            <linearGradient id="gradient" y1="0" y2="1">
             <stop stop-color="white" offset="0"/>
             <stop stop-color="white" offset="1"/>
            </linearGradient>
           </defs>
        <text x="40%" y="42%" stroke="url(#gradient)" fill="black">
            Algerian referees 2023 
        </text>
    </svg>
</div> --}}

<div class="wrapper2">
    <div class="outer">
      <div class="card" style="--delay:-1;">
        <div class="content">
          <div class="img"><img src="images/imagesAdmin/ghorbel.jpg" alt=""></div>
          <div class="details">
            <span class="name">GHORBEL Mustapha</span>
            <p>REFEREE SINCE 2014</p>
          </div>
        </div>
        <a href="#">View</a>
      </div>
      <div class="card" style="--delay:0;">
        <div class="content">
          <div class="img"><img src="images/imagesAdmin/lehlou.jpg" alt=""></div>
          <div class="details">
            <span class="name">BENBRAHAM Lehlou</span>
            <p>REFEREE SINCE 2016</p>
          </div>
        </div>
        <a href="#">View</a>
      </div>
      <div class="card" style="--delay:1;">
        <div class="content">
          <div class="img"><img src="images/imagesAdmin/nabil.jpg" alt=""></div>
          <div class="details">
            <span class="name">BOUKHALFA Nabil</span>
            <p>REFEREE SINCE 2017</p>
          </div>
        </div>
        <a href="#">View</a>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
          <div class="img"><img src="images/imagesAdmin/mokran.jpg" alt=""></div>
          <div class="details">
            <span class="name">GOURARI Mokrane</span>
            <p>Assistant REFEREE SINCE 2014</p>
          </div>
        </div>
        <a href="#">View</a>
      </div>
      
      <div class="card" style="--delay:2;">
        <div class="content">
          <div class="img"><img src="images/imagesAdmin/sara.jpeg" alt=""></div>
          <div class="details">
            <span class="name">KEMMAD Sara</span>
            <p>Assistant REFEREE SINCE 2022</p>
          </div>
        </div>
        <a href="#">View</a>
        
      </div>
    </div>
  </div>

  
{{-- <div class="cont">
            <h2 class="chart-heading" >Referee level percentage</h2>
    <div class="programming-stats">
      <div class="chart-container">
        <canvas class="my-chart"></canvas>
      </div>

      <div class="det">
        <ul></ul>
      </div>
    </div>
</div>

<div class="chart-cont" >
    <h2 class="chart-head">Popularity of Programming Languages</h2>
    <canvas id="custom-chart"></canvas>
  </div> --}}

  {{-- <div class="wrap3">
    <div class="card3">
<img src="images/imagesAdmin/f.jpg" alt="">
      <div class="descriptions">
            <h1>John Wick 3</h1>
            <p>
                After gunning down a member of the High Table .
            </p>
            <button>
                Read more
            </button>
        </div>
    </div>
    <div class="card3">
      <img src="images/imagesAdmin/f.jpg" alt="">
            <div class="descriptions">
                  <h1>John Wick 3</h1>
                  <p>
                      After gunning down a member of the High Table .
                  </p>
                  <button>
                      Read more
                  </button>
              </div>
          </div>
          <div class="card3">
            <img src="images/imagesAdmin/f.jpg" alt="">
                  <div class="descriptions">
                        <h1>John Wick 3</h1>
                        <p>
                            After gunning down a member of the High Table .
                        </p>
                        <button>
                            Read more
                        </button>
                    </div>
                </div>
                <div class="card3">
                  <img src="images/imagesAdmin/f.jpg" alt="">
                        <div class="descriptions">
                              <h1>John Wick 3</h1>
                              <p>
                                  After gunning down a member of the High Table .
                              </p>
                              <button>
                                  Read more
                              </button>
                          </div>
                      </div>
</div> --}}
{{-- <div class="wrap4">
  <div class="card3">
<img src="images/imagesAdmin/f.jpg" alt="">
    <div class="descriptions">
          <h1>John Wick 3</h1>
          <p>
              After gunning down a member of the High Table .
          </p>
          <button>
              Read more
          </button>
      </div>
  </div>
</div> --}}


    

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    
	<script src="js/AdminJs/dash.js"></script>
    <script src="js/AdminJs/sidebar.js"></script>
    <script src="js/AdminJs/sdBar.js"></script>

 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
