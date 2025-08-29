<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    {{-- Nav --}}
    <x-navbar></x-navbar>

    {{-- Banner --}}
    <section class="gap-1 px-8 md:px-1 py-5 items-center" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)" x-show="show"
        x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 translate-y-10"
        x-transition:enter-end="opacity-100 translate-y-0">

        <div class="flex">
            <section class="gap-5 px-35 py-10 items-center">
                <div>
                    <span class="bg-lime-100 text-Hijau px-5 py-2 rounded-full font-poppins font-semibold">
                        About
                    </span>
                    <h1 class="text-6xl font-bold mt-7 mr-50 font-poppins text-Ireng">
                        Save The Earth <span class="text-Hijau">Recycling Trash </span>
                    </h1>
                    <p class="text-gray-600 mt-10 pr-40 font-p font-medium">
                        Recycling trash is not just about managing waste it’s about giving resources a second
                         life, reducing pollution, and protecting our Earth for generations to come
                    </p>
                    <div class="flex justify-center">
                    </div>
            </section>
            <img src="{{ asset('img/bumiabout.png') }}" alt="planet" class="w-115 h-115 pr-30" />
        </div>

        {{-- Trash Indo --}}
        <section class="px-10 md:px-34 mt-10 py-20 grid md:grid-cols-2 gap-10 items-center">
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

        {{-- Education Works --}}
        <section class="px-10 md:px-37 py-30">
            <h3 class="text-4xl font-poppins font-bold text-center mb-20">Education <span
                    class="text-Hijau">Workflow</span></h3>
            <div class="grid md:grid-cols-2 gap-5 items-center">
                <div>
                    <h4 class="text-4xl font-bold font-poppins">Tree Re-<span class="text-Hijau">Cycle</span></h4>
                    <p class="text-gray-600 mb-70 mt-2 mr-30 text-2l font-medium font-p">a waste management method that aims to reduce the amount
                        of waste dumped into the environment by reducing the amount of waste produced</p>
                </div>
                <div class="space-y-10">
                    <div class="p-8 rounded-lg shadow-sm">
                        <h5 class="font-bold font-poppins text-Ireng">1. Reduce</h5>
                        <p class="text-gray-600 text-sm font-p font-medium">Avoid using products that produce a lot of waste, especially
                            single-use products.</p>
                    </div>
                    <div class="p-8 rounded-lg shadow-sm">
                        <h5 class="font-bold font-poppins text-Ireng">2. Reuse</h5>
                        <p class="text-gray-600 text-sm font-p font-medium">Reuse items that can still be used for the same function or
                            other functions.</p>
                    </div>
                    <div class="p-8 rounded-lg shadow-sm">
                        <h5 class="font-bold font-poppins text-Ireng">3. Recycle</h5>
                        <p class="text-gray-600 text-sm font-p font-medium">Recycle waste into new goods or products that are useful and
                            have economic value.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Contact --}}
        <section class="px-10 md:px-20 py-14 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h3 class="text-3xl font-bold">Contact <span class="text-Hijau">Us</span></h3>
                <p class="mt-4"><span class="text-Hijau font-bold">Re-Cyce</span> is a digital platform designed to
                    educate, inspire, and facilitate the public in managing and recycling waste.</p>
                <button class="mt-5 bg-Hijau hover:bg-Hijau text-white px-6 py-2 rounded-lg shadow">See More</button>
            </div>
            <div class="p-6 rounded-lg shadow-sm">
                <div class="flex items-center space-x-3">
                    <span class="text-Hijau text-2xl">📧</span>
                    <h4 class="font-bold">Email</h4>
                </div>
                <p class="text-gray-600 mt-2 text-sm">Get complete information by sending an email to:</p>
                <p class="font-bold mt-2">JagoanDigit@gmail.com</p>
            </div>
        </section>

        {{-- Foot --}}
        <x-footer></x-footer>

</body>

</html>
