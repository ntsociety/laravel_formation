<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/admin/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/style.css') }}">
    <title>Dashboard</title>
</head>
<body>
    {{-- Navbar --}}
    @include('layouts.inc.navbar')
    {{-- Sidebar --}}
    @include('layouts.inc.sidebar')
    <main class="mt-5 pt-3">
        <div class="container my-3">
        {{-- contenu --}}
        </div>
        @yield('content')
    </main>



    <script src="{{ asset('assets/admin/bootstrap-5.2.3-dist/js/bootstrap.bundle.js') }}"> </script>
    <script src="{{ asset('assets/admin/jquery.min.js') }}"> </script>
    <script src="{{ asset('assets/admin/app.js') }}"> </script>
</body>
</html>
