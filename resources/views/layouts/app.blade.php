<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDCHECK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-50">
    @if(session('user'))
        @include('components.navbar')
    @endif

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    @if(session('user'))
        @include('components.footer')
    @endif
</body>
</html>
