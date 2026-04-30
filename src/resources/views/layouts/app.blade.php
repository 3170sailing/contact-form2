<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">

    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Contact Form
            </a>

            <nav class="header__nav">
                @if (Auth::check())
                    <a class="header__link" href="/admin/contacts">
                        お問い合わせ一覧
                    </a>

                    <form class="header__form" action="/logout" method="post">
                        @csrf
                        <button class="header__button">ログアウト</button>
                    </form>
                @else
                    <a class="header__link" href="/login">
                        ログイン
                    </a>
                    <a class="header__link" href="/register">
                        会員登録
                    </a>
                @endif
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>