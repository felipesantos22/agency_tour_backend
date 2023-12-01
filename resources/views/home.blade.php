<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Agency Tour</title>
</head>

<body>
    <form action="{{ url('/') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Continente</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">País</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            {{-- <input type="text" class="form-control" id="description" name="description"> --}}
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">URl da Imagem</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @foreach ($card as $cards)
        <div class="row row-cols-4 row-cols-md-4 g-4">
            <div class="col">
                <div class="card">
                    <img src="{{ $cards->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cards->name }}</h5>
                        <p class="card-text">{{ $cards->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</body>

</html>
