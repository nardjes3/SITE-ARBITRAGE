<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profil</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    
    <link rel="stylesheet" href="css/AdminCss/profil.css">
        <link rel="stylesheet" href="css/AdminCss/header.css">
        <link href="css/AdminCss/menu.css" rel="stylesheet" media="all">

    

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
    

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    

</head>
<body style="background-image:url(images/imagesAdmin/3.jpg); background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%; ">
  @include('Admin/menu')
            

<div class="content-body">
  @foreach ($sec_commissions as $sec_commission)
    <div class='password'>
        <section>
            

            <span class="overlay"></span>
            <div class="modal-box">
                <label for="show" class="close-btn" title="close" ">×</label>
                <div class="form-box">
                    <div class="form-value">
                      
                        <form action="/profilAdmin" method="POST">
                          @csrf
                          
                          <input type="hidden" name="id" value="{{$sec_commission['id']}}" >
                       
                            <h2>update your info</h2>
                            
                            <div class="inputbox">
                              <ion-icon name="lock-closed-outline"></ion-icon>
                              <input name="name" type="text" value="{{$sec_commission->name}}" >
                              <label for="">First Name</label>
                          </div>
                            <div class="inputbox">
                              <ion-icon name="lock-closed-outline"></ion-icon>
                              <input name="lastName" value="{{$sec_commission->lastName}}">
                              <label for="">Last Name</label>
                          </div>
                            <div class="inputbox">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input name="email"  type="text" value="{{$sec_commission->email}}" required>
                                <label for="">Email</label>
                            </div>
                            <div class="inputbox">
                              <ion-icon name="lock-closed-outline"></ion-icon>
                              <input name="num_tel"  type="text" value="{{$sec_commission->num_tel}}" required>
                              <label for="">Phone</label>
                          </div>
                          
                          <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input name="Birthday"  type="text" value="{{$sec_commission->Birthday}}" required>
                            <label for="">Birthday</label>
                        </div>
                        <div class="inputbox">
                          <ion-icon name="lock-closed-outline"></ion-icon>
                          <input name="Gender"  type="text" value="{{$sec_commission->Gender}}" required>
                          <label for="">Gender</label>
                      </div>
                      <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name="Country"  type="text" value="{{$sec_commission->Country}}" required>
                        <label for="">Country</label>
                    </div>
                    <div class="inputbox">
                      <ion-icon name="lock-closed-outline"></ion-icon>
                      <input name="typeSport"  type="text" value="{{$sec_commission->typeSport}}" required>
                      <label for="">Sport Type</label>
                  </div>
                  <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input name="role"  type="text" value="{{$sec_commission->role}}" required>
                    <label for="">Role</label>
                </div>
                <div class="inputbox">
                  <ion-icon name="lock-closed-outline"></ion-icon>
                  <input name="level"  type="text" value="{{$sec_commission->level}}" required>
                  <label for="">Level</label>
              </div>
              
                            <p id="message"> </p>
                            <br>
                            <input type="submit" value="Submit">
                            
                        </form>
                       
                    </div>
                </div>
            </div>
      
            
          </section>
          </div>
         
            
          
    <div class="card" style="margin-top: 200px ">
        <button class="anim show-modal" value="{{$sec_commission['id']}}">  update password </button>
                <button class="anim disconnect">disconnect</button>
       
        <div class="lines"></div>
        
          
        
        <div class="imgBox">
           <img src="images/imagesAdmin/sec.jpg" alt="">
        </div>
        
        
        <div class="content">
          <div class="details">
               <h2>JOHN ALEX</h2>
          <span></span>
            <div class='data'>
                <h3>
                    First Name
                    
                   <span>{{$sec_commission['name']}}</span>
                </h3>
                <h3>
                    Last Name
                    
               <span>{{$sec_commission['lastName']}}</span>
            </h3>
                <h3>
                    email
                    
               <span>{{$sec_commission['email']}}</span>
            </h3>
                
                 <h3>
                    phone
                    
                   <span>{{$sec_commission['num_tel']}}</span> </h3>  
           
            <h3>
                Birthday
                
           <span>{{$sec_commission['Birthday']}}</span>
        </h3>

            
            </div>

            
            
            <div class='cta'>
                
                <h3>
                    Gender
                    
                   <span>{{$sec_commission['Gender']}}</span>
                </h3>
               
                 <h3>
                    FIFA Country
                    
                   <span>{{$sec_commission['Country']}}</span> </h3>
                      <h3>
                        Sport type
                        
                   <span>{{$sec_commission['typeSport']}}</span>
                </h3>
                
                <h3>
                    Main Role
                    
               <span>{{$sec_commission['role']}}</span>
            </h3>
           
            <h3>
                Level
                
           <span>{{$sec_commission['level']}}</span>
        </h3>
          
        </div>
        <div class='cta'>
            
        </div>


          </div>
       
        </div>
       
      </div>
      @endforeach
     
</div>


 
<script src="js/AdminJs/profil.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
