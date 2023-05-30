<!DOCTYPE html>

<html>
    <head>
        <title>Menu de navigation vertical</title>
        <link rel="stylesheet" type="text/css" href="/css/insPhiCss/video.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
@include('InsPhi/menu')
 
  <main>
    <div class="button-container">
      <a href="{{ route('get.video.upload') }}" class="button-box" id="add-video">
        <img src="/images/imagesInsPhi/add.png" alt="Add Video">
        <p>new video</p>
      </a>
      <a href="{{ route('video-list')}}" class="button-box" id="delete-video">
        <img src="/images/imagesInsPhi/delete.png" alt="Delete Video">
        <p>delete video</p></video></p>
      </a>
    </div>
    
      
      
    <div class="background-image" style="background-image: url(/images/imagesInsPhi/aaa.jpg);"></div>
      
      
      
      
   
</body>
</html>
