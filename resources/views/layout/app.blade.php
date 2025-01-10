<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div id="dashboard" class="flex h-screen">

        @include('parttials.samping')


        <div class="flex-grow flex flex-col">

            @include('parttials.nav')

            <main class="flex-grow p-6 bg-gray-50">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('js/compt.js') }}"></script>
</body>

</html>