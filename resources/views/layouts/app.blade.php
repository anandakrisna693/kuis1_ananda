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
            color: #333;
        }

        /* Header */

        header {
            background-color: #123c69;
            color: white;
            padding: 20px 8%;
        }

        .nama-kampus {
            font-size: 20px;
            font-weight: bold;
        }

        /* Isi */

        main {
            padding: 40px 8%;
        }

        .bagian-atas {
            background-color: #1d5d9b;
            color: white;
            padding: 50px;
            margin-bottom: 40px;
        }

        .bagian-atas h1 {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .bagian-atas p {
            line-height: 1.7;
        }

        .tentang {
            background-color: white;
            padding: 30px;
            margin-bottom: 40px;
        }

        .tentang h2 {
            color: #123c69;
            margin-bottom: 15px;
        }

        .tentang p {
            line-height: 1.8;
        }

        .program {
            margin-bottom: 40px;
        }

        .program h2 {
            color: #123c69;
            margin-bottom: 10px;
        }

        .card {
            display: inline-block;
            width: 31%;
            background-color: white;
            padding: 25px;
            margin: 10px 1%;
            vertical-align: top;
        }

        .card h3 {
            color: #1d5d9b;
            margin-bottom: 10px;
        }

        .card p {
            line-height: 1.6;
        }


        @media (max-width: 768px) {

            .card {
                width: 100%;
                margin: 10px 0;
            }

            .bagian-atas h1 {
                font-size: 30px;
            }

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