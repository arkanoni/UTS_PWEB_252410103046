<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi UTS PWeb')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-custom-purple { background-color: #AA32FC; }
        .bg-custom-yellow { background-color: #FCB233; }
        .bg-custom-green  { background-color: #32FC88; }
        .text-custom-purple { color: #AA32FC; }
        .text-custom-yellow { color: #FCB233; }
        .text-custom-green  { color: #32FC88; }
        .border-custom-purple { border-color: #AA32FC; }
        .border-custom-yellow { border-color: #FCB233; }
        .border-custom-green  { border-color: #32FC88; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 flex flex-col min-h-screen font-sans">

    <!-- Navbar Component -->
    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('components.footer')

</body>
</html>