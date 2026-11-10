@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
<div class="max-w-lg mx-auto bg-slate-900 p-8 rounded-tr-3xl rounded-bl-3xl rounded-tl-xl rounded-br-xl border-2 border-slate-800 shadow-2xl">
    <div class="flex items-center gap-4 mb-6 border-b-2 border-slate-800 pb-4">
        <div class="w-12 h-12 bg-custom-purple rounded-xl flex items-center justify-center font-black text-slate-950 text-xl">
            {{ strtoupper(substr($username, 0, 1)) }}
        </div>
        <div>
            <h2 class="text-2xl font-black text-custom-yellow">Profil Pengguna</h2>
            <p class="text-xs text-slate-400">Detail sesi login saat ini</p>
        </div>
    </div>
    
    <div class="space-y-4">
        <div class="bg-slate-800/60 p-4 rounded-xl border border-slate-700/60">
            <span class="text-slate-400 text-xs font-bold uppercase tracking-wider block">Username Aktif</span>
            <p class="text-xl font-black text-custom-green mt-1 font-mono">@ {{ $username }}</p>
        </div>
        <div class="bg-slate-800/60 p-4 rounded-xl border border-slate-700/60">
            <span class="text-slate-400 text-xs font-bold uppercase tracking-wider block">Hak Akses Sistem</span>
            <p class="text-sm font-semibold text-slate-200 mt-1">Full Access</p>
        </div>
    </div>
    
    <div class="mt-8 pt-4 border-t border-slate-800">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="inline-flex items-center text-sm font-bold text-custom-yellow hover:underline">&larr; Kembali ke Dashboard Utama</a>
    </div>
</div>
@endsection