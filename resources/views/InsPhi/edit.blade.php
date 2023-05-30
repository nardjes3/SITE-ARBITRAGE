<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="/css/insPhiCss/edit.css">
 </head>

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Modifier le programme pour la semaine {{ $semaine }}</div>
    
                        <div class="card-body">
                            @if ($programmes->count() > 0)
                                <form method="POST" action="{{ route('programmes.updateBySemaine', $semaine) }}">
                                    @csrf
                                    @method('PUT')
    
                                    @foreach ($programmes as $programme)
                                        <div class="form-group">
                                            <label for="jour_{{ $programme->id }}">Jour {{ $programme->jour }}</label>
                                            <input type="text" class="form-control" id="jour_{{ $programme->id }}" name="jours[{{ $programme->id }}][jour]" value="{{ $programme->jour }}" required>
                                            <input type="text" class="form-control" name="jours[{{ $programme->id }}][activite]" value="{{ $programme->activite }}" required>
                                        </div>
                                    @endforeach
    
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </form>
                            @else
                                <p>Aucun programme n'a été trouvé pour la semaine {{ $semaine }}.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="background-image"></div>

</html>
