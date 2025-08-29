<div>

    {{-- Nav --}}
    <nav class="bg-white border-Ireng dark:bg-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('img/Group 4 (1).png') }}" class="h-9" alt="Flowbite Logo" />
        <span class=" text-2xl font-bold whitespace-nowrap text-Hijau font-p">Re-Cyce</span>
      </a>
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button"
          class="text-white font-poppins bg-Hijau hover:bg-Hijau rounded-lg text-sm px-4 py-2 text-center font-semibold dark:hover:bg-Ireng md:dark:hover:text-white ">Get
          started</button>
        <button type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-Ireng focus:outline-none focus:ring-2 focus:ring-Ireng"
          aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only font-title">Open Menu</span>
          <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
        <ul
          class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
          <li>
            <a href="welcome"
              class="block py-2 px-3 md:p-0 text-Hijau font-semibold rounded-sm md:bg-transparentmd:text-green-400 md:dark:text-Hijau font-title">Home</a>
          </li>
          <li>
            <a href="{{ url('/about') }}"
              class="block py-2 px-3 md:p-0 text-Ireng rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-Hijau md:dark:hover:text-Hijau font-medium font-title">About</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 md:p-0 text-Ireng rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-Hijau md:dark:hover:text-Hijau dark:text-Ireng font-medium font-title">Services</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 md:p-0 text-Ireng rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-Hijau md:dark:hover:text-Hijau dark:text-Ireng font-medium font-title">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>