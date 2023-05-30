<!DOCTYPE html>
<html>
<head>
  <title>test-physique</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/insPhiCss/test.css">
</head>

<nav>
  <div class="logo">
    <a href="#"><img src="/images/imgesInsPhi/logo_off.png" alt="Logo"></a>
  </div>
 

 
</nav>
<body>
  <h2> test PDF</h2>
  <div class="pdf-container">
   
    <embed src="/images/imgesInsPhi/test-PH.pdf" type="application/pdf" />

  </div>
  <h2> test video</h2>
  <div class="container video" id="videoContainer">
    
    @foreach ($videos as $video)
    <video src="{{ asset($video->getPathname()) }}" controls autoplay loop></video>
    @endforeach
  </div>
  <div class="background-image" style="background-image: url(/images/imgesInsPhi/x.jpg);"></div>
 
  <script>
    $(document).ready(function() {
      $('#pdfButton').magnificPopup({
        items: {
          src: '/images/imgesInsPhi/test-PH.pdf',
          type: 'iframe'
        }
      });
    });

    const videoContainer = document.getElementById('videoContainer');

    // Chemin du dossier "videos"
    const videosFolder = 'public/videos/';

    // Récupérer la liste des vidéos disponibles
    fetchVideos();

    // Fonction pour récupérer les vidéos disponibles
    function fetchVideos() {
      fetch(videosFolder)
        .then(response => response.text())
        .then(data => {
          const parser = new DOMParser();
          const html = parser.parseFromString(data, 'text/html');
          const files = Array.from(html.querySelectorAll('a')).map(a => a.href);

          // Filtrer les fichiers vidéo
          const videos = files.filter(file => file.endsWith('.mp4'));

          // Générer les balises <video> pour chaque vidéo
          videos.forEach(video => {
            const videoElement = document.createElement('video');
            videoElement.src = video;
            videoElement.controls = true;
            videoElement.autoplay = true;
            videoElement.loop = true;
            videoContainer.appendChild(videoElement);
          });
        });
    }
  </script>
</body>
</html>
