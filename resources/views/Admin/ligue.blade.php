<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ligue 1</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    
        <link rel="stylesheet" href="{{asset('css/AdminCss/payee.css') }}">

        <link rel="stylesheet" href="{{asset('css/AdminCss/ligue.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS-->

    <!-- Main CSS-->
    <link href="{{asset('css/AdminCss/header.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/AdminCss/menu.css')}}" rel="stylesheet" media="all">
</head>
<body style="background-image:url({{asset('images/imagesAdmin/vall.png')}}); background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%; ">
  @include('Admin/menu')

  <div class="d">
<div class="d1">
    <strong> {{ $rencs}} </strong>
</div>
<div class="d2">
    <strong>1</strong>
</div>
</div>
<div class="main-content" style=" margin-top:50px;">

<div class="content" style="width: 97%; margin-left:20px; z-index:-100"  >
    <ul class="notifications"></ul>
    <main class="table" style="z-index: -100; width: 1190px; height:380px">
        <section class="table__header" style="height:50px">
            <h1></h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/imagesAdmin/search.png" alt="">
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
                  <?php if ($rencontre['day'] == $rencs && $rencontre['ligue'] == 1) : ?>
                    <tr>
                        <td> {{$rencontre['equipe1']}} - {{$rencontre['equipe2']}} </td>
                        <td style="color: red">{{$rencontre['heure_debut']}} | {{$rencontre['heure_fin']}}</td>
                        <td> {{$rencontre['arbi1']}} </td>
                        <td> {{$rencontre['arbi2']}} </td>
                        <td> {{$rencontre['arbi3']}}</td>
                        <td> {{$rencontre['arbi4']}} </td>
                    </tr>
                    <?php endif; ?>
                  @endforeach
                   
                    
                </tbody>
            </table>
        </section>
    </main>
</div>
   
    
    


<div class="jour">

      <a href="/ligue/1"><button > Day 1 </button></a>

      <a href="/ligue/2"><button > Day 2 </button></a>

        <a href="/ligue/3"><button > Day 3 </button></a>

        <a href="/ligue/4"><button> Day 4 </button></a>

        <a href="/ligue/5"><button> Day 5 </button></a>

        <a href="/ligue/6"><button> Day 6 </button></a>

        <a href="/ligue/7"><button> Day 7 </button></a>

        <a href="/ligue/8"><button> Day 8 </button></a>

    </div>

    
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
