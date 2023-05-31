<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    
        <link rel="stylesheet" href="{{asset('css/AdminCss/payee.css')}}">

        <link rel="stylesheet" href="{{asset('css/AdminCss/ligue.css')}}">

 <!-- Libraries Stylesheet -->
 <link href="{{URL('css/ArbitreCss/owl.carousel.min.css')}}" rel="stylesheet">
 <link href="{{URL('css/ArbitreCss/animate.min.css')}}" rel="stylesheet">

 <!-- Customized Bootstrap Stylesheet -->
 <link href="{{URL('css/ArbitreCss/bootstrap.min.css')}}" rel="stylesheet">

 <!-- Template Stylesheet -->
 <link href="{{URL('css/ArbitreCss/style.css')}}" rel="stylesheet">


    



    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    

</head>
<body style="background-image:url({{asset('images/imagesAdmin/bac2.jpg')}}); background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%; ">
 
	
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style="background:  rgba(152, 158, 175, 0.733);
    backdrop-filter: blur(5px);">
        
        <a href="index.html" class="navbar-brand p-0">
            
            <img src="{{URL('images/imagesArbitre/we.png')}}" width="300px" height="100px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarCollapse" >
            <div class="navbar-nav ms-auto py-0" >
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="{{URL('/laws')}}" class="nav-item nav-link">Laws Of The Game</a>
                <a href="/MyRepport" class="nav-item nav-link">Report</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quiz</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{URL('/start_vid')}}" class="dropdown-item">Videos Quiz</a>
                        <a href="{{URL('/quiz')}}" class="dropdown-item">Questions Quiz</a>
                    </div>
                </div>
                @if(Auth::guard('arbitre')->user()->test_envoyee == "1")
                <span style="background-color: red; border-radius:50%; width:15px; font-size:12px; height:16px; text-align: center; margin-top:25px; z-index:100; cursor:pointer; color:white;">1</span>
                @endif
                <a href="<?php echo "myDesign/" . Auth::guard('arbitre')->user()->id; ?>" class="nav-item nav-link">Designation</a>
                @if(Auth::guard('arbitre')->user()->notification_envoyee == "1")
                <span style="background-color: red; border-radius:50%; width:15px; font-size:12px; height:16px; text-align: center; margin-top:25px; z-index:100; cursor:pointer; color:white;">1</span>
                @endif
                <a href="<?php echo "Mypayement/" . Auth::guard('arbitre')->user()->id; ?>" class="nav-item nav-link">Payement</a>
                @if(Auth::guard('arbitre')->user()->paye_envoyee == "1")
                <span style="background-color: red; border-radius:50%; width:15px; font-size:12px; height:16px; text-align: center; margin-top:25px; z-index:100; cursor:pointer; color:white;">1</span>
                @endif

            </div>
            
            
        </div>
        
    </nav>
    

<div class="content" style="width: 97%; margin-top:70px; margin-left:20px; z-index:-100"  >
    <ul class="notifications"></ul>
    <main class="table" style="z-index: -100; width: 1190px; height:380px">
        <section class="table__header" style="height:50px">
            <h1></h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="{{asset('images/imagesAdmin/search.png')}}" alt="">
            </div>
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Rencontre <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Date & Heure <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Arbiter <span class="icon-arrow">&UpArrow;</span></th>
                        <th> 1st assistant <span class="icon-arrow">&UpArrow;</span></th>
                        <th> 2nd assistant <span class="icon-arrow">&UpArrow;</span></th>
                        <th> 4th arbiter <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($rencontres as $rencontre)
                    <tr>
                        <td> {{ $rencontre->equipe1 }} - {{ $rencontre->equipe2 }} </td>
                        <td style="color: red">{{ $rencontre->heure_debut }} | {{ $rencontre->heure_fin }}</td>
                        <td> {{ $rencontre->arbi1 }} </td>
                        <td> {{ $rencontre->arbi2 }} </td>
                        <td> {{ $rencontre->arbi3 }}</td>
                        <td> {{ $rencontre->arbi4 }} </td>
                    </tr>
                  @endforeach
                   
                    
                </tbody>
            </table>
        </section>
    </main>
</div>
   
    
    



    
 


    

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    
	<script src="js/AdminJs/calendar.js"></script>
    <script src="js/AdminJs/sidebar.js"></script>
    <script src="js/AdminJs/sdBar.js"></script>
    <script src="js/AdminJs/payee.js"></script>


 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
