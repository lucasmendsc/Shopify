<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>After Sale</title>
    <link href="/css/material-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="../../public/css/my-login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/my-login.js"></script>
    <script src="../js/usuario.js"></script>
</head>

<body>
    @yield('content');
    <a href="/login"> login </a>
    <a href="/cadastro"> cadastrar </a>
    <a href="/favoritos"> favoritos </a>
</body>

</html>
