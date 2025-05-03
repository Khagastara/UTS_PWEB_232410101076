<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MEDCHECK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <main class="container mx-auto px-4 py-8 flex-1">
        @yield('content')
    </main>

    @if(session('user'))
        @include('components.footer')
    @endif
</body>
</html>
