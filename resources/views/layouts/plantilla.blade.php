<html>

<head>
    <title>
        @yield('titulo')
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        table>* {
            text-align: center;
        }

        div>h2 {
            color: white;
            padding-lef: 10px;
        }

        .botones>* {
            height: 40px;
        }

        button>a,
        a:hover {
            text-decoration: none;
            color: black;
        }

        span>p {
            padding-top: 10px;
            padding-left: 80px;
        }

        .navbar {
            background-color: lightslategrey;
            margin: 0;
        }

        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px;
            background-color: lightslategrey;
            color: white;
            text-align: center;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body class="container-fluid m-0 p-0">
    @include('partials.navbar')
    @yield('contenido')
    @include('partials.footer')
</body>

</html>