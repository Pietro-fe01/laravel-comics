<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC | @yield('page-title', 'Standard Title')</title>
    <!-- Fontawesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fontawesome CDN -->
    @vite('resources/js/app.js')
</head>
<body>
    <!-- Header -->
    @include('partials.header')

    <!-- Main -->
    <main class="py-5">
        @yield('main-content')
    </main>

    <!-- Footer -->
    @include('partials.footer')
</body>
</html>