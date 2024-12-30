<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div id="dashboard" class="flex h-screen">
        <!-- Sidebar -->
        @include('parttials.samping')

        <!-- Main Content Area -->
        <div class="flex-grow flex flex-col">
            <!-- Navbar -->
            @include('parttials.nav')

            <!-- Content -->
            <main class="flex-grow p-6 bg-gray-50">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        const openSidebar = document.getElementById('openSidebar');
        const closeSidebar = document.getElementById('closeSidebar');
        const sidebar = document.getElementById('sidebar');

        openSidebar.addEventListener('click', () => {
            sidebar.classList.remove('max-w-0', 'opacity-0');
            sidebar.classList.add('max-w-xs', 'opacity-100');
            openSidebar.classList.add('hidden');
        });

        closeSidebar.addEventListener('click', () => {
            sidebar.classList.remove('max-w-xs', 'opacity-100');
            sidebar.classList.add('max-w-0', 'opacity-0');
            openSidebar.classList.remove('hidden');
        });
    </script>
</body>

</html>