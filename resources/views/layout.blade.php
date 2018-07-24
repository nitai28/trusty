<html>

<head>
    <title>Psd To Html</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
@include('layouts.header.header')
@if (\Request::is('/'))
@include('layouts.main.main')
@endif
@yield('content')
@include('layouts.footer.footer')

</body>

</html>
