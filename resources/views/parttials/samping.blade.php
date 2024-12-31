<aside id="sidebar" class="bg-gray-800 text-white flex-shrink-0 max-w-0 w-64 opacity-0 transition-all duration-300">
    <div class="p-4 flex justify-between items-center">
        <h2 class="text-xl font-bold whitespace-nowrap">Admin</h2>
        <button id="closeSidebar" class="p-1 bg-gray-700 rounded hover:bg-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </div>
    <nav class="mt-6">
        <ul>
            <li class="px-4 py-2 hover:bg-gray-700"><a href="{{Route('rsv.index')}}" class="block">Data Reservasi</a>
            </li>
            <li class="px-4 py-2 hover:bg-gray-700"><a href="{{Route('rsv.input')}}" class="block">Input
                    Reservasi</a>
            </li>
            <li class="px-4 py-2 hover:bg-gray-700"><a href="{{Route('wish.index')}}" class="block">Data Wishes</a></li>
            <li class="px-4 py-2 hover:bg-gray-700"><a href="{{Route('wish.input')}}" class="block">Input
                    Wishes</a>
            </li>
            <li class="px-4 py-2 hover:bg-gray-700"><a href="/admin/2112/inputtamu" class="block">Input Tamu</a></li>
            <li class="px-4 py-2 hover:bg-gray-700"><a href="/admin/2112/datatamu" class="block">Daftar Tamu</a></li>
        </ul>
    </nav>
</aside>