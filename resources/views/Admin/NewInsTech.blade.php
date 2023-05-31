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
        <link rel="stylesheet" href="css/AdminCss/slide.css">
        <link rel="stylesheet" href="css/AdminCss/popUp.css">
        <link rel="stylesheet" href="css/AdminCss/up.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <link href="css/AdminCss/header.css" rel="stylesheet" media="all">
    <link href="css/AdminCss/menu.css" rel="stylesheet" media="all">

</head>
<body style="background-image:url(images/imagesAdmin/1.jpg); background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%; ">
    

  <div class="main-content" style="margin-top: 100px">
    @include('Admin/menu')
        <div class="cards-wrapper">

          <div class="add">
            <span class="overlay"></span>
            
          <div class="modal-box">
            <div class="container">
              <form class="fr" action="list" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="close-btn">&times;</div>

              <div class="upload" style="margin-top: 50px">

                <img class="img" src="images/imagesAdmin/referee.png" width = 100 height = 100 alt="">
    
                <div class="round">
                  <input name="image" type="file" >
                          </div>
              </div>
              
            <div class="ligne">
                <label>First Name</label>
                          <input name="nom" type="text" placeholder="Enter the First Name">
            </div>
              <div class="ligne">
                <label>Last Name</label>
                <input name="prenom" type="text" placeholder="Enter the Last Name">
            </div>
            <div class="ligne">
                <label>Email</label>
                          <input name="login" type="text" placeholder="Enter the email">
              </div>
            <div class="ligne">
                <label>Assigned role</label>
                <input name="role" type="text" placeholder="Enter the role" >
            </div>
            <div class="ligne">
                <label>country</label>
                <input name="pays" type="text" placeholder="Enter the Country">
            </div>
            <div class="ligne">
                <label>Sport type</label>
                    <input name="typeSport" type="text" placeholder="Enter the Type of the sport" >
              </div>
              <div class="ligne">
                <label>role2</label>
                  <input name="role2" type="text" placeholder="Enter the role2" >
              </div>
            <div class="ligne">
                <label>statut</label>
                <input name="etat" type="text" placeholder="Enter the Statut" >
            </div>
            <div class="ligne">
              <div class="input-field">
                <label>Gender</label>
                <select name="genre" required>
                    <option disabled selected>Select gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div></div>
            <div class="ligne">
                <label>niv</label>
              <input name="niv" type="text" placeholder="Enter niveau" >
            </div>
            <div class="ligne">
                <label for="password">Password</label>
                <input id="password" name="mtps" type="text" placeholder="Enter password" class="pass">
              </div>
              
              <div class="ligne">
                <label for="password">Confirm Password</label>
                <input id="confirm_password" name="mtps" type="text" placeholder="confirm your password" class="pass">
              </div>
              
                              
              <p id="message"> </p>
           
                {{-- <input type="submit" id="button" value="SUBMIT" onclick="checkPassword();">  --}}
         
            
                    <button style="background-color: transparent; margin-left:380px" onclick="popUpSuccee()" type="submit" class="nextBtn">
                        <span class="btnText"></span>
                        <i class="uil uil-navigator"></i>
                    </button>
            
  
             
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
                      
                        <div class="pro_pic" style="background-image: url('images/imagesAdmin/ar05.jpg');"></div>
                        <div class="pro_title"> 
                            
                          <h1 class="card-fullname">John Deo </h1>
                          <div class="card-full" class="card-main">
                            <div class="card-section is-active" id="about">
                                <div class="card-content">
                                    <div class="card-subtitle">PERSONAL INFORMATIONS</div>
                                       
                          <h6 > First Name : <Font class="fname"  size="2pt" color="black">John</Font></h6>
                          <h6> Last Name : <Font class="lname" size="2pt" color="black">Deo</Font></h6>
                          <h6> Email : <Font class="mail" size="2pt" color="black">John@gmail.com</Font></h6>
                          <h6> Gender : <Font class="gen" size="2pt" color="black">male</Font></h6>
                          <h6> level : <Font class="role" size="2pt" color="black">1</Font></h6>
                          <h6> Country : <Font class="role" size="2pt" color="black">Algeria</Font></h6>
                          <h6> Num tel : <Font class="pays" size="2pt" color="black">0674191973</Font></h6>
                          <h6> statut : <Font class="etat" size="2pt" color="black">well</Font></h6>
                          <h6> Role : <Font class="role2" size="2pt" color="black">Var</Font></h6>
                          
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
                                    

                                        
                            
                                        <div class="row" >
                                            <img style="width: 50px;margin-right:10px" src="images/imagesAdmin/accept.png">
                                            <div >
                                                
                                                   
                                                    <p class="time">Belgica / USA</p>
                                                  
                                            </div>
                                        </div>
                            
                                        <div class="row" >
                                            <img style="width: 50px; margin-right:10px" src="images/imagesAdmin/accept.png">
                                            <div class="tag">
                                               
                                                  <p class="time">Piru / Dinamarc</p>
                                                  
                                            </div>
                                        </div>
                            
                                        <div class="row" >
                                            <img style="width: 50px; margin-right:10px" src="images/imagesAdmin/accept.png">
                                            <div class="tag">
                                               
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
                                
                                @foreach ($instricteur_techs as $instricteur_tech)
                                  <div class="list" >
                            
                            <div class="imgbox" style="background-image: url('images/imagesAdmin/{{$instricteur_tech['image']}}');" data-title=" {{$instricteur_tech['nom']}} {{$instricteur_tech['prenom']}}" nom="{{$instricteur_tech['nom']}}" prenom="{{$instricteur_tech['prenom']}}" email="{{$instricteur_tech['email']}}" genre="{{$instricteur_tech['gender']}}" role="{{$instricteur_tech['level']}}" pays="{{$instricteur_tech['country']}}"  etat="{{$instricteur_tech['etat']}}"  niv="{{$instricteur_tech['grade']}}" id="{{$instricteur_tech['id']}}">
                            </div>
                            <h4 class="content">
                                {{$instricteur_tech['nom']}} {{$instricteur_tech['prenom']}}
                            </h4>
                            <a href=""><img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt=""></a>
                            {{-- <a href="{{"list/".$Arbitre['id']}}"  class="edit-modal editBtn"><img src="images/imagesAdmin/edit.png" width="30px" height="30px" alt=""></a>  --}}

                            <a   class="pop" value=""><img src="images/imagesAdmin/bin.png"  width="30px" height="30px" alt=""></a>
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
