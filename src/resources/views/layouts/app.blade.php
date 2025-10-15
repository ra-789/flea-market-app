<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <header class="site-header">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('images/logo.svg') }}" alt="COACHTECH">
        </a>

        <nav class="nav-menu">

            <form action="{{ route('products.index') }}" method="get">
                <input type="text" name="q" placeholder="なにをお探しですか？" class="border rounded px-2 py-1">
            </form>

            <a href="{{ route('logout') }}" class="px-4 py-2 bg-gray-300 rounded inline-block">ログアウト</a>

            <a href="{{ route('mypage.show') }}" class="px-4 py-2 bg-gray-300 rounded inline-block">マイページ</a>

            <a href="{{ route('sell') }}" class="px-4 py-2 bg-gray-300 rounded inline-block">出品</a>


        </nav>
    </header>

    @yield('link')

    <main class="content">
        @yield('content')
    </main>
</body>

</html>