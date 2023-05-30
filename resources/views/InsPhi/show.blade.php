<!DOCTYPE html>


@section('content')
    <div class="container">
        <h1>Détails du programme</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Semaines : {{ $programme->semaines }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Jour : {{ $programme->jour }}</h6>
                <p class="card-text">{{ $programme->activite }}</p>
                <a href="{{ route('programmes.edit', $programme->id) }}" class="card-link">Modifier</a>
            </div>
        </div>
    </div>
@endsection

</html>