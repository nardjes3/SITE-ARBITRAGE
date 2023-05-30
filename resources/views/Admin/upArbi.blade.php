<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>referee</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    
        <!-- Fontawesome CDN Link -->
        <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
        <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="{{asset('css/AdminCss/up.css')}}">
        
</head>
<body style="background-image:url({{asset('images/imagesAdmin/1.jpg')}}); background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%; ">
   
    <form class="fr" action="/edit" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
        <input type="hidden" name="id" value="<?=$data->id;?>">
        <div class="upload">
            <img class="img" src="{{asset('images/imagesAdmin/'.$data['image'])}}" width = 100 height = 100 alt="">

            <div class="round">
              <input name="image" type="file" value="{{$data['image']}}">
                      </div>
          </div>

        
    <div class="ligne">
        <label>First Name</label>
                  <input name="nom" type="text" value="{{$data['nom']}}">
    </div>
      <div class="ligne">
        <label>Last Name</label>
        <input name="prenom" type="text" value="{{$data['prenom']}}">
    </div>
    <div class="ligne">
        <label>Email</label>
                  <input name="login" type="text" value="{{$data['email']}}">
      </div>
    <div class="ligne">
        <label>Assigned role</label>
        <input name="role" type="text" value="{{$data['role']}}" >
    </div>
    <div class="ligne">
        <label>country</label>
        <input name="pays" type="text" value="{{$data['pays']}}" >
    </div>
    <div class="ligne">
        <label>Sport type</label>
            <input name="typeSport" type="text" value="{{$data['typeSport']}}" >
      </div>
      <div class="ligne">
        <label>role2</label>
          <input name="role2" type="text" value="{{$data['role2']}}" >
      </div>
    <div class="ligne">
        <label>statut</label>
        <input name="etat" type="text" value="{{$data['etat']}}" >
    </div>
    <div class="ligne">
        <label value="{{$data['genre']}}"  for="pet-select"></label><br>
        
<select name="pets" id="pet-select">
    
    <option  value="{{$data['genre']}}"> {{$data['genre']}}</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select></div>
    <div class="ligne">
        <label>niv</label>
      <input name="niv" type="text" value="{{$data['niv']}}" >
    </div>
    <div class="ligne">
        <label for="password">Password</label>
        <input id="password" name="mtps" type="text" value="{{$data['password']}}" class="pass">
      </div>
      
      <div class="ligne">
        <label for="password">Confirm Password</label>
        <input id="confirm_password" name="mtps" type="text" value="{{$data['password']}}" class="pass">
      </div>
      
                      
      <p id="message"> </p>
   
        <input type="submit" id="button" value="SUBMIT" onclick="checkPassword();"> 
 
    </form>

    <script src="js/AdminJs/up.js"></script>

</body>
</html>



