<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>payement</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    
    <link rel="stylesheet" href="{{asset('css/AdminCss/payee.css')}}">
    <link rel="stylesheet" href="css/AdminCss/toast.css">
    <link rel="stylesheet" href="{{asset('css/AdminCss/header.css')}}">
    



    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    

</head>
<body style="background-image:url({{asset('images/imagesAdmin/2.jpg')}}); background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%; ">
    
    
    <div class="content" style="width: 97%; margin-top:30px; margin-left:35px; z-index:-100"  >
        <ul class="notifications"></ul>
        <main class="table" style="z-index: -100">
            <section class="table__header">
                <h1>Arbiter's Payement</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="{{asset('images/imagesAdmin/search.png')}}" alt="">
                </div>
                
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> Rencontre <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Date match <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Amount <span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payements as $payement)
                        <tr>
                            <td> {{ $payement->equipe1 }} - {{ $payement->equipe2 }}</td>
                            <td> {{ $payement->date }} </td>
                            <td id="{{ $payement->statut }}"    > {{ $payement->statut }} </td>
                            </td>                            
                            <td> <strong> {{ $payement->amount }} $</strong></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </section>
        </main>
    </div>
    

    
   
    <script src="js/AdminJs/payee.js"></script>
	<script src="js/AdminJs/toast.js"></script>
    <script src="js/AdminJs/sidebar.js"></script>
    <script src="js/AdminJs/sdBar.js"></script>

 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
