<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home-Whistle Experts</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{URL('css/ArbitreCss/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{URL('css/ArbitreCss/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{URL('css/ArbitreCss/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{URL('css/ArbitreCss/style.css')}}" rel="stylesheet">
</head>

<body>
  {{-- <h1>welcomr {{Auth::guard('arbitre')->user()->id}}</h1> --}}

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa-solid fa-registered"></i> <a href="https://red.fifa.com/">  Red.fifa.com</a></small>
                    <small class="me-3 text-light"><i class="fa-solid fa-copyright"></i><a href="https://cms.cafonline.com/">  Cms.cafonline.com</a></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fa-solid fa-bell"></i></a>
                    
                </div>
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fa-solid fa-user"></i></a>Etchiali Abdelhak
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                
                <img src="{{URL('images/imagesArbitre/we.png')}}" width="300px" height="100px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
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
                    <a href="<?php echo "myDesign/" . Auth::guard('arbitre')->user()->id; ?>" class="nav-item nav-link">Designation</a>
                    <a href="<?php echo "Mypayement/" . Auth::guard('arbitre')->user()->id; ?>" class="nav-item nav-link">Payement</a>
                </div>
                
            </div>
        </nav>

        <div  id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div  class="carousel-inner">
                <div style="height: 630px" class="carousel-item active">
                    <img  class="w-100" src="{{URL('images/imagesArbitre/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Referee Education & Development</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Don't Be Like 'Gassama'</h1>
                        </div>
                    </div>
                </div>
                <div style="height: 630px" class="carousel-item">
                    <img class="w-100" src="{{URL('images/imagesArbitre/carousel-4.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Referee Education & Development</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">If There are no goals in your life then you can't win...</h1>
                            
                        </div>
                    </div>
                </div>
                <div style="height: 630px" class="carousel-item">
                    <img class="w-100" src="{{URL('images/imagesArbitre/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Referee Education & Development</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Winners Neven Quit</br>Quitters Never Win</h1>
                            
                        </div>
                    </div>
                </div>
                <div style="height: 630px" class="carousel-item">
                    <img class="w-100" src="{{URL('images/imagesArbitre/carousel-3.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Referee Education & Development</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Be Fair ...</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Full Screen Search End -->


    

    


    

    

   


    

    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Referees</h5>
                <h1 class="mb-0">The Top 10 Best Referees In FootBall</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL('images/imagesArbitre/testimonial-1.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Mark Geiger</h4>
                            <small class="text-uppercase">American</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Mark Geiger is a former American soccer referee who gained recognition for his involvement in the FIFA World Cup. He officiated matches in both the 2014 and 2018 World Cups, representing the United States as a referee on the international stage.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL('images/imagesArbitre/testimonial-2.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Pierluigi Collina</h4>
                            <small class="text-uppercase">Italian</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Pierluigi Collina is an Italian former football referee known for his strict adherence to the rules of the game and his iconic bald head. He officiated numerous high-profile matches, including the 2002 FIFA World Cup Final.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL('images/imagesArbitre/testimonial-3.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Anthony Taylor</h4>
                            <small class="text-uppercase">English</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Anthony Taylor is an English professional football referee. He has officiated in numerous high-profile matches, including FA Cup finals, League Cup finals, and UEFA Champions League matches.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL('images/imagesArbitre/testimonial-4.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Cüneyt Çakır</h4>
                            <small class="text-uppercase">Turkish</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Cüneyt Çakır is a Turkish professional football referee. He is known for his extensive experience and excellent decision-making skills. Çakır has officiated in prestigious tournaments such as the UEFA Champions League and FIFA World Cup.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL('images/imagesArbitre/testimonial-5.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Howard Webb</h4>
                            <small class="text-uppercase">English</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Howard Webb is a former English professional football referee. He officiated in prestigious matches, including FIFA World Cup and UEFA Champions League finals. Known for his calm and authoritative style, Webb gained respect for his fair decision-making.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL('images/imagesArbitre/testimonial-6.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Danny Makkelie</h4>
                            <small class="text-uppercase">Dutch</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Danny Makkelie is a Dutch professional football referee. He has officiated in top-level matches, including UEFA Champions League games and international competitions.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL('images/imagesArbitre/testimonial-7.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Stéphanie Frappart</h4>
                            <small class="text-uppercase">Frensh</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Stéphanie Frappart is a French professional football referee. She made history as the first female referee to officiate in major men's football competitions. Notable achievements include refereeing in Ligue 1 and the UEFA Europa League.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL('images/imagesArbitre/testimonial-8.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Mustapha Ghorbal</h4>
                            <small class="text-uppercase">Algerian</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Mustapha Ghorbal is an Algerian football referee known for his expertise and professionalism. He has officiated in various domestic and international matches, including those in the Algerian Ligue Professionnelle 1 and CAF competitions.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL('images/imagesArbitre/testimonial-9.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Abdelhak Etchiali</h4>
                            <small class="text-uppercase">Algerian</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Abdelhak Etchiali is an Algerian football referee. He has officiated in numerous domestic and international matches, including those in the Algerian Ligue Professionnelle 1 and CAF competitions.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL('images/imagesArbitre/testimonial-10.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Yoshimi Yamashita</h4>
                            <small class="text-uppercase">Japanese</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Yoshimi Yamashita is one of the three women among the 36 field referees selected by FIFA for the 2022 World Cup, which begins today, alongside French referee Stéphanie Frappart and Rwandan referee Salima Mukansanga.
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">All CATEGORIES</h5>
                <h1 class="mb-0">Read The FEATURED CATEGORIES</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{URL('images/imagesArbitre/blog-1.jpg')}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">1</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">VAR</h4>
                            <p>Find here all content related to VAR situations</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{URL('images/imagesArbitre/blog-2.jpg')}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">2</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                
                            </div>
                            <h4 class="mb-3">OFFSIDE</h4>
                            <p>Find here all content related to OFFSIDE situations</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{URL('images/imagesArbitre/blog-3.jpg')}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">3</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                
                            </div>
                            <h4 class="mb-3">HANDBALL</h4>
                            <p>Find here all content related to HANDBALL situations</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{URL('images/imagesArbitre/blog-5.jpg')}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">4</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                
                            </div>
                            <h4 class="mb-3">GAME MANAGMENT</h4>
                            <p>Find here all content related to GAME MANAGEMENT</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{URL('images/imagesArbitre/blog-6.jpg')}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">5</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                
                            </div>
                            <h4 class="mb-3">TACTICAL FOULS</h4>
                            <p>Find here all content related to TACTICAL FOULS</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{URL('images/imagesArbitre/blog-7.jpg')}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">6</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                
                            </div>
                            <h4 class="mb-3">PENALTY AREA</h4>
                            <p>Find here all content related to PENALTY AREA incidents</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{URL('images/imagesArbitre/blog-8.jpg')}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">7</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                
                            </div>
                            <h4 class="mb-3">CHALENGES</h4>
                            <p>Find here all content related to CHALLENGES</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{URL('images/imagesArbitre/blog-9.jpg')}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">8</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                
                            </div>
                            <h4 class="mb-3">POSITIONING & READING</h4>
                            <p> POSITIONING and READING THE GAME</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{URL('images/imagesArbitre/blog-10.jpg')}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">9</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                
                            </div>
                            <h4 class="mb-3">TEACHING MATERIALS 2023</h4>
                            <p>Prepared teaching materials for 2023</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{URL('images/imagesArbitre/vendor-2.png')}}" alt="">
                    <img src="{{URL('images/imagesArbitre/vendor-4.png')}}" alt="">
                    <img src="{{URL('images/imagesArbitre/vendor-3.png')}}" alt="">
                    <img src="{{URL('images/imagesArbitre/vendor-7.png')}}" alt="">
                    <img src="{{URL('images/imagesArbitre/vendor-5.png')}}" alt="">
                    <img src="{{URL('images/imagesArbitre/vendor-1.png')}}" alt="">
                    <img src="{{URL('images/imagesArbitre/vendor-10.jpg')}}" alt="">
                    <img src="{{URL('images/imagesArbitre/Logo_football_rs.webp')}}" alt="">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    <!-- Vendor Start -->
    
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        
						
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{URL('lib/wow/wow.min.js')}}"></script>
    <script src="{{URL('lib/easing/easing.min.js')}}"></script>
    <script src="{{URL('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{URL('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{URL('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{URL('js/ArbitreJs/main.js')}}"></script>
</body>

</html>