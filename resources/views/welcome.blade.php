<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    {{-- Nav --}}
    <x-navbar></x-navbar>

    {{-- Banner --}}
    <section class="gap-1 px-8 md:px-1 py-10 items-center" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)" x-show="show"
        x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 translate-y-10"
        x-transition:enter-end="opacity-100 translate-y-0">

        <div class="flex">
            <section class="gap-5 px-35 py-10 items-center">
                <div>
                    <span class="bg-lime-100 text-Hijau px-5 py-2 rounded-full font-poppins font-semibold">
                        Re-Cyce
                    </span>
                    <h1 class="text-6xl font-bold mt-7 font-poppins text-Ireng">
                        Innovative Solutions <span class="text-Hijau">Cleaner Planet <span
                                class="inline-block border-b-4 border-Hijau rounded h-1 w-25"></span></span>
                    </h1>
                    <p class="text-gray-600 mt-10 pr-40 font-p font-medium">
                        Starting with ourselves, let's implement recycling in our daily
                        lives. By separating organic and inorganic waste,we reduce the
                        volume of waste that ends up in landfills.
                    </p>
                    <button
                        class="mt-10 bg-Hijau text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-800 transition font-poppins">
                        Explore The Earth
                    </button>
                    <div class="flex justify-center">
                    </div>
            </section>
            <img src="{{ asset('img/image 1 (2).png') }}" alt="planet" class="w-150 h-150 pr-20" />
        </div>

        {{-- Building Greener --}}
        <section class="px-10 md:px-34 mt-10 grid md:grid-cols-2 gap-10 items-center">
            <img src="{{ asset('img/rectangle 2.png') }}" alt="Recycle" class="" />
            <div>
                <h2 class="text-4xl font-bold font-poppins text-Ireng">
                    Building a <span class="text-Hijau">Greener Future</span> <br> Together Forever
                </h2>
                <p class="text-gray-600 mt-10 font-medium font-p ">
                    Starting with ourselves, let's implement recycling in our daily lives.
                    By organic and inorganic waste, we reduce the volume of waste piling up in landfills.
                    Then, create green spaces by planting trees or plants around your home.
                    Trees not only provide coolness but also absorb carbon dioxide and produce oxygen.
                    This small step is a big investment in a cleaner, healthier, and more sustainable future for the
                    earth.
                </p>
                <div class="flex space-x-8 mt-6 font-semibold font-p text-Ireng">
                    <div><span class="block text-3xl font-bold">1.245ton</span> Daily trash</div>
                    <div><span class="block text-3xl font-bold">66%</span> Organik</div>
                    <div><span class="block text-3xl font-bold">33%</span> Anorganik</div>
                </div>
            </div>
        </section>

        {{-- How It Works --}}
        <section class="px-10 ml-15 mr-15 md:px-20 mt-20 text-center">
            <h2 class="text-4xl font-bold text-Ireng font-poppins">How It <span class="text-Hijau">Works</span></h2>
            <div class="grid md:grid-cols-3 gap-8 mt-10">
                <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg">
                    <i class='bx bx-store-alt text-5xl text-Hijau'></i>
                    <h3 class="font-semibold text-2xl mb-2 font-p text-Ireng">Know What Can Be Recycled</h3>
                    <p class="text-sm text-gray-600 font-poppins">Common recyclables: paper, cardboard, plastic <br>
                        bottles, glass,
                        aluminum cans, and metal.Prepare different bins: organic, recyclable, and non-recyclable</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg">
                    <i class='bx bx-recycle text-5xl text-Hijau'></i>
                    <h3 class="font-semibold mb-2 text-2xl font-p text-Ireng">Reuse When Possible</h3>
                    <p class="text-sm text-gray-600 font-poppins">Use jars, containers, or boxes again before sending
                        them to recycling.
                        Turn old clothes into cleaning rags or upcycle them into new products.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg">
                    <i class='bx bx-leaf text-5xl text-Hijau'></i>
                    <h3 class="font-semibold mb-2 text-2xl font-p text-Ireng">Reduce and Refuse First</h3>
                    <p class="text-sm text-gray-600 font-poppins">Take your recyclables to the nearest recycling center
                        or waste bank.
                        Reduce unnecessary packaging by choosing refill or bulk products.</p>
                </div>
            </div>
        </section>

        {{-- Fact Selection --}}
        <section class="mt-20 relative">
            <img src="{{ asset('img/Group 21.png') }}" class="w-full h-90 object-cover" alt="Nature" />
            <div class="absolute inset-0 bg-opacity-40 flex items-center justify-center">
                <div class="text-left text-white max-w-2xl">
                    <h2 class="text-3xl ml-90 font-bold font-poppins text-black">Some Fact About Us</h2>
                    <h3 class="text-2xl ml-90 font-semibold font-poppins text-black">Trash Warning</h3>
                    <p class="mt-4 ml-90 font-medium font-p">Starting with ourselves, let's implement recycling in our
                        daily lives.
                        By separating organic and inorganic waste, we reduce the volume of waste piling</p>
                    <p class="mt-4 ml-90 font-medium font-p">Indonesia faces a complex waste problem with increasing
                        volumes of waste
                        every year due to population growth and urbanization, especially food waste and plastic.</p>
                </div>
            </div>
        </section>

        {{-- Purpose --}}
        <section class="px-10 md:px-20 mt-20 grid ml-20 md:grid-cols-2 gap-20 items-center ">
            <div>
                <h2 class="text-2xl font-bold font-poppins">
                    Understanding the Purpose and <span class="text-lime-500">Necessity of Recycling</span>
                </h2>
                <p class="mt-4 text-gray-600 font-p font-medium">
                    Understanding the necessity of recycling means recognizing its role in reducing pollution,
                    conserving resources, and building a sustainable future.
                </p>
                <ul class="mt-6 space-y-3 text-gray-600 font-p font-medium">
                    <li>✅ Separate organic, inorganic, and hazardous waste.</li>
                    <li>✅ Reuse containers (glass bottles, cans, cardboard boxes) for storage..</li>
                    <li>✅ Reduce single-use plastics by bringing cloth bags tumbler, or food container..</li>
                    <li>✅ Create a waste bank to exchange recyclables for points or rewards.</li>
                    <li>✅ Organize clean-up days in rivers, beaches, or parks.</li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('img/illustration features.png') }}" alt="Cleaning" class="rounded-xl shadow-lg" />
            </div>
        </section>

        {{-- Foot --}}
        <x-footer></x-footer>

</body>

</html>
