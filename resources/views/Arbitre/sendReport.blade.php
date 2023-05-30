<!DOCTYPE html>
<html>
<head>
    <title>Chat Box</title>
    <style>
        .message {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id="chatBox">
        <!-- Zone de discussion -->
        <div class="message">
            <span class="sender">Admin:</span>
            <span class="content">Bienvenue dans le chat !</span>
        </div>
    </div>
    
    <form id="messageForm" action="/sauvegarder" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="pdf">
        <button type="submit">Envoyer</button>
    </form>

    <!-- Importation de la bibliothèque jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
</body>
</html>
