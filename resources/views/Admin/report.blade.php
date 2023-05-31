<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repports</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    
    <link rel="stylesheet" href="css/AdminCss/payee.css">
    <link rel="stylesheet" href="css/AdminCss/toast.css">
    



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
    
  @include('Admin/menu')
  <div class="main-content" style="margin-top: 100px">

    <div class="content" style="width: 97%; margin-top:30px; margin-left:35px; z-index:-100"  >
        <ul class="notifications"></ul>
        <main class="table" style="z-index: -100">
            <section class="table__header">
                <h1>Arbiter's Report</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="images/imagesAdmin/search.png" alt="">
                </div>
                
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            
                            <th> Arbiter's Name <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Arbiter's LastName <span class="icon-arrow">&UpArrow;</span></th>
                            
                            <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($pdf_files as $Pdf)
    <tr>
        <td>{{$Pdf['nom']}} </td>
        <td>{{$Pdf['prenom']}}</td>
        <td>
            <a href="{{ $Pdf['fichier'] }}" target="_blank">
                <img style="cursor: pointer;" src="images/imagesAdmin/vu.png" alt="">
            </a>            <img style="cursor: pointer;" src="images/imagesAdmin/remove.png" alt="">
        </td>
    </tr>
@endforeach
                        
                    </tbody>
                </table>
            </section>
        </main>
    </div>
  </div>

    

    
   
    <script src="js/AdminJs/payee.js"></script>
    <script src="js/AdminJs/pdf.js"></script>


 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
