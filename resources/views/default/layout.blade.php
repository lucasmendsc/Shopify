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
</head>

<body>
    @yield('content');
    <a href="/login"> login </a>
    <a href="/cadastro"> cadastrar </a>
</body>

</html>
