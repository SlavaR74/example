<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page.title', config('app.name'))</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    @stack('css')

    <style>
        .container {
            max-width: 720px;
        }

        .required:after {
            content: '*';
            color: red;
            margin-left: 3px;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column justify-content-between min-vh-100">
        @include('includes.header')
        <main class="flex-grow-1 py-3">
            @yield('content')
        </main>
        @include('includes.footer')
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
    @stack('js')
</body>

</html>
