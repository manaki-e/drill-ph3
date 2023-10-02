<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>POSSE</title>
</head>

<body>
    <header class="header">
        <div class="d-lg-flex header-container mx-auto">
            <div class="d-flex">
                <img src="/img/header-logo.png" class="header-img pr-3">
            </div>
        </div>
    </header>

    <main>
        <div class="main-container mx-auto">
            <div class="card-group" style="gap: 8px;">
                @foreach ($users as $user)
                    <div class="card" style="min-width: 300px; max-width: 300px;">
                        <img src="https://source.unsplash.com/XkKCui44iM0" class="bd-placeholder-img card-img-top" width="100%" height="200" alt="">
                        <div class="card-body">
                            <p class="card-text">family name: {{ $user->family_name }}</p>
                            <p class="card-text">first name: {{ $user->first_name }}</p>
                            <p class="card-text">full name: {{ $user->full_name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/calendar.js') }}"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</body>

</html>
