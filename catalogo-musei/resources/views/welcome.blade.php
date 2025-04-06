<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Musei</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Catalogo Musei</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="mb-4">Benvenuto nel Catalogo dei Musei</h1>
        <p>Qui potrai esplorare e prenotare la visita a musei selezionati!</p>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            @forelse($musei as $museo)
                <div class="col">
                    <div class="card h-100">
                        @if($museo->immagine)
                            <img src="{{ $museo->immagine }}" class="card-img-top" alt="{{ $museo->nome }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $museo->nome }}</h5>
                            <h6 class="card-subtitle text-muted">{{ $museo->citta }}</h6>
                            <p class="card-text mt-2">{{ $museo->descrizione }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">Nessun museo disponibile al momento.</p>
            @endforelse
        </div>
        
        
    </div>

</body>
</html>
