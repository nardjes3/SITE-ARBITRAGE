<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videos Quiz</title>
    
    <!-- style.css -->
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<style>
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

</style>
<body>
    <div class="wrapper">
        <div class="welcome_text">
            <form class="welcome_form" name="welcome_form" onsubmit="submitForm(event)">
                <input type="text" name="name">
                <button>Start Videos Quiz</button>
            </form>
        </div>
    </div>

    <!-- site.js -->
    <script src="{{URL('js/InsTechJs/start.js')}}"></script>
</body>
</html>