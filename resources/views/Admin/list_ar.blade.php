<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Referees</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/AdminCss/sdBar.css">
        <link rel="stylesheet" href="css/AdminCss/header.css">
        <link rel="stylesheet" href="css/AdminCss/slide.css">
        <link rel="stylesheet" href="css/AdminCss/popUp.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        

        

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    

</head>
<body style="background-image:url(images/imagesAdmin/1.jpg); background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%; ">
    
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

        <div class="cards-wrapper">
          <div class="update">
            <span class="overlay"></span>
            
          <div class="modal-box">
            <div class="container">
              <header>update arbiter</header>
            <form action="list" method="POST">
              @csrf
              <div class="form first">

                  <div class="details personal">
                      <span class="title">Personal Details</span>
  
                      <div class="fields">
                        
                        <div class="input-field">
                            <label>First Name</label>
                            <input name="nom" type="text" placeholder="Enter first name" >
                        </div>
                        <div class="input-field">
                          <label>Last Name</label>
                          <input name="prenom" type="text" placeholder="Enter last name" >
                      </div>


                        <div class="input-field">
                            <label>Email</label>
                            <input name="login" type="text" placeholder="Enter email" >
                        </div>
                        
                        <div class="input-field">
                          <label>role</label>
                          <input name="role" type="text" placeholder="Enter birth date" >
                      </div>
                      <div class="input-field">
                        <label>country</label>
                        <input name="pays" type="text" placeholder="Enter birth date" >
                    </div>
                    <div class="input-field">
                      <label>Sport type</label>
                      <input name="typeSport" type="text" placeholder="Enter birth date" >
                  </div>
                  <div class="input-field">
                    <label>role2</label>
                    <input name="role2" type="text" placeholder="Enter birth date" >
                </div>
                <div class="input-field">
                  <label>statut</label>
                  <input name="etat" type="text" placeholder="Enter birth date" >
              </div>
              <div class="input-field">
                <label>niv</label>
                <input name="niv" type="text" placeholder="Enter birth date" >
            </div>
            <div class="input-field">
              <label>mtps</label>
              <input name="mtps" type="text" placeholder="Enter birth date" >
          </div>
          <div class="input-field">
            <label>paye</label>
            <input name="paye" type="text" placeholder="Enter birth date" >
        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="genre" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                    </div>
                </div>
               
                <div class="details ID">
                    
                  <div class="upload">
                    <img src="images/imagesAdmin/noprofil.jpg" width = 100 height = 100 alt="">
                    <div class="round">
                      <input name="image" type="file">
                      <i class = "fa fa-camera" style = "color: #fff;"></i>
                    </div>
                  </div>
                    <button type="submit" class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
              </div>
  
              {{-- <div class="form second">
                  <div class="details address">
                      <span class="title">Work Details</span>
  
                      <div class="fields">
                        <div class="input-field">
                            <label>Assigned Role</label>
                            <input type="text" placeholder="Permanent or Temporary" required>
                        </div>

                        <div class="input-field">
                            <label>Fifa Country</label>
                            <input type="text" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>Sport Type</label>
                            <input type="text" placeholder="Enter your state" required>
                        </div>

                        <div class="input-field">
                            <label>Other Role</label>
                            <input type="text" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                          <label>Fifa ID</label>
                          <input type="number" placeholder="Enter ID number" required>
                      </div>

                      <div class="input-field">
                        <label>Level</label>
                        <select required>
                            <option disabled selected>Select gender</option>
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advenced</option>
                        </select>
                      </div>
                      </div>
                          
                  </div>
  
                  <div class="details family">
                      
  
                      <div class="buttons">
                          <div class="backBtn">
                              <i class="uil uil-navigator"></i>
                              <span class="btnText">Back</span>
                          </div>
                          
                          <button type="submit" class="sumbit">
                              <span class="btnText">Submit</span>
                              <i class="uil uil-navigator"></i>
                          </button>
                      </div>
                  </div> 
              </div> --}}
          </form>
        </div>
          </div>
                {{-- <div class="modal-box">
                  <div class="container">
                    <header>Add new arbiter</header>
                  <form action="add" method="POST">
                    @csrf
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Personal Details</span>
        
                            <div class="fields">
                              <div class="input-field">
                                  <label>First Name</label>
                                  <input name="nom" type="text" placeholder="Enter first name" >
                              </div>
                              <div class="input-field">
                                <label>Last Name</label>
                                <input name="prenom" type="text" placeholder="Enter last name" >
                            </div>
      
      
                              <div class="input-field">
                                  <label>Email</label>
                                  <input name="login" type="text" placeholder="Enter email" >
                              </div>
                              
                              <div class="input-field">
                                <label>role</label>
                                <input name="role" type="text" placeholder="Enter birth date" >
                            </div>
                            <div class="input-field">
                              <label>country</label>
                              <input name="pays" type="text" placeholder="Enter birth date" >
                          </div>
                          <div class="input-field">
                            <label>Sport type</label>
                            <input name="typeSport" type="text" placeholder="Enter birth date" >
                        </div>
                        <div class="input-field">
                          <label>role2</label>
                          <input name="role2" type="text" placeholder="Enter birth date" >
                      </div>
                      <div class="input-field">
                        <label>statut</label>
                        <input name="etat" type="text" placeholder="Enter birth date" >
                    </div>
                    <div class="input-field">
                      <label>niv</label>
                      <input name="niv" type="text" placeholder="Enter birth date" >
                  </div>
                  <div class="input-field">
                    <label>mtps</label>
                    <input name="mtps" type="text" placeholder="Enter birth date" >
                </div>
                <div class="input-field">
                  <label>paye</label>
                  <input name="paye" type="text" placeholder="Enter birth date" >
              </div>
      
                              <div class="input-field">
                                  <label>Gender</label>
                                  <select name="genre" required>
                                      <option disabled selected>Select gender</option>
                                      <option>Male</option>
                                      <option>Female</option>
                                  </select>
                              </div>
      
                          </div>
                      </div>
                     
                      <div class="details ID">
                          
      
                          <button type="submit" class="nextBtn">
                              <span class="btnText">Next</span>
                              <i class="uil uil-navigator"></i>
                          </button>
                      </div>
                    </div>
        
                    {{-- <div class="form second">
                        <div class="details address">
                            <span class="title">Work Details</span>
        
                            <div class="fields">
                              <div class="input-field">
                                  <label>Assigned Role</label>
                                  <input type="text" placeholder="Permanent or Temporary" required>
                              </div>
      
                              <div class="input-field">
                                  <label>Fifa Country</label>
                                  <input type="text" placeholder="Enter nationality" required>
                              </div>
      
                              <div class="input-field">
                                  <label>Sport Type</label>
                                  <input type="text" placeholder="Enter your state" required>
                              </div>
      
                              <div class="input-field">
                                  <label>Other Role</label>
                                  <input type="text" placeholder="Enter your district" required>
                              </div>
      
                              <div class="input-field">
                                <label>Fifa ID</label>
                                <input type="number" placeholder="Enter ID number" required>
                            </div>
      
                            <div class="input-field">
                              <label>Level</label>
                              <select required>
                                  <option disabled selected>Select gender</option>
                                  <option>Beginner</option>
                                  <option>Intermediate</option>
                                  <option>Advenced</option>
                              </select>
                            </div>
                            </div>
                                
                        </div>
        
                        <div class="details family">
                            
        
                            <div class="buttons">
                                <div class="backBtn">
                                    <i class="uil uil-navigator"></i>
                                    <span class="btnText">Back</span>
                                </div>
                                
                                <button type="submit" class="sumbit">
                                    <span class="btnText">Submit</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>
                        </div> 
                    </div> --}}
                {{-- </form>
              </div>
                </div>  --}}
              </div>
          <div class="add">
            <span class="overlay"></span>
            
          <div class="modal-box">
            <div class="container">
              <header>Add new arbiter</header>
            <form action="list" method="POST">
              @csrf
             
              <div class="form first">
                  <div class="details personal">
                      <span class="title">Personal Details</span>
                      <div class="upload">
                        <img src="" width = 100 height = 100 alt="">
                        <div class="round">
                          <input name="image" type="file">
                          <i class = "fa fa-camera" style = "color: #fff;"></i>
                        </div>
                      </div>
                      <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input name="nom" type="text" placeholder="Enter first name" >
                        </div>
                        <div class="input-field">
                          <label>Last Name</label>
                          <input name="prenom" type="text" placeholder="Enter last name" >
                      </div>


                        <div class="input-field">
                            <label>Email</label>
                            <input name="login" type="text" placeholder="Enter email" >
                        </div>
                        
                        <div class="input-field">
                          <label>role</label>
                          <input name="role" type="text" placeholder="Enter birth date" >
                      </div>
                      <div class="input-field">
                        <label>country</label>
                        <input name="pays" type="text" placeholder="Enter birth date" >
                    </div>
                    <div class="input-field">
                      <label>Sport type</label>
                      <input name="typeSport" type="text" placeholder="Enter birth date" >
                  </div>
                  <div class="input-field">
                    <label>role2</label>
                    <input name="role2" type="text" placeholder="Enter birth date" >
                </div>
                <div class="input-field">
                  <label>statut</label>
                  <input name="etat" type="text" placeholder="Enter birth date" >
              </div>
              <div class="input-field">
                <label>niv</label>
                <input name="niv" type="text" placeholder="Enter birth date" >
            </div>
            <div class="input-field">
              <label>mtps</label>
              <input name="mtps" type="text" placeholder="Enter birth date" >
          </div>
          

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="genre" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                    </div>
                </div>
               
                <div class="details ID">
                    

                    <button onclick="popUpSuccee()" type="submit" class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
              </div>
  
              {{-- <div class="form second">
                  <div class="details address">
                      <span class="title">Work Details</span>
  
                      <div class="fields">
                        <div class="input-field">
                            <label>Assigned Role</label>
                            <input type="text" placeholder="Permanent or Temporary" required>
                        </div>

                        <div class="input-field">
                            <label>Fifa Country</label>
                            <input type="text" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>Sport Type</label>
                            <input type="text" placeholder="Enter your state" required>
                        </div>

                        <div class="input-field">
                            <label>Other Role</label>
                            <input type="text" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                          <label>Fifa ID</label>
                          <input type="number" placeholder="Enter ID number" required>
                      </div>

                      <div class="input-field">
                        <label>Level</label>
                        <select required>
                            <option disabled selected>Select gender</option>
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advenced</option>
                        </select>
                      </div>
                      </div>
                          
                  </div>
  
                  <div class="details family">
                      
  
                      <div class="buttons">
                          <div class="backBtn">
                              <i class="uil uil-navigator"></i>
                              <span class="btnText">Back</span>
                          </div>
                          
                          <button type="submit" class="sumbit">
                              <span class="btnText">Submit</span>
                              <i class="uil uil-navigator"></i>
                          </button>
                      </div>
                  </div> 
              </div> --}}
          </form>
        </div>
          </div>
                {{-- <div class="modal-box">
                  <div class="container">
                    <header>Add new arbiter</header>
                  <form action="add" method="POST">
                    @csrf
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Personal Details</span>
        
                            <div class="fields">
                              <div class="input-field">
                                  <label>First Name</label>
                                  <input name="nom" type="text" placeholder="Enter first name" >
                              </div>
                              <div class="input-field">
                                <label>Last Name</label>
                                <input name="prenom" type="text" placeholder="Enter last name" >
                            </div>
      
      
                              <div class="input-field">
                                  <label>Email</label>
                                  <input name="login" type="text" placeholder="Enter email" >
                              </div>
                              
                              <div class="input-field">
                                <label>role</label>
                                <input name="role" type="text" placeholder="Enter birth date" >
                            </div>
                            <div class="input-field">
                              <label>country</label>
                              <input name="pays" type="text" placeholder="Enter birth date" >
                          </div>
                          <div class="input-field">
                            <label>Sport type</label>
                            <input name="typeSport" type="text" placeholder="Enter birth date" >
                        </div>
                        <div class="input-field">
                          <label>role2</label>
                          <input name="role2" type="text" placeholder="Enter birth date" >
                      </div>
                      <div class="input-field">
                        <label>statut</label>
                        <input name="etat" type="text" placeholder="Enter birth date" >
                    </div>
                    <div class="input-field">
                      <label>niv</label>
                      <input name="niv" type="text" placeholder="Enter birth date" >
                  </div>
                  <div class="input-field">
                    <label>mtps</label>
                    <input name="mtps" type="text" placeholder="Enter birth date" >
                </div>
                <div class="input-field">
                  <label>paye</label>
                  <input name="paye" type="text" placeholder="Enter birth date" >
              </div>
      
                              <div class="input-field">
                                  <label>Gender</label>
                                  <select name="genre" required>
                                      <option disabled selected>Select gender</option>
                                      <option>Male</option>
                                      <option>Female</option>
                                  </select>
                              </div>
      
                          </div>
                      </div>
                     
                      <div class="details ID">
                          
      
                          <button type="submit" class="nextBtn">
                              <span class="btnText">Next</span>
                              <i class="uil uil-navigator"></i>
                          </button>
                      </div>
                    </div>
        
                    {{-- <div class="form second">
                        <div class="details address">
                            <span class="title">Work Details</span>
        
                            <div class="fields">
                              <div class="input-field">
                                  <label>Assigned Role</label>
                                  <input type="text" placeholder="Permanent or Temporary" required>
                              </div>
      
                              <div class="input-field">
                                  <label>Fifa Country</label>
                                  <input type="text" placeholder="Enter nationality" required>
                              </div>
      
                              <div class="input-field">
                                  <label>Sport Type</label>
                                  <input type="text" placeholder="Enter your state" required>
                              </div>
      
                              <div class="input-field">
                                  <label>Other Role</label>
                                  <input type="text" placeholder="Enter your district" required>
                              </div>
      
                              <div class="input-field">
                                <label>Fifa ID</label>
                                <input type="number" placeholder="Enter ID number" required>
                            </div>
      
                            <div class="input-field">
                              <label>Level</label>
                              <select required>
                                  <option disabled selected>Select gender</option>
                                  <option>Beginner</option>
                                  <option>Intermediate</option>
                                  <option>Advenced</option>
                              </select>
                            </div>
                            </div>
                                
                        </div>
        
                        <div class="details family">
                            
        
                            <div class="buttons">
                                <div class="backBtn">
                                    <i class="uil uil-navigator"></i>
                                    <span class="btnText">Back</span>
                                </div>
                                
                                <button type="submit" class="sumbit">
                                    <span class="btnText">Submit</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>
                        </div> 
                    </div> --}}
                {{-- </form>
              </div>
                </div>  --}}
              </div>

            <section>
              
                <article class="card" data-state="#about">
                  
                  <div class="card_inner" data-state="#about">
                    
                    <div class="card-header">
                      
                        <div class="pro_pic" style="background-image: url('images/imagesAdmin/etchiali.jpg');"></div>
                        <div class="pro_title"> 
                            
                          <h1 class="card-fullname">etchiali</h1>
                          <div class="card-full" class="card-main">
                            <div class="card-section is-active" id="about">
                                <div class="card-content">
                                    <div class="card-subtitle">PERSONAL INFORMATIONS</div>
                                       
                          <h6 > First Name : <Font class="fname"  size="2pt" color="black">etchiali</Font></h6>
                          <h6> Last Name : <Font class="lname" size="2pt" color="black">abdelhak</Font></h6>
                          <h6> Email : <Font class="mail" size="2pt" color="black">e@gmail.com</Font></h6>
                          <h6> Gender : <Font class="gen" size="2pt" color="black">male</Font></h6>
                          <h6> Assigned Role : <Font class="role" size="2pt" color="black">Viewer</Font></h6>
                          <h6> Fifa Country : <Font class="pays" size="2pt" color="black">Algeria</Font></h6>
                          <h6> Sport Type : <Font class="tsport" size="2pt" color="black">Football</Font></h6>
                          <h6> statut : <Font class="etat" size="2pt" color="black">well</Font></h6>
                          <h6> Other Role : <Font class="role2" size="2pt" color="black">Var</Font></h6>
                          <h6> Fifa id : <Font class="id" size="2pt" color="black">302457</Font></h6>
                          <h6> level : <Font class="niv" size="2pt" color="black">ad</Font></h6>
                          
                        </div>
                               
                            </div>
                            <div class="card-section matar" id="experience">
                                <div class="card-content">
                                    <div class="card-subtitle">MATCH REFEREES</div>
                                    <div class="card-timeline">
                                        <div class="card-item" data-year="2014">
                                            <div class="card-item-title">Belgica <b style="color: black;">2 - 1</b> USA</div>
                                            <div class="card-item-desc">Coupe du monde.1/8 <br> 01 juil.2014</div>
                                        </div>
                                     <div class="card-item" data-year="2018">
                                         <div class="card-item-title">Peru <b style="color: black;">0 - 1</b>  Dinamarca</div>
                                         <div class="card-item-desc">Coupe du monde.GroupeC.J1 <br> 16 juil.2018</div>
                                        </div>
                                     <div class="card-item" data-year="2020">
                                        <div class="card-item-title">Guinea <b style="color: black;">2 - 2</b> Sudan</div>
                                        <div class="card-item-desc">Qualif. Coupe du monde Afrique.Segunda Ronda.J4 <br> 09 oct.2014</div>
                                     </div>
                                     <div class="card-item" data-year="2020">
                                        <div class="card-item-title">Costa de Marfil <b style="color: black;">2 - 1</b> Camerun</div>
                                        <div class="card-item-desc">Qualif. Coupe du monde Afrique.Segunda Ronda.J2 <br> 06 sept.2014</div>
                                     </div>
                                     <div class="card-item" data-year="2020">
                                        <div class="card-item-title">Zamalek <b style="color: black;">1 - 2</b> Al-Ahly</div>
                                        <div class="card-item-desc">Ligue de champions de la CAF.fin <br> 27 nov.2014</div>
                                     </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-section" id="contact">
                                <div class="card-content">
                                    <div class="card-subtitle">REPPORTS</div>
                                    

                                        
                            
                                        <div class="row">
                                            <img src="images/imagesAdmin/accept.png">
                                            <div class="tag">
                                                
                                                    <p class="user_activity">
                                                      <strong>Repport completed</strong>
                                                    </p>
                                                    <p class="time">Belgica / USA</p>
                                                  
                                            </div>
                                        </div>
                            
                                        <div class="row">
                                            <img src="images/imagesAdmin/accept.png">
                                            <div class="tag">
                                                
                                                <p class="user_activity">
                                                    <strong>Repport completed</strong>
                                                  </p>
                                                  <p class="time">Piru / Dinamarc</p>
                                                  
                                            </div>
                                        </div>
                            
                                        <div class="row">
                                            <img src="images/imagesAdmin/accept.png">
                                            <div class="tag">
                                                
                                                <p class="user_activity">
                                                    <strong>Repport completed</strong>
                                                  </p>
                                                  <p class="time">Guinea / Suda</p>
                                                  
                                            </div>
                                        </div>
                            
                            
                               

                                </div>
                            </div>
                            
                        </div>
                       
                        </div> 
                        
                    </div>
                    
                </div>
                
                <div class="card-buttons" style="margin-top:392px; background:rgb(230, 228, 228);   border-bottom-left-radius: 20px; position: fixed; width:100% ">
                    <button class="is-active" data-section="#about" style="margin-left:92px; ">PERSONAL INFO</button>
                    <button  data-section="#experience">MATCH REF</button>
                    <button   data-section="#contact">REPORTS</button>
                </div>
                </article>
              
              </section>
            
             
              
                <section>
                  
                    <div class="box">
                      
                          <div class="btn" style="display: flex">
                            <a href="#addEmployeeModal" class="btn-success" data-toggle="modal">
                               <button class="show-modal" style="display: flex"><img src="images/imagesAdmin/add.png" style="width: 25px; margin-left:7px" alt=""><h4 style="margin-left: 3px; margin-top:8px">  Add new arbiter</h4></button></a>
                                <a href="#deleteEmployeeModal" class="btn-danger" data-toggle="modal">
                                  <button style="display: flex"><img src="images/imagesAdmin/rem.png" style="width: 25px; margin-left:7px" alt=""><h4 style="margin-left: 3px; margin-top:8px">  delete</h4></button></a>
                                </div>
                                
                                @foreach ($Arbitres as $Arbitre)
                                  <div class="list" >
                            
                            <div class="imgbox" style="background-image: url('images/imagesAdmin/{{$Arbitre['image']}}');" data-title=" {{$Arbitre['nom']}} {{$Arbitre['prenom']}}" nom="{{$Arbitre['nom']}}" prenom="{{$Arbitre['prenom']}}" email="{{$Arbitre['login']}}" genre="{{$Arbitre['genre']}}" role="{{$Arbitre['role']}}" pays="{{$Arbitre['pays']}}" tsport="{{$Arbitre['typeSport']}}" etat="{{$Arbitre['etat']}}" role2="{{$Arbitre['role2']}}" niv="{{$Arbitre['niv']}}" id="{{$Arbitre['id']}}">
                            </div>
                            <h4 class="content">
                                {{$Arbitre['nom']}} {{$Arbitre['prenom']}}
                            </h4>
                            <a href="{{"edit/".$Arbitre['id']}}"><img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt=""></button> </a>
                            {{-- <a href="{{"list/".$Arbitre['id']}}"  class="edit-modal editBtn"><img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt=""></a>  --}}

                            <a onclick="popUp({{$Arbitre['id']}})"  class="pop" value="{{$Arbitre['id']}}"><img src="images/imagesAdmin/bin.png"  width="30px" height="30px" alt=""></a>
                        </div>
                        @endforeach
                        
                         {{-- <div class="list" >
                            <div class="imgbox" style="background-image: url('images/imagesAdmin/mustapha.jpg');" data-title="GHORBEL Mustapha" data-description="..............">
                            </div>
                            <h4 class="content">
                                GHORBEL Mustapha
                            </h4>
                             <img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt="">
                            <img src="images/imagesAdmin/bin.png"  width="30px" height="30px" alt="">
                        </div>
                        <div class="list" >
                            <div class="imgbox" style="background-image: url('images/imagesAdmin/marciniak.jpg');" data-title="MARCINIAK Szymon" data-description="..............">
                            </div>
                            <h4 class="content">
                                MARCINIAK Szymon
                            </h4>
                            <img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt="">
                            <img src="images/imagesAdmin/bin.png"  width="30px" height="30px" alt="">
                        </div>
                        <div class="list" >
                            <div class="imgbox" style="background-image: url('images/imagesAdmin/jhon.jpg');" data-title="JOHAN Hamel" data-description="..............">
                            </div>
                            <h4 class="content">
                                JOHAN Hamel
                            </h4>
                            <img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt="">
                            <img src="images/imagesAdmin/bin.png"  width="30px" height="30px" alt="">
                        </div>
                        <div class="list" >
                            <div class="imgbox" style="background-image: url('images/imagesAdmin/rafael.jpg');" data-title="CLAUS Raphael" data-description="..............">
                            </div>
                            <h4 class="content">
                                CLAUS Raphael
                            </h4>
                            <img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt="">
                            <img src="images/imagesAdmin/bin.png"  width="30px" height="30px" alt="">
                        </div>
                        <div class="list" >
                            <div class="imgbox" style="background-image: url('images/imagesAdmin/conger.jpg');" data-title="CONGER Matthew" data-description="..............">
                            </div>
                            <h4 class="content">
                                CONGER Matthew
                            </h4>
                            <img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt="">
                            <img src="images/imagesAdmin/bin.png"  width="30px" height="30px" alt="">
                        </div>
                        <div class="list" >
                            <div class="imgbox" style="background-image: url('images/imagesAdmin/fernando.jpg');" data-title="FERNANDO Rapallini" data-description="..............">
                            </div>
                            <h4 class="content">
                                FERNANDO Rapallini
                            </h4>
                            <img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt="">
                            <img src="images/imagesAdmin/bin.png"  width="30px" height="30px" alt="">
                        </div>
                        <div class="list" >
                            <div class="imgbox" style="background-image: url('images/imagesAdmin/gabriel.jpg');" data-title="CHADE Gabriel" data-description="..............">
                            </div>
                            <h4 class="content">
                                CHADE Gabriel
                            </h4>
                            <img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt="">
                            <img src="images/imagesAdmin/bin.png"  width="30px" height="30px" alt="">
                        </div>
                        <div class="list" >
                            <div class="imgbox" style="background-image: url('images/imagesAdmin/ar05.jpg');" data-title="BURT Stuart" data-description="..............">
                            </div>
                            <h4 class="content">
                                BURT Stuart
                            </h4>
                            <img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt="">
                            <img src="images/imagesAdmin/bin.png"  width="30px" height="30px" alt="">
                        </div> --}}
                        
                     </div>
                 </section>
                 
               
        
            </div>
           
        </div>


        <script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/AdminJs/slide.js"></script>
<script src="js/AdminJs/popUp.js"></script>

    <script src="js/AdminJs/sidebar.js"></script>
    <script src="js/AdminJs/sdBar.js"></script>

 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
