@extends('layouts.app')

@section('title', 'Pengelolaan Data')

@section('content')
<div class="bg-slate-900 p-8 rounded-2xl border-2 border-slate-800 shadow-2xl">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6 pb-4 border-b-2 border-slate-800">
        <div>
            <h1 class="text-2xl font-black text-custom-yellow">Pengelolaan Data Item</h1>
            <p class="text-xs text-slate-400">Data array dari PageController</p>
        </div>
    </div>

    <div class="overflow-x-auto rounded-xl border border-slate-800">
        <table class="w-full border-collapse text-left">
            <thead>
                <tr class="bg-slate-800/90 text-custom-green text-xs uppercase tracking-wider border-b border-slate-700">
                    <th class="py-3.5 px-4">#</th>
                    <th class="py-3.5 px-4">Nama Item</th>
                    <th class="py-3.5 px-4">Kategori</th>
                    <th class="py-3.5 px-4">Stok</th>
                    <th class="py-3.5 px-4">Harga Satuan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800/80 text-sm">
                @foreach($items as $index => $item)
                <tr class="hover:bg-slate-800/40 transition">
                    <td class="py-4 px-4 font-mono font-bold text-slate-500">{{ sprintf('%02d', $index + 1) }}</td>
                    <td class="py-4 px-4 font-bold text-white">{{ $item['nama'] }}</td>
                    <td class="py-4 px-4">
                        <span class="bg-slate-800 text-custom-yellow text-xs font-semibold px-2.5 py-1 rounded-md border border-slate-700">
                            {{ $item['kategori'] }}
                        </span>
                    </td>
                    <td class="py-4 px-4 text-custom-green font-mono font-black">{{ $item['stok'] }}</td>
                    <td class="py-4 px-4 font-mono text-slate-300">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="mt-8 flex justify-between items-center">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="inline-flex items-center gap-2 bg-slate-800 text-slate-200 border border-slate-700 px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider hover:bg-slate-700 transition">
            &larr; Kembali
        </a>
        <span class="text-xs text-slate-500 font-mono">Total Item: {{ count($items) }} Baris</span>
    </div>
</div>
@endsection