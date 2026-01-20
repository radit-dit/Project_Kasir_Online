<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Casier</title>
    
</head>
<body>

<div class="content" id="content">
        @stack('style')
        @yield('content')

</div>

<!-- Navbar Content -->

<!-- Navbar -->
<header class="fixed top-0 left-64 right-0 h-16 bg-white border-b flex items-center justify-end px-20 z-10">

    <!-- Notification -->
    <button class="relative mr-6">
        <span class="text-2xl">🔔</span>

        <!-- Badge -->
        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-3 h-3 flex items-center justify-center rounded-full">
            
        </span>
    </button>

    <!-- Profile -->
    <div class="flex items-center gap-3">

        <img
            src="{{ asset('image/profile.png') }}"
            alt="Profile"
            class="w-9 h-9 rounded-full object-cover border"
        >

        <span class="text-sm font-medium text-gray-700">
            Admin Casha
        </span>
    </div>

</header>


<!-- Sidebar Content -->

  <aside class="w-64 h-screen bg-white shadow-lg fixed left-0 top-0">
    <!-- Logo -->
    <div class="h-16 flex items-center px-6 border-b">
       <img src="{{ asset('image/logo.png') }}" alt="Logo" class="h-10 m-3">
        <span class="text-xl font-bold text-black">
            Casha
        </span>
    </div>

    <!-- Menu -->
    <nav class="p-4 space-y-2">

        <!-- Dashboard -->
        <a href="/dashboard"
           class="flex items-center px-4 py-3 rounded-lg
           {{ request()->is('dashboard') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
            <span class="mr-3">📊</span>
            Dashboard
        </a>

        <!-- Kasir -->
        <a href="/kasir"
           class="flex items-center px-4 py-3 rounded-lg
           {{ request()->is('kasir') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
            <span class="mr-3">🧾</span>
            Kasir
        </a>

        <!-- Produk -->
        <a href="/product"
           class="flex items-center px-4 py-3 rounded-lg
           {{ request()->is('product*') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
            <span class="mr-3">📦</span>
            Produk
        </a>

        <!-- Transaksi -->
        <a href="/reports"
           class="flex items-center px-4 py-3 rounded-lg
           {{ request()->is('reports*') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
            <span class="mr-3">📑</span>
            Transaksi
        </a>
    </nav>
</aside>

<script src="https://cdn.tailwindcss.com"></script>
     
</body>
</html>