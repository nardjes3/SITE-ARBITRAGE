<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    
    <link rel="stylesheet" href="css/AdminCss/sdBar.css">
    <link rel="stylesheet" href="css/AdminCss/profil.css">
        <link rel="stylesheet" href="css/AdminCss/header.css">
    



    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    

</head>
<body style="background-image:url(images/imagesAdmin/3.jpg); background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%; ">
    
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
              <a href="/design">
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
        <div class="navbar">
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
                        <p class="link">Show All</p>
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
<div class="content-body">
            
    <div class='password'>
        <section>
            

            <span class="overlay"></span>
      
            <div class="modal-box">
                <label for="show" class="close-btn" title="close" ">×</label>
                <div class="form-box">
                    <div class="form-value">
                      @foreach ($secs as $sec)
                        <form action="{{url('update')}}" method="POST" enctype="multipart/form-data">
                          <input type="hidden" name="_methode" value="PUT">
                          {{csrf_field()}}
                            
                            <h2>update your info</h2>
                            
                            <div class="inputbox">
                              <ion-icon name="lock-closed-outline"></ion-icon>
                              <input name="name" id="mail" type="text" value="{{$sec->name}}" required>
                              <label for="">First Name</label>
                          </div>
                            <div class="inputbox">
                              <ion-icon name="lock-closed-outline"></ion-icon>
                              <input name="lastName" id="confirm_password" type="text" value="{{$sec->lastName}}" required>
                              <label for="">Last Name</label>
                          </div>
                            <div class="inputbox">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input name="email" id="confirm_password" type="password" value="{{$sec->email}}" required>
                                <label for="">Email</label>
                            </div>
                            <div class="inputbox">
                              <ion-icon name="lock-closed-outline"></ion-icon>
                              <input name="num_tel" id="confirm_password" type="password" value="{{$sec->num_tel}}" required>
                              <label for="">Phone</label>
                          </div>
                          
                          <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input name="Birthday" id="confirm_password" type="password" value="{{$sec->Birthday}}" required>
                            <label for="">Birthday</label>
                        </div>
                        <div class="inputbox">
                          <ion-icon name="lock-closed-outline"></ion-icon>
                          <input name="Gender" id="confirm_password" type="password" value="{{$sec->Gender}}" required>
                          <label for="">Gender</label>
                      </div>
                      <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name="Country" id="confirm_password" type="password" value="{{$sec->Country}}" required>
                        <label for="">Country</label>
                    </div>
                    <div class="inputbox">
                      <ion-icon name="lock-closed-outline"></ion-icon>
                      <input name="typeSport" id="confirm_password" type="password" value="{{$sec->typeSport}}" required>
                      <label for="">Sport Type</label>
                  </div>
                  <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input name="role" id="confirm_password" type="password" value="{{$sec->role}}" required>
                    <label for="">Role</label>
                </div>
                <div class="inputbox">
                  <ion-icon name="lock-closed-outline"></ion-icon>
                  <input name="level" id="confirm_password" type="password" value="{{$sec->level}}" required>
                  <label for="">Level</label>
              </div>
              <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input name="newpass" id="confirm_password" type="password" value="{{$sec->newpass}}" required>
                <label for="">New Password</label>
            </div>
            <div class="inputbox">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input name="confirmpass" id="confirm_password" type="password" value="{{$sec->confirmpass}}" required>
              <label for="">Confirm Password</label>
          </div>
                            <p id="message"> </p>
                            <br>
                            <input type="submit" value="Submit">
                            
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
          </section>
          </div>
          @foreach ($secs as $sec)
    <div class="card">
        <button class="anim show-modal" value={{$sec->id}}>  update password </button>
                <button class="anim disconnect">disconnect</button>
       
        <div class="lines"></div>
        
          
        
        <div class="imgBox">
           <img src="images/imagesAdmin/sec.jpg" alt="">
        </div>
        
        
        <div class="content">
          <div class="details">
               <h2>JOHN ALEX</h2>
          <span>email: {{$sec->email}}</span>
            <div class='data'>
                <h3>
                    First Name
                    
                   <span>{{$sec->name}}</span>
                </h3>
                <h3>
                    Last Name
                    
               <span>NARDJES</span>
            </h3>
                <h3>
                    email
                    
               <span>nardjes@gmail.com</span>
            </h3>
                
                 <h3>
                    phone
                    
                   <span>0674191973</span> </h3>  
           
            <h3>
                Birthday
                
           <span>01/03/2003</span>
        </h3>

            
            </div>

            
            
            <div class='cta'>
                
                <h3>
                    Gender
                    
                   <span>Male</span>
                </h3>
               
                 <h3>
                    FIFA Country
                    
                   <span>Algeria (ALG)</span> </h3>
                      <h3>
                        Sport type
                        
                   <span>Football</span>
                </h3>
                
                <h3>
                    Main Role
                    
               <span>secretaire de commission</span>
            </h3>
           
            <h3>
                Level
                
           <span>FIFA</span>
        </h3>
          
        </div>
        <div class='cta'>
            
        </div>


          </div>
       
        </div>
      </div>
</div>
@endforeach
<script src="js/AdminJs/profil.js"></script>
    <script src="js/AdminJs/sidebar.js"></script>
    <script src="js/AdminJs/sdBar.js"></script>

 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
