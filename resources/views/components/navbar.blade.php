<div x-data="{ scrolled: false, open: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
     class="sticky top-0 z-50 transition-all duration-500"
     :class="scrolled ? 'backdrop-blur-lg bg-white/70 shadow-md' : 'bg-white'">

  <!-- Navbar -->
  <nav class="border-Ireng">
    <div class="flex flex-wrap items-center justify-between mx-auto py-4 px-4 sm:px-6 md:px-10 lg:px-20">

      <!-- Logo -->
      <a href="/" class="flex items-center space-x-3">
        <img src="{{ asset('img/Group 4 (1).png') }}" class="h-9" alt="Logo">
        <span class="text-2xl font-bold whitespace-nowrap text-Hijau font-p">Re-Cyce</span>
      </a>

      <!-- Button Area -->
      <div class="flex md:order-2 space-x-3 md:space-x-4">
        <!-- Login -->
        <a href="{{ url('/admin') }}"
           class="text-Hijau text-lg md:text-xl font-poppins bg-white border-2 border-Hijau rounded-lg px-3 md:px-4 py-2 font-semibold hover:bg-Hijau hover:text-white hover:scale-105 transition duration-300">
          Login
        </a>

        <!-- Mobile menu toggle -->
        <button @click="open = !open"
                type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-600 rounded-lg md:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-Ireng"
                aria-controls="navbar-cta"
                :aria-expanded="open.toString()">
          <span class="sr-only">Open Menu</span>
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

      <!-- Menu -->
      <div id="navbar-cta"
           class="w-full md:flex md:w-auto md:order-1"
           :class="open ? 'block' : 'hidden'"
           x-cloak
           x-transition:enter="transition ease-out duration-300"
           x-transition:enter-start="opacity-0 -translate-y-2"
           x-transition:enter-end="opacity-100 translate-y-0"
           x-transition:leave="transition ease-in duration-200"
           x-transition:leave-start="opacity-100 translate-y-0"
           x-transition:leave-end="opacity-0 -translate-y-2">

        <ul class="flex flex-col md:flex-row md:space-x-8 font-medium p-4 md:p-0 mt-4 md:mt-0 border border-gray-100 rounded-lg bg-gray-50 md:bg-transparent md:border-0">
          <!-- Home -->
          <li>
            <a href="{{ url('welcome') }}"
               class="block py-2 px-3 md:p-0 font-title transition 
                      {{ Request::is('welcome') ? 'text-Hijau font-bold' : 'text-Ireng hover:text-Hijau' }}">
              Home
            </a>
          </li>

          <!-- Services -->
          <li>
            <a href="{{ url('/service') }}"
               class="block py-2 px-3 md:p-0 font-title transition
                      {{ Request::is('service') ? 'text-Hijau font-bold' : 'text-Ireng hover:text-Hijau' }}">
              Services
            </a>
          </li>

          <!-- About -->
          <li>
            <a href="{{ url('/about') }}"
               class="block py-2 px-3 md:p-0 font-title transition
                      {{ Request::is('about') ? 'text-Hijau font-bold' : 'text-Ireng hover:text-Hijau' }}">
              About
            </a>
          </li>

          <!-- Product -->
          <li>
            <a href="{{ url('/product') }}"
               class="block py-2 px-3 md:p-0 font-title transition
                      {{ Request::is('product') ? 'text-Hijau font-bold' : 'text-Ireng hover:text-Hijau' }}">
              Product
            </a>
          </li>

          <!-- Contact -->
          <li>
            <a href="{{ url('/contact') }}"
               class="block py-2 px-3 md:p-0 font-title transition
                      {{ Request::is('contact') ? 'text-Hijau font-bold' : 'text-Ireng hover:text-Hijau' }}">
              Contact
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
