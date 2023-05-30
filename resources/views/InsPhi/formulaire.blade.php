<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="/css/insPhiCss/formulaire.css">
  </head>
<body>
    @section('content')
    <div class="form-box">
    <div class="container">
        <h1>Créer votre programme</h1>

        <form action="{{ route('programmes.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="semaines">Nombre de semaines :</label>
                <input type="number" name="semaines" id="semaines" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jour">Jour :</label>
                <input type="text" name="jour" id="jour" class="form-control" required>
            </div>


            <div class="form-group">
                <label for="activite">Activité :</label>
                <input type="text" name="activite" id="activite" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
            <button type="button" class="btn btn-secondary" onclick="retour()">Retour</button>

        </form>
    </div>
    </div>
    <div class="background-image"></div>
    
    <script>function retour() {
        window.location.href = "programme";
      }
    </script>      
</body>
</html>