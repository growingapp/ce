<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    @include('backend::_template.partials.headers')
    @yield('headers')
</head>
<body>
    @include('backend::_template.partials.nav')

    <main class="mt-3 mb-5">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    @include('backend::_template.partials.footer')
    <script src="{{ mix('assets/bootstrap/js/bootstrap.js') }}"></script>
    @yield('scripts')
</body>
</html>