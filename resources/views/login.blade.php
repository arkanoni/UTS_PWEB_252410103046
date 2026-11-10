<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UTS PWeb</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-custom-purple { background-color: #AA32FC; }
        .text-custom-yellow { color: #FCB233; }
        .text-custom-green { color: #32FC88; }
        .border-custom-purple { border-color: #AA32FC; }
    </style>
</head>
<body class="bg-slate-950 flex items-center justify-center h-screen font-sans">
    <div class="bg-slate-900 p-8 rounded-xl shadow-2xl w-96 border-2 border-custom-purple">
        <h2 class="text-3xl font-black mb-2 text-center text-custom-yellow">LOGIN</h2>
        <p class="text-xs text-slate-400 text-center mb-6">Masukkan username kamu untuk melanjutkan</p>
        
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label class="block text-slate-300 text-xs font-bold mb-2 uppercase tracking-wide" for="username">Username</label>
                <input class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-lg text-white focus:outline-none focus:border-custom-purple transition" type="text" id="username" name="username" placeholder="Ketik username..." required>
            </div>
            <button type="submit" class="w-full bg-custom-purple text-slate-950 font-black py-3 px-4 rounded-lg hover:brightness-110 transition uppercase tracking-wider">Masuk Sekarang</button>
        </form>
    </div>
</body>
</html>