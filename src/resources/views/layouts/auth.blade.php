<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @yield('css')
    <title>COACHTECH</title>
</head>

<body>
    <div class="register-container">

        <h1 class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="COACHTECH">
            </a>
        </h1>

        @yield('content')

    </div>
</body>

</html>