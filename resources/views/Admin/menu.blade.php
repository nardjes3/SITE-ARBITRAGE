<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document Admin</title>

    

</head>
<body>
    
    @section('content')
    <nav>
        <ul>
          <li>
            <a href="#" class="logo" style="margin-top:-10px; ">
              <img style="width:65px; height:80px;margin-left:-4px;" src="{{asset('images/imagesAdmin/log1.png')}}">
              <span class="nav-item2"><img style="width:200px;height:50px;margin-left:0px;" src="{{asset('images/imagesAdmin/log.png')}}"></span>
            </a>
          </li>
          <li>
            <a href="/dash">
              <i class="fas fa-house"></i>
              <span class="nav-item2">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="/list">
                <i class="fas fa-user"></i>
              
              <span class="nav-item2">Referees</span>
            </a>
          </li>
          <li>
            <a href="/listPh">
                <i class="fas fa-user-tie"></i>
              <span class="nav-item2">Physical Instructors</span>
            </a>
          </li>
          <li>
            <a href="/listTh">
                <i class="fas fa-chalkboard-teacher"></i>
               
              <span class="nav-item2">Technical Instructors</span>
            </a>
          </li>
          <li>
            <a href="/design">
                <i class="fas fa-calendar-alt"></i>
                <span class="nav-item2">Calendar</span>
            </a>
          </li>
          <li>
            <a href="/payee">
              <i class="fas fa-credit-card"></i>
              <span class="nav-item2">Payment</span>
            </a>
          </li>
         
          <li>
            <a href="/repport">
              <i class="fas fa-file-alt"></i>
              <span class="nav-item2">Reports</span>
            </a>
          </li>
          
          
          <li>
            <a href="{{URL('/admin/logout')}}" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item2">Log out</span>
            </a>
          </li>
        </ul>
      </nav>

      <header class="header-desktop" id="myHeader">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">

                    <form class="form-header" action="" method="POST">

                    </form>
                    <div class="header-button">
                        <div class="noti-wrap">
                            
                            <div class="noti__item js-item-menu">
                                <i class="fas fa-file-alt"></i>
                                @if(Auth::guard('sec_commission')->user()->report_envoyee == "1")
                              <span class="quantity">1</span>
                              @endif
                                {{-- <div class="email-dropdown js-dropdown">
                                    <div class="email__title">
                                        <p>You have 3 New Emails</p>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, 3 min ago</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, Yesterday</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, April 12,,2018</span>
                                        </div>
                                    </div>
                                    <div class="email__footer">
                                        <a href="#">See all emails</a>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="noti__item js-item-menu">
                                <i class="fas fa-bell"></i>                                <span class="quantity">3</span>
                                <div class="notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 img-cir img-40">
                                            <i class="zmdi zmdi-email-open"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a email notification</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                        </div>
                                        <div class="content">
                                            <p>Your account has been blocked</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c3 img-cir img-40">
                                            <i class="zmdi zmdi-file-text"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a new file</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__footer">
                                        <a href="#">All notifications</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div style="background-color: white; border-radius: 50px; height: 45px" >
                                <div class="image">
                                    <img style="border-radius: 50%; border-color: white;" src="{{asset('images/imagesAdmin/sec.jpg')}}" alt="John Doe" />
                                    
                                </div>
                                <div class="ss" style="width: 180px;" >
                                <a style="margin-left: 10px; margin-top:10px " href="#">{{Auth::guard('sec_commission')->user()->name}} {{Auth::guard('sec_commission')->user()->lastName}}</a>
                                <img style="width: 20px; " src= "{{asset('images/imagesAdmin/down.png')}}">
                            </div>
                            </div>
                                
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                    
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{Auth::guard('sec_commission')->user()->name}} {{Auth::guard('sec_commission')->user()->lastName}}</a>
                                            </h5>
                                            <span class="email">{{Auth::guard('sec_commission')->user()->email}}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="profilAdmin">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>