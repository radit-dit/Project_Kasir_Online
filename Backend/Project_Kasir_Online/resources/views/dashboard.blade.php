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
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path></svg>

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
           {{ request()->is('dashboard') ? 'bg-blue-900 text-white stroke-white' : 'text-gray-700 stroke-black hover:bg-gray-100' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 17V9"></path><path d="M18 17V5"></path><path d="M3 3v16a2 2 0 0 0 2 2h16"></path><path d="M8 17v-3"></path></svg>
            Dashboard
        </a>

        <!-- Kasir -->
        <a href="/kasir"
           class="flex items-center px-4 py-3 rounded-lg
           {{ request()->is('kasir') ? 'bg-blue-900 text-white stroke-white' : 'text-gray-700 stroke-black hover:bg-gray-100' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>
            Cashier
        </a>

        <!-- Produk -->
        <a href="/product"
           class="flex items-center px-4 py-3 rounded-lg
           {{ request()->is('product*') ? 'bg-blue-900 text-white stroke-white' : 'text-gray-700 stroke-black hover:bg-gray-100' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>
            Product
        </a>

        <!-- Transaksi -->
        <a href="/reports"
           class="flex items-center px-4 py-3 rounded-lg
           {{ request()->is('reports*') ? 'bg-blue-900 text-white stroke-white' : 'text-gray-700 stroke-black hover:bg-gray-100' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 12h-5"></path><path d="M15 8h-5"></path><path d="M19 17V5a2 2 0 0 0-2-2H4"></path><path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3"></path></svg>
            Transactions
        </a>
    </nav>
</aside>

<script src="https://cdn.tailwindcss.com"></script>
     
</body>
</html>