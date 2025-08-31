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

<body 
  class="overflow-x-hidden"
  x-data="{ show: false }"
  x-init="setTimeout(() => show = true, 300)"
  x-show="show"
  x-transition:enter="transition ease-out duration-1000"
  x-transition:enter-start="opacity-0 translate-y-10"
  x-transition:enter-end="opacity-100 translate-y-0"
>
  {{-- Navbar --}}
  <x-navbar></x-navbar>

  {{-- Banner --}}
  <section class="px-6 md:px-12 lg:px-20 py-10">
    <div class="flex flex-col md:flex-row items-center gap-10">
      
      {{-- Text --}}
      <div class="flex-1">
        <span class="bg-lime-100 text-Hijau px-5 py-2 rounded-full font-poppins font-semibold">
          Re-Cyce
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mt-7 font-poppins text-Ireng leading-tight">
          Innovative Solutions 
          <span class="text-Hijau">
            Cleaner Planet
            <span class="inline-block border-b-4 border-Hijau rounded h-1 w-24"></span>
          </span>
        </h1>
        <p class="text-gray-600 mt-6 md:mt-10 md:pr-20 font-p font-medium text-base md:text-lg">
          Starting with ourselves, let's implement recycling in our daily lives. By separating organic 
          and inorganic waste, we reduce the volume of waste that ends up in landfills.
        </p>
        <button
          class="mt-8 md:mt-10 bg-white border-2 border-Hijau text-Hijau font-semibold px-6 py-3 rounded-lg shadow 
                 hover:bg-Hijau hover:text-white hover:scale-105 transition-all duration-300">
          Explore The Earth
        </button>
      </div>

      {{-- Image --}}
      <div class="flex-1 flex justify-center">
        <img src="{{ asset('img/Bumi.png') }}" alt="planet" class="max-w-xs md:max-w-md lg:max-w-lg h-auto" />
      </div>
    </div>
  </section>

  {{-- Building Greener --}}
  <section class="px-6 md:px-12 lg:px-20 mt-16 grid md:grid-cols-2 gap-10 items-center">
    <img src="{{ asset('img/Banner.png') }}" alt="Recycle" class="w-full h-auto rounded-lg" />
    
    <div>
      <h2 class="text-3xl md:text-4xl font-bold font-poppins text-Ireng leading-snug">
        Building a <span class="text-Hijau">Greener Future</span> <br> Together Forever
      </h2>
      <p class="text-gray-600 mt-6 md:mt-10 font-medium font-p text-base md:text-lg">
        Starting with ourselves, let's implement recycling in our daily lives. By organic and inorganic 
        waste, we reduce the volume of waste piling up in landfills. Then, create green spaces by 
        planting trees or plants around your home.
      </p>
      <div class="flex flex-wrap gap-6 md:space-x-8 mt-6 font-semibold font-p text-Ireng">
        <div>
          <span class="block text-2xl md:text-3xl font-bold">1.245tn</span>
          Daily trash
        </div>
        <div>
          <span class="block text-2xl md:text-3xl font-bold">66%</span>
          Organik
        </div>
        <div>
          <span class="block text-2xl md:text-3xl font-bold">33%</span>
          Anorganik
        </div>
      </div>
    </div>
  </section>

  {{-- How It Works --}}
  <section class="px-6 md:px-12 lg:px-20 mt-20 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-Ireng font-poppins">
      How It <span class="text-Hijau">Works</span>
    </h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 mt-10">
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <i class='bx bx-store-alt text-5xl text-Hijau'></i>
        <h3 class="font-semibold text-xl md:text-2xl mb-2 font-p text-Ireng">Know What Can Be Recycled</h3>
        <p class="text-sm text-gray-600 font-poppins">
          Common recyclables: paper, cardboard, plastic bottles, glass, aluminum cans, and metal.
        </p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <i class='bx bx-recycle text-5xl text-Hijau'></i>
        <h3 class="font-semibold text-xl md:text-2xl mb-2 font-p text-Ireng">Reuse When Possible</h3>
        <p class="text-sm text-gray-600 font-poppins">
          Use jars, containers, or boxes again before sending them to recycling.
        </p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <i class='bx bx-leaf text-5xl text-Hijau'></i>
        <h3 class="font-semibold text-xl md:text-2xl mb-2 font-p text-Ireng">Reduce and Refuse First</h3>
        <p class="text-sm text-gray-600 font-poppins">
          Take your recyclables to the nearest recycling center or waste bank.
        </p>
      </div>
    </div>
  </section>

  {{-- Fact Section --}}
  <section class="ml-20 mt-20 flex flex-col md:flex-row">
    <img src="{{ asset('img/Rectangle 5.png') }}" alt="Nature"
         class="rounded w-full md:w-1/2 h-auto object-cover" />
    
    <div class="bg-gray-100 w-full flex items-center">
      <div class="text-left text-Ireng p-6 md:p-10">
        <h2 class="text-2xl md:text-3xl font-bold font-poppins text-black">Some Fact About Us</h2>
        <h3 class="text-xl md:text-2xl font-semibold font-poppins text-black mt-2">Trash Warning</h3>
        <p class="mt-4 font-medium font-p text-sm md:text-base">
          Starting with ourselves, let's implement recycling in our daily lives.
          By separating organic and inorganic waste, we reduce the volume of waste piling
        </p>
        <p class="mt-4 font-medium font-p text-sm md:text-base">
          Indonesia faces a complex waste problem with increasing volumes of waste every year 
          due to population growth and urbanization, especially food waste and plastic.
        </p>
      </div>
    </div>
  </section>

  {{-- Purpose --}}
  <section class="px-6 md:px-12 lg:px-20 mt-20 grid md:grid-cols-2 gap-10 md:gap-20 items-center">
    <div>
      <h2 class="text-2xl md:text-3xl font-bold font-poppins">
        Understanding the Purpose and <span class="text-Hijau">Necessity of Recycling</span>
      </h2>
      <p class="mt-4 text-gray-600 font-p font-medium text-sm md:text-base">
        Understanding the necessity of recycling means recognizing its role...
      </p>
      <ul class="mt-6 space-y-3 text-gray-600 font-p font-medium text-sm md:text-base">
        <li><i class='bx bx-check text-2xl md:text-3xl text-Hijau'></i> Separate organic, inorganic, and hazardous waste.</li>
        <li><i class='bx bx-check text-2xl md:text-3xl text-Hijau'></i> Reuse containers for storage.</li>
        <li><i class='bx bx-check text-2xl md:text-3xl text-Hijau'></i> Reduce single-use plastics by bringing cloth bags.</li>
        <li><i class='bx bx-check text-2xl md:text-3xl text-Hijau'></i> Create a waste bank for rewards.</li>
        <li><i class='bx bx-check text-2xl md:text-3xl text-Hijau'></i> Organize clean-up days in rivers or parks.</li>
      </ul>
    </div>

    <div class="flex justify-center">
      <img src="{{ asset('img/Purpose.png') }}" alt="Cleaning" 
           class="rounded-xl shadow-lg w-full md:w-4/5 h-auto" />
    </div>
  </section>

  {{-- Footer --}}
  <x-footer></x-footer>
</body>
</html>
