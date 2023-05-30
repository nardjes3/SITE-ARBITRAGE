<!DOCTYPE html>

<html>
    <head>
        <title>Menu de navigation vertical</title>
        <link rel="stylesheet" type="text/css" href="/css/insPhiCss/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<div class="navigation">
    <div class="item">
      <a href="{{ route('layout') }}">
        <i class="fa fa-home"></i>
        <div class="label">Home</div>
      </a>
    </div>
    <div class="item">
      <a href="{{ route('video') }}">
        <i class="fa fa-film"></i> 
        <div class="label">Edit video</div>
      </a>
    </div>
    <div class="item">
      <a href="{{ route('test') }}">
        <i class="fa fa-file-text"></i>
        <div class="label">edit test</div>
      </a>
    </div>
    <div class="item">
      <a href="{{ route('programme') }}">
        <i class="fa fa-calendar"></i>
        <div class="label">program</div>
      </a>
    </div>
    <div class="item">
      <a href="{{ route('profil') }}">
        <i class="fa fa-user"></i>
        <div class="label">profil</div>
      </a>
    </div>
    <div class="item">
      <a href="{{ route('game-rules') }}">
        <i class="fa fa-users"></i>
        <div class="label">game rules</div>
      </a>
    </div>
  </div>
  
  
</div>
</div>

  


	<div class="background-image"></div>
	
   
</body>
</html>
