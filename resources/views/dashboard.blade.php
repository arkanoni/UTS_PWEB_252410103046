@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="bg-slate-900 p-8 rounded-2xl border-2 border-slate-800 shadow-2xl">
    <div class="border-b-2 border-slate-800 pb-5 mb-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        <div>
            <h1 class="text-3xl font-black text-custom-yellow tracking-tight">Halo, <span class="text-custom-green underline decoration-custom-purple decoration-4">{{ $username }}</span>!</h1>
            <p class="text-slate-400 text-sm mt-1">Sistem Manajemen Web Pengelolaan Item.</p>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Card Utama (Lebih besar) -->
        <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="lg:col-span-2 block p-7 bg-slate-800/40 border-2 border-custom-yellow/60 rounded-xl hover:border-custom-yellow hover:bg-slate-800/80 transition-all group">
            <span class="text-xs font-bold text-custom-yellow uppercase tracking-widest block mb-1">Menu Utama</span>
            <h3 class="font-black text-white text-2xl mb-2 group-hover:text-custom-yellow transition">Kelola Data Item &rarr;</h3>
            <p class="text-sm text-slate-300">Pergi ke pengelolaan.</p>
        </a>

        <!-- Card Samping -->
        <a href="{{ route('profile', ['username' => $username]) }}" class="block p-7 bg-slate-800/40 border-2 border-custom-green/60 rounded-xl hover:border-custom-green hover:bg-slate-800/80 transition-all group">
            <span class="text-xs font-bold text-custom-green uppercase tracking-widest block mb-1">Informasi</span>
            <h3 class="font-black text-white text-xl mb-2 group-hover:text-custom-green transition">Profil Akun &rarr;</h3>
            <p class="text-sm text-slate-300">Pergi ke profil untuk melihat detail profil.</p>
        </a>
    </div>
</div>
@endsection