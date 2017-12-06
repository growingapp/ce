<!doctype html>
<html lang="en">
<head>
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