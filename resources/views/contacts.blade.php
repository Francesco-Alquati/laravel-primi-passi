<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>About us</title>
</head>
<body>
    <header class="border-bottom border-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled d-flex">
                        <li class="py-2 px-2 mx-4 mt-3"><a class="text-dark text-decoration-none" href="{{ route('homepage') }}">Home</a></li>
                        <li class="py-2 px-2 mx-4 mt-3"><a class="text-dark text-decoration-none" href="{{ route('aboutus') }}">About us</a></li>
                        <li class="py-2 px-2 mx-4 mt-3"><a class="text-dark text-decoration-none" href="{{ route('contacts') }}">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-uppercase">Contatti</h1>
                <h2 class="mt-3"><span class="text-primary">Francesco Alquati</span><br> Puoi contattarmi al numero: <span class="text-danger">3496904892</span></h2>
            </div>
        </div>
    </div>
</body>
</html>