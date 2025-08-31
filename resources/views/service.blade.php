<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Re-Cyce</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="font-sans text-gray-800"
  x-data="{ show: false }"
  x-init="setTimeout(() => show = true, 300)"
  x-show="show"
  x-transition:enter="transition ease-out duration-1000"
  x-transition:enter-start="opacity-0 translate-y-10"
  x-transition:enter-end="opacity-100 translate-y-0">

  {{-- Navbar --}}
  <x-navbar></x-navbar>

  <!-- Hero Section -->
  <section class="text-center px-6 md:px-20 py-20">
    <span class="bg-lime-100 text-Hijau px-5 py-2 rounded-full font-semibold">Service</span>

    <h2 class="mt-6 text-2xl md:text-5xl font-bold leading-snug font-poppins">
      <span class="text-Hijau">Digital System</span> To Monitor And <br> Manage Your Waste.
    </h2>

    <p class="mt-4 text-gray-600 max-w-2xl mx-auto font-p font-medium">
      Our website provides a complete solution for those of you who care about the environment:
      recycling waste pick-up services, an eco-friendly product marketplace, and digital education about green living.
    </p>

    <!-- Statistik -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-12 text-Hijau font-bold font-poppins text-2xl md:text-3xl">
      <div>
        371k+
        <p class="text-gray-700 text-sm font-normal">People Contribution</p>
      </div>
      <div>
        $5.1b+
        <p class="text-gray-700 text-sm font-normal">Cumulative Trending</p>
      </div>
      <div>
        188k
        <p class="text-gray-700 text-sm font-normal">Successful New Product</p>
      </div>
      <div>
        1.2%
        <p class="text-gray-700 text-sm font-normal">Low Interest Rate</p>
      </div>
    </div>
  </section>

  <!-- Workflow Section -->
  <section class="text-center px-6 md:px-20 mt-12">
    <h3 class="text-Hijau font-semibold font-p">Optimize Workflow</h3>
    <h2 class="text-xl md:text-2xl font-bold mt-2 font-poppins">Recycle Today, Save Tomorrow</h2>
    <p class="mt-3 text-gray-600 max-w-xl mx-auto font-p font-medium">
      We understand the real needs of our environment, and we come up with specially
      designed recycling solutions — so the earth can grow cleaner, healthier, and more sustainable.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
      <!-- Card 1 -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <i class='bx bx-recycle text-5xl text-Hijau'></i>
        <h3 class="font-poppins font-bold text-xl mt-4">Integrated waste management</h3>
        <p class="font-p font-medium text-sm text-gray-600 mt-2">
          Common recyclables: paper, cardboard, plastic bottles, glass, aluminum cans, and metal.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <i class='bx bx-refresh text-5xl text-Hijau'></i>
        <h3 class="font-poppins font-bold text-xl mt-4">Material Recycling</h3>
        <p class="font-p font-medium text-sm text-gray-600 mt-2">
          Use jars, containers, or boxes again before sending them to recycling. Upcycle into new products.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <i class='bx bx-cog text-5xl text-Hijau'></i>
        <h3 class="font-poppins font-bold text-xl mt-4">Smart Recycling System</h3>
        <p class="font-p font-medium text-sm text-gray-600 mt-2">
          Take recyclables to the nearest recycling center or waste bank. Reduce unnecessary packaging.
        </p>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section class="px-6 md:px-20 py-16 text-center">
    <h2 class="text-3xl md:text-4xl font-bold font-poppins leading-snug">
      <span class="text-Hijau">Learning recycling</span> is more fun through <br> interactive video tutorials.
    </h2>
    <p class="mt-4 text-gray-500 max-w-2xl mx-auto font-p font-medium">
      We provide a variety of complete video tutorials as a practical guide in waste management and recycling.
    </p>

    <!-- Video Cards -->
    <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="bg-gray-100 rounded-xl shadow-sm overflow-hidden">
        <div class="relative hover:scale-105 transition-all duration-300">
          <img src="{{ asset('img/Mask group (2).png') }}" alt="Video 1" class="w-full h-48 object-cover">
          <button class="absolute inset-0 flex items-center justify-center">
            <a href="https://www.youtube.com/watch?v=9k_INlQlX08">
              <i class='bx bx-play-circle text-5xl text-white drop-shadow-lg'></i>
            </a>
          </button>
        </div>
        <div class="flex items-center gap-3 p-4">
          <img src="{{ asset('img/pp1.jpg') }}" alt="Robbert Jhon" class="w-10 h-10 rounded-full border">
          <div class="text-left">
            <h4 class="font-semibold text-gray-800 font-poppins">Bottle Plastic Vertical Garden</h4>
            <p class="text-gray-500 text-sm">YouTube</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-gray-100 rounded-xl shadow-sm overflow-hidden">
        <div class="relative hover:scale-105 transition-all duration-300">
          <img src="{{ asset('img/Mask group (3).png') }}" alt="Video 2" class="w-full h-48 object-cover">
          <button class="absolute inset-0 flex items-center justify-center">
            <a href="https://www.youtube.com/watch?v=yOrR91qyGOA">
              <i class='bx bx-play-circle text-5xl text-white drop-shadow-lg'></i>
            </a>
          </button>
        </div>
        <div class="flex items-center gap-3 p-4">
          <img src="{{ asset('img/pp1.jpg') }}" alt="Robbert Jhon" class="w-10 h-10 rounded-full border">
          <div class="text-left">
            <h4 class="font-semibold text-gray-800">Paper Bag From Waste</h4>
            <p class="text-gray-500 text-sm">YouTube</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-gray-100 rounded-xl shadow-sm overflow-hidden">
        <div class="relative hover:scale-105 transition-all duration-300">
          <img src="{{ asset('img/Mask group (5).png') }}" alt="Video 3" class="w-full h-48 object-cover">
          <button class="absolute inset-0 flex items-center justify-center">
            <a href="https://www.youtube.com/watch?v=IOb0R7tObD0">
              <i class='bx bx-play-circle text-5xl text-white drop-shadow-lg'></i>
            </a>
          </button>
        </div>
        <div class="flex items-center gap-3 p-4">
          <img src="{{ asset('img/pp1.jpg') }}" alt="Robbert Jhon" class="w-10 h-10 rounded-full border">
          <div class="text-left">
            <h4 class="font-semibold text-gray-800">Recycle Cat Pot</h4>
            <p class="text-gray-500 text-sm">YouTuber</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="px-6 md:px-20 mt-20 text-center">
    <h2 class="text-2xl md:text-3xl font-bold font-poppins">
      <span class="text-Hijau">See how people</span> move together through this gallery.
    </h2>
    <p class="mt-3 text-gray-600 max-w-xl mx-auto font-p font-medium">
      A gallery of inspiring faces who have contributed to the waste management community.
    </p>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-20">
      <img src="{{ asset('img/Gall1.png') }}" alt="Recycle" class="w-full h-auto rounded-lg hover:scale-105 transition-all duration-300" />
      <img src="{{ asset('img/Gall2.png') }}" alt="Recycle" class="w-full h-auto rounded-lg hover:scale-105 transition-all duration-300" />
      <img src="{{ asset('img/Gall3.png') }}" alt="Recycle" class="w-full h-auto rounded-lg hover:scale-105 transition-all duration-300" />
      <img src="{{ asset('img/Gall4.png') }}" alt="Recycle" class="w-full h-auto rounded-lg hover:scale-105 transition-all duration-300" />
    </div>
  </section>

  {{-- Footer --}}
  <x-footer></x-footer>

</body>
</html>
