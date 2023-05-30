<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="/css/insPhiCss/programme.css">
  </head>
   @include('InsPhi/menu')
        
	<body>
    <div class="button-container">
      <div class="button-box">
        <a href="{{ route('InsPhi/formulaire') }}" class="button"><img src="/images/imagesInsPhi/6.png" alt="Ajouter"></a>
        <p>new program</p>
      </div>
    
      <div class="button-box">
        <a href="{{ route('InsPhi/index') }}" class="button"><img src="/images/imagesInsPhi/8.png" alt="Afficher"></a>
        <p>current program</p>
      </div>
    </div>
   
    <div class="background-image" style="background-image: url(/images/imagesInsPhi/x.jpg);"></div>
   
    
    
    
  </body>
      

     
     
 
 
       

    
</html>