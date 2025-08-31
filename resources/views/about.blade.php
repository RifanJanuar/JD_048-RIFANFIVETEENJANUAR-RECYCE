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

<body class="overflow-x-hidden"
  x-data="{ show: false }"
  x-init="setTimeout(() => show = true, 300)"
  x-show="show"
  x-transition:enter="transition ease-out duration-1000"
  x-transition:enter-start="opacity-0 translate-y-10"
  x-transition:enter-end="opacity-100 translate-y-0">

  <!-- Navbar -->
  <x-navbar></x-navbar>

  <!-- Banner -->
  <section class="px-6 md:px-20 py-10 items-center">
    <div class="flex flex-col md:flex-row items-center gap-10">
      <div class="md:w-1/2 text-center md:text-left">
        <span class="bg-lime-100 text-Hijau px-5 py-2 rounded-full font-poppins font-semibold">
          About
        </span>
        <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mt-6 font-poppins text-Ireng leading-snug">
          Save The Earth <span class="text-Hijau">Recycling Trash</span>
        </h1>
        <p class="text-gray-600 mt-6 md:mt-10 font-p font-medium text-sm md:text-base">
          Recycling trash is not just about managing waste — it’s about giving resources a
          second life, reducing pollution, and protecting our Earth for generations to come.
        </p>
      </div>
      <div class="md:w-1/2 flex justify-center">
        <img src="{{ asset('img/bumiabout.png') }}" alt="planet"
          class="max-w-xs md:max-w-md lg:max-w-lg h-auto">
      </div>
    </div>
  </section>

  <!-- Trash Indo -->
  <section class="px-6 md:px-20 mt-10 py-10 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
    <img src="{{ asset('img/rectangle 2.png') }}" alt="Recycle" class="rounded-lg">
    <div>
      <h2 class="text-2xl md:text-4xl font-bold font-poppins text-Ireng text-center md:text-left leading-snug">
        Building a <span class="text-Hijau">Greener Future</span>
        <br class="hidden md:block">Together Forever
      </h2>
      <p class="text-gray-600 mt-6 md:mt-10 font-medium font-p text-sm md:text-base text-center md:text-left">
        Garbage isn't just something we throw away every day, but rather a significant responsibility
        that we must manage properly. If left to accumulate without proper processing, it can pollute
        the air, soil, and atmosphere. However, when managed through reduction, reuse, and recycling,
        waste can become a new resource that benefits human life and the environment.
      </p>
    </div>
  </section>

  <!-- Education Works -->
  <section class="px-6 md:px-24 py-16">
    <h3 class="text-2xl md:text-4xl font-poppins font-bold text-center mb-12 text-Ireng">
      Education <span class="text-Hijau">Workflow</span>
    </h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 py-10">
      <div class="text-center md:text-left">
        <h4 class="text-2xl md:text-4xl font-bold text-Ireng font-poppins">
          Tree Re-<span class="text-Hijau">Cycle</span>
        </h4>
        <p class="text-gray-600 mt-3 text-sm md:text-base font-medium font-p">
          A waste management method that aims to reduce the amount of waste dumped into
          the environment by reducing the amount of waste produced.
        </p>
      </div>
      <div class="space-y-6">
        <div class="p-6 md:p-8 rounded-lg shadow-sm bg-gray-50">
          <h5 class="font-bold font-poppins text-Ireng">1. Reduce</h5>
          <p class="text-gray-600 text-sm md:text-base font-p font-medium">
            Avoid using products that produce a lot of waste, especially single-use products.
          </p>
        </div>
        <div class="p-6 md:p-8 rounded-lg shadow-sm bg-gray-50">
          <h5 class="font-bold font-poppins text-Ireng">2. Reuse</h5>
          <p class="text-gray-600 text-sm md:text-base font-p font-medium">
            Reuse items that can still be used for the same function or other functions.
          </p>
        </div>
        <div class="p-6 md:p-8 rounded-lg shadow-sm bg-gray-50">
          <h5 class="font-bold font-poppins text-Ireng">3. Recycle</h5>
          <p class="text-gray-600 text-sm md:text-base font-p font-medium">
            Recycle waste into new goods or products that are useful and have economic value.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Map -->
  <section class="grid md:grid-cols-2 gap-10 ml-9 px-8 md:px-16">
    <div>
      <h4 class="text-Hijau font-semibold font-poppins">Location</h4>
      <h2 class="text-2xl font-bold mt-2 text-Ireng font-poppins">Location About Recycle House</h2>
    </div>
    <div class="mr-10">
      <div x-data="{ open: 1 }" class="space-y-4">
        <div class="border border-Ireng rounded-lg p-4" @click="open = open === 1 ? null : 1">
          <h3 class="font-semibold text-Ireng font-poppins flex justify-between items-center">
            Bank Sampah Banyuwangi
            <span x-show="open !== 1">+</span>
            <span x-show="open === 1">×</span>
          </h3>
          <p x-show="open === 1" class="mt-2 text-gray-600 text-sm font-p font-medium">
            Jl. Jaksa Agung Suprapto, Bank Sampah
          </p>
        </div>
        <div class="border border-Ireng rounded-lg p-4" @click="open = open === 2 ? null : 2">
          <h3 class="font-semibold text-Ireng font-poppins flex justify-between items-center">
            Depo Sampah Sobo
            <span x-show="open !== 2">+</span>
            <span x-show="open === 2">×</span>
          </h3>
          <p x-show="open === 2" class="mt-2 text-gray-600 text-sm font-p font-medium">
            Jl. Ikan Koi No 25, Jasa Pembuangan Sampah
          </p>
        </div>
        <div class="border border-Ireng rounded-lg p-4" @click="open = open === 3 ? null : 3">
          <h3 class="font-semibold text-Ireng font-poppins flex justify-between items-center">
            Omah Olah Sampah
            <span x-show="open !== 3">+</span>
            <span x-show="open === 3">×</span>
          </h3>
          <p x-show="open === 3" class="mt-2 text-gray-600 text-sm font-p font-medium">
            Jl. Brawijaya, Pusat Daur Ulang
          </p>
        </div>
        <div class="border border-Ireng rounded-lg p-4" @click="open = open === 4 ? null : 4">
          <h3 class="font-semibold text-Ireng font-poppins flex justify-between items-center">
            Pengolahan Sampah Pandanwangi
            <span x-show="open !== 4">+</span>
            <span x-show="open === 4">×</span>
          </h3>
          <p x-show="open === 4" class="mt-2 text-gray-600 text-sm font-p font-medium">
            Jl. Raya Sukojati, Jasa Pembuangan Sampah
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="px-6 md:px-20 py-14 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
    <div class="text-center md:text-left">
      <h3 class="text-2xl md:text-3xl font-poppins text-Ireng font-bold">
        Contact <span class="text-Hijau">Us</span>
      </h3>
      <p class="mt-4 text-sm md:text-base">
        Re-Cyce is a digital platform designed to educate, inspire, and facilitate
        the public in managing and recycling waste.
      </p>
      <button
        class="mt-5 bg-Hijau text-white font-poppins px-6 py-2 rounded-lg shadow hover:bg-white hover:text-Hijau hover:border-2 border-Hijau hover:scale-105 transition duration-300">
        See More
      </button>
    </div>
    <div class="p-6 rounded-lg shadow-sm bg-gray-50 text-center md:text-left">
      <div class="flex items-center justify-center md:justify-start gap-2">
        <i class='bx bx-envelope text-2xl text-Hijau'></i>
        <h4 class="font-bold text-Ireng font-poppins">Email</h4>
      </div>
      <p class="text-gray-600 mt-2 text-sm font-p font-medium">
        Get complete information by sending an email to:
      </p>
      <p class="font-bold font-poppins text-Ireng mt-2 break-all">
        JagoanDigit@gmail.com
      </p>
    </div>
  </section>

  <!-- Footer -->
  <x-footer></x-footer>

</body>

</html>
