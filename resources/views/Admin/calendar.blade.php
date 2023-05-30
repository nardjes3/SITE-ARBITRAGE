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

    

        <link rel="stylesheet" href="css/AdminCss/calendar.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
          rel="stylesheet"
        />
        <!-- Bootstrap CSS-->
        <link href="css/AdminCss/bootstrap.min.css" rel="stylesheet" media="all">
    
        <!-- Main CSS-->
        <link href="css/AdminCss/theme.css" rel="stylesheet" media="all">
        <link href="css/AdminCss/menu.css" rel="stylesheet" media="all">

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    

</head>

<body style="background-image:url(images/imagesAdmin/5.jpg); background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%; ">
 
	
  @include('Admin/menu')
      
  <div class="main-content" style=" margin-top:-50px;">
    <div class="popup">
      <div class="popup-overlay"></div>
      <div class="main-popup">
        <div class="popup-content">
          <span class="close-btn">&times;</span>
          <div class="frm">
            <div class="title1"></div>
            <form class="form" action="design" method="POST" enctype="multipart/form-data">
              {{ csrf_field()}}
            <div class="inputfield">
                <label>Ligue level </label>
                <div class="custom_select">
                  <select name="ligue">
                    <option value=""> </option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                  </select>
                </div>
             </div>   
             <div class="inputfield">
                <label>Day N° </label>
                <div class="custom_select">
                  <select name="day">
                    <option value=""> </option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                  </select>
                </div>
             </div>  
             <div class="inputfield">
              <label>Equipe 1</label>
              <input name="equipe1" type="text" class="input">
           </div> 
           <div class="inputfield">
            <label>Equipe 2</label>
            <input name="equipe2" type="text" class="input">
         </div> 
         
       <div class="inputfield">
        <label>heure fin</label>
        <input name="heure_debut" type="time" class="input">
     </div> 
     <div class="inputfield">
      <label>heure fin</label>
      <input name="heure_fin" type="time" class="input">
   </div> 
         
     <div class="inputfield">
      <label>date</label>
      <input name="date" type="date" class="input">
   </div>   
            
             <div class="inputfield">
                <label>central referee</label>
                <input name="arbi1" type="text" class="input">
             </div> 
             <div class="inputfield">
                <label>assistat 1</label>
                <input name="arbi2" type="text" class="input">
             </div> 
             <div class="inputfield">
                <label>Assistant 2</label>
                <input name="arbi3" type="text" class="input">
             </div> 
             <div class="inputfield">
                <label>4 eme arbitre</label>
                <input name="arbi4" type="text" class="input">
             </div>
             <div class="inputfield">
              <label>Amount</label>
              <input name="amount" type="text" class="input">
           </div> 
             
           
           <div class="inputfield">
             <input type="submit" value="Submit" class="btn">
           </div>
          </form>
        </div>
    </div>
      </div>
    </div>


  
<div class="container" style="width:1100px">
    <div class="left">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date"></div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>
        <div class="goto-today">
          <div class="goto">
            <input type="text" placeholder="mm/yyyy" class="date-input" />
            <button class="goto-btn">Go</button>
          </div>
          <button class="today-btn">Today</button>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="butt">
        <a href="/ligue/1"><button class="btn1"> ligue 1 </button></a>
      <a href="/ligue2/1"><button class="btn2">ligue 2</button></a>
    </div>
      <div class="today-date ">
        <div class="event-day">wed</div>
        <div class="event-date">12th december 2022</div>
      </div>
      <div class="events "><button class="open-btn "> </button> </div>
      <div class="add-event-wrapper">
        <div class="add-event-header">
          <div class="title">Add Match</div>
          <i class="fas fa-times close"></i>
        </div>
        <div class="add-event-body">
          <div class="add-event-input">
            <input type="text" placeholder="First Equipe" class="event-name" />
          </div>
          <div class="add-event-input">
            <input type="text" placeholder="Seconde Equipe" class="event-name2" />
          </div>
          <div class="add-event-input">
            <input
              type="text"
              placeholder="Match Time From"
              class="event-time-from"
            />
          </div>
          <div class="add-event-input">
            <input
              type="text"
              placeholder="Match Time To"
              class="event-time-to"
            />
          </div>
        </div>
        <div class="add-event-footer">
          <button class="add-event-btn">Add Match</button>
        </div>
      </div>
    </div>
    <button class="add-event">
      <i class="fas fa-plus"></i>
    </button>
  </div>
</div>

 


    

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    
	<script src="js/AdminJs/calendar.js"></script>

 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- Jquery JS-->
<script src="js/AdminJs/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="js/AdminJs/popper.min.js"></script>
<script src="js/AdminJs/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="js/AdminJs/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="js/AdminJs/animsition.min.js"></script>
<script src="js/AdminJs/bootstrap-progressbar.min.js">
</script>
<script src="js/AdminJs/jquery.waypoints.min.js"></script>
<script src="js/AdminJs/jquery.counterup.min.js">
</script>
<script src="js/AdminJs/circle-progress.min.js"></script>
<script src="js/AdminJs/perfect-scrollbar.js"></script>
<script src="js/AdminJs/Chart.bundle.min.js"></script>
<script src="js/AdminJs/select2.min.js">
</script>

<script src="js/AdminJs/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
