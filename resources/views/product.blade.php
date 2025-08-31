<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Re-Cyce</title>

    @vite('resources/css/app.css')

    <link rel="shortcut icon" href="{{ asset('asset/Logo.png') }}" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="font-space"
      x-data="{ show: false }"
      x-init="setTimeout(() => show = true, 300)"
      x-show="show"
      x-transition:enter="transition ease-out duration-1000"
      x-transition:enter-start="opacity-0 translate-y-10"
      x-transition:enter-end="opacity-100 translate-y-0">

    {{-- Navbar --}}
    <x-navbar></x-navbar>

    <!-- Container -->
    <div class="max-w-7xl mx-auto px-6 py-8 animate-slideUp"
         x-data="{ filterOpen: false, favorites: {}, activeTab: 'marketplace', search: '' }">

        <!-- Search -->
        <div class="flex items-center gap-3 bg-gray-100 rounded-xl px-4 py-3 relative">
            <i class="bx bx-search text-gray-400 text-xl"></i>
            <input type="text"
                   placeholder="Search Product"
                   x-model="search"
                   class="bg-transparent flex-1 outline-none text-sm font-space md:text-base">
        </div>

        <!-- Marketplace -->
        <div class="py-10" x-show="activeTab === 'marketplace'">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg md:text-xl font-bold">Recycle Product</h2>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                @forelse($products as $product)
                    <div class="border border-Ireng rounded-xl p-4 shadow-sm hover:shadow-md
                                transition transform hover:-translate-y-2 hover:scale-105
                                duration-300 relative bg-white flex flex-col"
                         x-show="'{{ strtolower($product->nama) }}'.includes(search.toLowerCase()) || 
                                 '{{ strtolower($product->harga) }}'.includes(search.toLowerCase())">

                        @php
                            $img = $product->gambar
                                ? asset('storage/' . $product->gambar)
                                : asset('asset/sepatu.png'); // fallback
                        @endphp

                        <!-- Product Image -->
                        <img src="{{ $img }}" alt="{{ $product->nama }}" class="w-full h-32 object-contain">

                        <!-- Product Info -->
                        <div class="flex-1">
                            <h3 class="text-sm font-poppins font-bold text-Ireng mt-3">
                                {{ $product->nama }}
                            </h3>
                            <p class="text-Ireng text-xs">{{ $product->harga }}</p>
                        </div>

                        <!-- Buy Button -->
                        <button class="w-full mt-auto py-2 text-sm border border-Hijau rounded-lg
                                       font-p font-semibold text-Hijau
                                       hover:bg-Hijau hover:text-white
                                       transition-colors duration-300">
                            Buy Now
                        </button>
                    </div>
                @empty
                    <p class="text-gray-500">Belum ada produk.</p>
                @endforelse
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <x-footer></x-footer>

</body>
</html>
