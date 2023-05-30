<!DOCTYPE html>

<html>
    <head>
       
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/insPhiCss/profile.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
@include('InsPhi/menu')

<meta charset="UTF-8">
<title>Profil</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
      <div class="left">
        <img src="/images/profil.jpg" alt="Profile Picture">
        <h4>instructeur phisique</h4>
       
      </div>
      <div class="right">
        <div class="info">
          <h3>Informations Personnelles</h3>
          <div class="info_data">
            <div class="data">
                <h4>Nom</h4>
                <p>{{ $user->nom }}</p>
            </div>
            <div class="data">
                <h4>Prénom</h4>
                <p>{{ $user->prenom }}</p>
            </div>
            <div class="data">
                <h4>Login</h4>
                <p>{{ $user->login }}</p>
            </div>
            <div class="data">
                <h4>Téléphone</h4>
                <p>{{ $user->telephone }}</p>
            </div>
            <div class="data">
                <h4>Adresse</h4>
                <p>{{ $user->adresse }}</p>
            </div>
        </div>
        
        
    </div>
  
    <div class="background-image" style="background-image: url(/images/imagesInsPhi/s.jpg);"></div>
   
    
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
 </body>
</html>