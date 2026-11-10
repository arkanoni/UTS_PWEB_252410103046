<header class="bg-slate-900 border-b-2 border-custom-purple shadow-lg">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ isset($username) ? route('dashboard', ['username' => $username]) : '#' }}" class="text-2xl font-black tracking-wider text-custom-yellow uppercase">
            Sistem Managemen <span class="text-custom-green">Item</span>
        </a>
        @isset($username)
        <nav class="space-x-6 text-sm font-semibold">
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="hover:text-custom-green transition duration-200">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="hover:text-custom-green transition duration-200">Pengelolaan</a>
            <a href="{{ route('profile', ['username' => $username]) }}" class="hover:text-custom-green transition duration-200">Profil</a>
            <a href="{{ route('login') }}" class="bg-custom-purple text-slate-950 px-4 py-1.5 rounded-md font-bold hover:bg-opacity-90 transition">Logout</a>
        </nav>
        @endisset
    </div>
</header>