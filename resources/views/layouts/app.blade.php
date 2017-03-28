<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Couchcat - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" integrity="sha256-t2/7smZfgrST4FS1DT0bs/KotCM74XlcqZN5Vu7xlrw=" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/license">Licenses</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            @yield('content')
        </div>
        <script
              src="https://code.jquery.com/jquery-2.2.4.min.js"
              integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
              crossorigin="anonymous">
        </script>
    </body>
</html>