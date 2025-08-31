<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Re-Cyce</title>

  @vite('resources/css/app.css')

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

  <!-- Navbar -->
  <x-navbar></x-navbar>

  <!-- Hero Section -->
  <section class="text-center py-16 px-6">
    <span class="bg-lime-100 text-Hijau px-4 py-1 rounded-full font-poppins font-semibold">
      Contact
    </span>
    <h1 class="text-4xl md:text-4xl font-bold mt-6 font-poppins">
      <span class="text-Hijau">We Are Ready</span> To Help You, Please Do <br>
      Not Hesitate To Contact Us
    </h1>
    <p class="text-gray-500 mt-6 max-w-2xl mx-auto">
      Contact our team via email, phone, or the form provided. We’ll be happy to respond
      to any questions you may have as quickly as possible.
    </p>
  </section>

  <!-- Help Desk & FAQ -->
  <section class="grid md:grid-cols-2 gap-10 ml-9 px-8 md:px-16">
    <!-- Left Content -->
    <div>
      <h4 class="text-Hijau font-semibold font-poppins">Care Point</h4>
      <h2 class="text-2xl font-bold mt-2 font-poppins">Help Desk</h2>
      <p class="text-gray-500 mt-4 font-p font-medium">
        Help Desk is present as a service center to ensure that every
        problem can be resolved properly.
      </p>
    </div>

    <!-- Right FAQ -->
    <div class="mr-10">
      <div x-data="{ open: 1 }" class="space-y-4">

        <!-- FAQ Item -->
        <div class="border border-Hitam rounded-lg p-4" @click="open = open === 1 ? null : 1">
          <h3 class="font-semibold font-poppins flex justify-between items-center">
            What is recycling?
            <span x-show="open !== 1">+</span>
            <span x-show="open === 1">×</span>
          </h3>
          <p x-show="open === 1" class="mt-2 text-gray-600 text-sm font-p font-medium">
            Recycling is the process of reprocessing used goods or waste so that they can be reused,
            either in the same form or converted into new products.
          </p>
        </div>

        <div class="border border-Hitam rounded-lg p-4" @click="open = open === 2 ? null : 2">
          <h3 class="font-semibold font-poppins flex justify-between items-center">
            Why is recycling important?
            <span x-show="open !== 2">+</span>
            <span x-show="open === 2">×</span>
          </h3>
          <p x-show="open === 2" class="mt-2 text-gray-600 text-sm font-p font-medium">
            - Conserves limited natural raw materials.<br>
            - Reduces air, land, and water pollution.<br>
            - Supports environmental sustainability.<br>
          </p>
        </div>

        <div class="border border-Hitam rounded-lg p-4" @click="open = open === 3 ? null : 3">
          <h3 class="font-semibold font-poppins flex justify-between items-center">
            What are some examples of items that can be recycled?
            <span x-show="open !== 3">+</span>
            <span x-show="open === 3">×</span>
          </h3>
          <p x-show="open === 3" class="mt-2 text-gray-600 text-sm font-p font-medium">
            - Paper (newspapers, cardboard, magazines).<br>
            - Plastic (beverage bottles, certain plastic bags).<br>
            - Metal (aluminum cans, iron).<br>
            - Glass (bottles, glasses).<br>
            - Used electronics (cell phones, laptops, cables).<br>
          </p>
        </div>

        <div class="border border-Hitam rounded-lg p-4" @click="open = open === 4 ? null : 4">
          <h3 class="font-semibold font-poppins flex justify-between items-center">
            What is the difference between recycle, reuse, and reduce?
            <span x-show="open !== 4">+</span>
            <span x-show="open === 4">×</span>
          </h3>
          <p x-show="open === 4" class="mt-2 text-gray-600 text-sm font-p font-medium">
            Reduce: Reducing the use of disposable items to reduce waste generation.<br>
            Reuse: Reusing items that are still usable without changing their shape.<br>
            Recycle: Reprocessing used items into new, useful products.<br>
          </p>
        </div>

        <div class="border border-Hitam rounded-lg p-4" @click="open = open === 5 ? null : 5">
          <h3 class="font-semibold font-poppins flex justify-between items-center">
            What is a simple way to recycle at home?
            <span x-show="open !== 5">+</span>
            <span x-show="open === 5">×</span>
          </h3>
          <p x-show="open === 5" class="mt-2 text-gray-600 text-sm font-p font-medium">
            - Separate organic and inorganic waste.<br>
            - Collect paper, plastic, cans, and glass separately.<br>
            - Reuse plastic bottles as plant pots or containers.<br>
            - Deliver used items to a waste bank or recycling center.<br>
            - Participate in community recycling programs in your neighborhood.<br>
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Banner -->
  <section class="grid md:grid-cols-2 gap-10 items-center px-8 md:px-16 mt-20 ml-7">
    <img src="{{ asset('img/contact.jpg') }}" alt="Recycle Image" class="rounded-xl shadow">
    <div class="mr-30">
      <h2 class="text-3xl font-bold leading-snug font-poppins">
        Waste Can Be Processed Into <span class="text-Hijau">Energy Or Recycled</span> Into New Products.
      </h2>
      <p class="text-gray-500 mt-6 font-p font-medium">
        Let’s sort plastic, glass and metal waste for recycling.
      </p>
      <button class="mt-8 border-2 border-Hijau text-Hijau px-6 py-2 rounded-lg
                     hover:bg-Hijau hover:text-white font-semibold font-poppins">
        More About Us
      </button>
    </div>
  </section>

  <!-- Contact Form -->
  <section class="grid md:grid-cols-2 gap-10 ml-8 px-8 md:px-16 mt-20 items-start">

    <!-- Left Form -->
    <form action="https://formspree.io/f/xpwjdayg"
          method="POST"
          class="px-6 md:px-12 py-12 rounded-2xl grid gap-6 font-space">

      <div class="space-y-4">
        <div class="grid md:grid-cols-2 gap-4">
          <input type="text" name="name" placeholder="Name :" required
                 class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-Hijau outline-none">
          <input type="email" name="email" placeholder="Email :" required
                 class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-Hijau outline-none">
        </div>

        <div class="grid md:grid-cols-2 gap-4">
          <input type="text" name="subject" placeholder="Subject :"
                 class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-Hijau outline-none">
          <input type="text" name="phone" placeholder="No Hp :"
                 class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-Hijau outline-none">
        </div>

        <textarea rows="5" name="message" placeholder="Write your problem here :" required
                  class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-Hijau outline-none"></textarea>

        <button type="submit"
                class="bg-white font-poppins border-2 border-Hijau font-medium text-Hijau px-10 py-3
                       rounded-lg hover:bg-Hijau hover:text-white transition-all duration-300">
          Send
        </button>
      </div>
    </form>

    <!-- Right Contact Info -->
    <div class="space-y-6">
      <h3 class="font-bold text-lg font-poppins">Help Hub</h3>

      <div class="flex items-start gap-3">
        <i class="bx bx-envelope text-2xl text-Hijau"></i>
        <div>
          <p class="font-semibold">Gmail :</p>
          <p class="text-gray-600">hello@growlocal.id</p>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <i class="bx bx-phone text-2xl text-Hijau"></i>
        <div>
          <p class="font-semibold">Contact :</p>
          <p class="text-gray-600">+62 812-3456-7890</p>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <i class="bx bx-map text-2xl text-Hijau"></i>
        <div>
          <p class="font-semibold">Address :</p>
          <p class="text-gray-600">
            Jl. Melati Raya No. 123, RT 05 / RW 08<br>
            Kel. Sukamaju, Kec. Setiabudi<br>
            Jakarta Selatan, DKI Jakarta 12950
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <x-footer></x-footer>

</body>
</html>
