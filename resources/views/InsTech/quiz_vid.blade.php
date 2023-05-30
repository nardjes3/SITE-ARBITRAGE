<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quiz Page</title>

    <!-- style.css -->
    <link rel="stylesheet" href="./dist/css/style.css" />
  </head>
  <style>
    video {
      margin-left: 250px;
    }
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  font-family: "Lato";
}
.wrapper {
  display: flex;
  position: absolute;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
  background-color: #007bff;
}

.welcome_text {
  width: 400px;
}

.welcome_form {
}

.welcome_form input,
.welcome_form button {
  display: block;
  width: 100%;
}

.welcome_form input {
  background-color: transparent;
  color: #fff;
  font-size: 30px;
  text-align: center;
  border: none;
  border-bottom: 1px solid #fff;
  margin-bottom: 15px;
}

.welcome_form input:focus {
  outline: none;
}

.welcome_form button {
  padding: 20px 0;
  border: none;
  border-radius: 100px;
  background-color: #fff;
  color: #007bff;
  font-size: 22px;
  transition: 0.4s all;
}

.welcome_form button:hover {
  box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.2);
  transform: translateY(-5px);
  cursor: pointer;
}

.quiz {
  display: grid;
  grid-template-rows: 60px auto;
  width: 1300px;
  height: 500px;
  background-color: #fff;
  box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.3);
  border-radius: 2px;
}

.quiz_header {
  display: flex;
  justify-content: space-between;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  background-color: #fff;
  box-shadow: 0px 2px 5px 1px rgba(0, 0, 0, 0.1);
  z-index: 1;
}
.quiz_body {
  padding: 30px 30px;
}
.quiz_user {
  display: flex;
  align-items: center;
  height: 100%;
  padding-left: 30px;
}

.quiz_timer {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 100px;
  background-color: #007bff;
  color: #fff;
}
.quiz_body {
  background-color: #ecf0f1;
}

.option_group {
  list-style-type: none;
  margin: 30px 0;
}

.option {
  display: block;
  width: 300px;
  margin-left: 500px;
  background-color: #fff;
  margin-bottom: 20px;
  padding: 15px 20px;
  border-radius: 100px;
  border: 2px solid transparent;
  transition: 0.4s all;
}

.option:hover {
  cursor: pointer;
  /* background-color: rgba(255, 255, 255, 0.1); */
  border: 2px solid #007bff;
  color: #007bff;
}
.option.active {
  background-color: #007bff;
  color: #fff;
}
.btn-next {
  border: none;
  padding: 15px 35px;
  background-color: #007bff;
  color: #fff;
  border-radius: 27px;
  transition: 0.4s all;
  margin-left: 1000px;
}

.btn-next:hover {
  cursor: pointer;
  background-color: #fff;
  color: #007bff;
  box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.1);
}

.award_icon {
  display: block;
  font-size: 300px;
  color: #fff;
}

.username,
.userpoints,
.usertime {
  color: #fff;
  text-align: center;
  margin-top: 15px;
}

    /*h2{
      color:#007bff ;
    }*/
  </style>
  <body>
    <div class="wrapper">
      <div class="quiz">
        <div class="quiz_header">
          <div class="quiz_user">
            <h2>Video Quiz <span class="name"></span></h2>
          </div>
          <div class="quiz_timer">
            <span class="time">00:00</span>
          </div>
        </div>
        <div>
        <div class="quiz_body">
          <div id="video_bd">
            
          <!--<video id="video" controls width="60%">
            <source src="{{ URL::to('/') }}/videos/peda_video.mp4" type="video/mp4">
        </video>-->
      </div>
        <br><br>
          <div id="questions">
            <!-- <ul class="option_group">
              <li class="option">option 1</li>
              <li class="option">option 2</li>
              <li class="option">option 3</li>
              <li class="option">option 4</li>
            </ul> -->
  
          </div>
        </div>
  
          <button class="btn-next" onclick="next()">Save & Next </button>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
       var test_id = {!! json_encode($test_id) !!}
        var arbitre_id = {!! json_encode($arbitre_id) !!}
        var videos = {!! json_encode($videos->toArray()) !!}
        var public_path = "{{ URL::to('/') }}";
    </script>
    <!-- site.js -->
    <script src="{{URL('js/InsTechJs/videos.js')}}"></script>

      <!-- user info -->
      <script src="{{URL('js/InsTechJs/userInfo.js')}}"></script>

     <!-- timer -->
     <script src="{{URL('js/InsTechJs/timer.js')}}"></script>
  </body>
</html>