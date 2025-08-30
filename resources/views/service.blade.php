<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Re-Cyce</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="font-sans text-gray-800">

    {{-- Navbar --}}
  <x-navbar></x-navbar>

  <!-- Hero Section -->
  <section class="text-center px-6 md:px-20 py-20">
    <span class="bg-lime-100 text-Hijau px-5 py-2 rounded-full font-semibold">Service</span>
    <h2 class="mt-6 text-2xl md:text-5xl font-bold leading-snug font-poppins">
      <span class="text-Hijau">Digital System</span> To Monitor And<br>Manage Your Waste.
    </h2>
    <p class="mt-4 text-gray-600 max-w-2xl mx-auto font-p font-medium">
      Our website provides a complete solution for those of you who care about the environment: 
      recycling waste pick-up services, an eco-friendly product marketplace, and digital education about green living.
    </p>

    <!-- Statistik -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-12 text-Hijau font-bold font-poppins text-2xl md:text-3xl">
      <div>371k+ <p class="text-gray-700 text-sm font-normal">People Contribution</p></div>
      <div>$5.1b+ <p class="text-gray-700 text-sm font-normal">Cumulative Trending</p></div>
      <div>188k <p class="text-gray-700 text-sm font-normal">Successful New Product</p></div>
      <div>1.2% <p class="text-gray-700 text-sm font-normal">Low Interest Rate</p></div>
    </div>
  </section>

  <!-- Workflow Section -->
  <section class="text-center px-6 md:px-20 mt-12">
    <h3 class="text-Hijau font-semibold font-p">Optimize Workflow</h3>
    <h2 class="text-xl md:text-2xl font-bold mt-2 font-poppins">Recycle Today, Save Tomorrow</h2>
    <p class="mt-3 text-gray-600 max-w-xl mx-auto font-p font-medium">
We understand the real needs of our environment, and we come up with specially
 designed recycling solutions — so the earth can grow cleaner, healthier, and more sustainable.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <i class='bx bx-recycle text-5xl text-Hijau'></i>
        <h3 class="font-poppins font-bold text-xl mt-4">Integrated waste management</h3>
        <p class="font-p font-medium text-sm text-gray-600 mt-2">Common recyclables: paper, cardboard, plastic bottles, glass, aluminum cans, and metal.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <i class='bx bx-refresh text-5xl text-Hijau'></i>
        <h3 class="font-poppins font-bold text-xl mt-4">Material Recycling</h3>
        <p class="font-p font-medium text-sm text-gray-600 mt-2">Use jars, containers, or boxes again before sending them to recycling. Upcycle into new products.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <i class='bx bx-cog text-5xl text-Hijau'></i>
        <h3 class="font-poppins font-bold text-xl mt-4">Smart Recycling System</h3>
        <p class="font-p font-medium text-sm text-gray-600 mt-2">Take recyclables to the nearest recycling center or waste bank. Reduce unnecessary packaging.</p>
      </div>
    </div>
  </section>

  <!-- Product Section -->
  <section class="px-6 md:px-20 mt-20 text-center">
    <h3 class="text-Hijau font-semibold mt-8">Product From Recycle</h3>
    <h2 class="text-2xl md:text-3xl font-bold">
      <span class="text-Hijau">Every Waste</span> Deposit Will be Turned Into a New Product
    </h2>
    <p class="mt-3 text-gray-600">We will reprocess every piece of waste you deposit into new products that are useful for the community.</p>
    <div class="grid grid-cols-1 py-20 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-6">
      <!-- Card Produk -->
      <div class="rounded-xl shadow hover:shadow-lg p-4">
        <img src="https://i.ibb.co/2N0mXzY/red-shoe.png" alt="shoe" class="rounded-md w-full">
        <h4 class="mt-3 font-semibold">Nike Red Shoe 77</h4>
        <p class="text-sm text-gray-600">Price Rp 220.000</p>
        <button class="mt-2 bg-Hijau text-white px-4 py-2 rounded-md">Buy Now</button>
      </div>
      <div class="rounded-xl shadow hover:shadow-lg p-4">
        <img src="https://i.ibb.co/zxg7rPQ/black-shoe.png" alt="shoe" class="rounded-md w-full">
        <h4 class="mt-3 font-semibold">Nike Airforce Ultigh</h4>
        <p class="text-sm text-gray-600">Price Rp 250.000</p>
        <button class="mt-2 bg-Hijau text-white px-4 py-2 rounded-md">Buy Now</button>
      </div>
      <div class="rounded-xl shadow hover:shadow-lg p-4">
        <img src="https://i.ibb.co/n3r2B9V/brown-shoe.png" alt="shoe" class="rounded-md w-full">
        <h4 class="mt-3 font-semibold">Nike Kiger 1 Mid</h4>
        <p class="text-sm text-gray-600">Price Rp 990.000</p>
        <button class="mt-2 bg-Hijau text-white px-4 py-2 rounded-md">Buy Now</button>
      </div>
      <div class="rounded-xl shadow hover:shadow-lg p-4">
        <img src="https://i.ibb.co/n3r2B9V/brown-shoe.png" alt="shoe" class="rounded-md w-full">
        <h4 class="mt-3 font-semibold">Nike Kiger 1 Mid</h4>
        <p class="text-sm text-gray-600">Price Rp 990.000</p>
        <button class="mt-2 bg-Hijau text-white px-4 py-2 rounded-md">Buy Now</button>
      </div>
    </div>
    <button class="mt-1 bg-lime-500 text-white px-6 py-2 rounded-lg">See All</button>
  </section>

  <!-- Video Section -->
 <section class="px-6 md:px-20 py-16 text-center">
  <!-- Judul -->
  <h2 class="text-3xl md:text-4xl font-bold font-poppins leading-snug">
    <span class="text-Hijau">Learning recycling</span> is more fun through <br>
    interactive video tutorials.
  </h2>
  <p class="mt-4 text-gray-500 max-w-2xl mx-auto font-p font-medium">
    We provide a variety of complete video tutorials as a practical guide in waste management and recycling.
  </p>

  <!-- Video Cards -->
  <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Card 1 -->
    <div class="bg-gray-100 rounded-xl shadow-sm overflow-hidden">
      <div class="relative">
        <img src="{{ asset('img/illustration features.png') }}" alt="Video 1" class="w-full h-48 object-cover">
        <button class="absolute inset-0 flex items-center justify-center">
          <i class='bx bx-play-circle text-5xl text-white drop-shadow-lg'></i>
        </button>
      </div>
      <div class="flex items-center gap-3 p-4">
        <img src="{{ asset('img/pp1.png') }}" alt="Robbert Jhon" class="w-10 h-10 rounded-full border">
        <div class="text-left">
          <h4 class="font-semibold text-gray-800 font-poppins">Jang Chaerin</h4>
          <p class="text-gray-500 text-sm">How to</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-gray-100 rounded-xl shadow-sm overflow-hidden">
      <div class="relative">
        <img src="img/video2.png" alt="Video 2" class="w-full h-48 object-cover">
        <button class="absolute inset-0 flex items-center justify-center">
          <i class='bx bx-play-circle text-5xl text-white drop-shadow-lg'></i>
        </button>
      </div>
      <div class="flex items-center gap-3 p-4">
        <img src="{{ asset('img/pp1.png') }}" alt="Robbert Jhon" class="w-10 h-10 rounded-full border">
        <div class="text-left">
          <h4 class="font-semibold text-gray-800">Robbert Jhon</h4>
          <p class="text-gray-500 text-sm">Local Fashion Entrepreneur</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-gray-100 rounded-xl shadow-sm overflow-hidden">
      <div class="relative">
        <img src="img/video3.png" alt="Video 3" class="w-full h-48 object-cover">
        <button class="absolute inset-0 flex items-center justify-center">
          <i class='bx bx-play-circle text-5xl text-white drop-shadow-lg'></i>
        </button>
      </div>
      <div class="flex items-center gap-3 p-4">
        <img src="img/user.png" alt="Robbert Jhon" class="w-10 h-10 rounded-full border">
        <div class="text-left">
          <h4 class="font-semibold text-gray-800">Robbert Jhon</h4>
          <p class="text-gray-500 text-sm">Local Fashion Entrepreneur</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Gallery Section -->
  <section class="px-6 md:px-20 mt-20 text-center">
    <h2 class="text-2xl md:text-3xl font-bold font-poppins"><span class="text-Hijau">See how people</span> move together through this gallery.</h2>
    <p class="mt-3 text-gray-600 max-w-xl mx-auto font-p font-me">From local products to wider markets with technology. We help MSMEs manage their online stores, simplify sales, and reach more customers without hassle.</p>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
      <img src="{{ asset('img/Banner.png') }}" alt="Recycle" class="w-full h-auto rounded-lg hover:scale-105 transition-transform duration-300" />
      <img src="{{ asset('img/Banner.png') }}" alt="Recycle" class="w-full h-auto rounded-lg hover:scale-105 transition-transform duration-300" />
      <img src="{{ asset('img/Banner.png') }}" alt="Recycle" class="w-full h-auto rounded-lg hover:scale-105 transition-transform duration-300" />
      <img src="{{ asset('img/Banner.png') }}" alt="Recycle" class="w-full h-auto rounded-lg hover:scale-105 transition-transform duration-300" />
    </div>
  </section>

  {{-- Footer --}}
  <x-footer></x-footer>

</body>
</html>
