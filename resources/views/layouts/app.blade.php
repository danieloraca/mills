<html>
<head>
    <title>Windmills</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@section('sidebar')

@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
