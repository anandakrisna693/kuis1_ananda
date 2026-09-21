<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6f8;
    }

    header {
        background-color: #123c69;
        color: white;
        padding: 20px 8%;
    }

    .nama-kampus {
        font-size: 20px;
        font-weight: bold;
    }

    main {
        padding: 40px 8%;
    }
</style>
</head>

<body>

    <header>
    <div class="header">
        <div class="nama-kampus">
            POLINEMA PSDKU PAMEKASAN
        </div>
    </div>
</header>

    <main>
        @yield('content')
    </main>

</body>

</html>