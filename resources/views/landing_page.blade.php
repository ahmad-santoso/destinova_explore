<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Destinova Explore</title>
        <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>

    <body class="h-full bg-gray-100">
        <!-- Header Sec -->
        <header class="bg-white fixed w-full z-50">
            <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
                <a class="block text-teal-600" href="#home">
                    <img src="{{ asset('assets/logo.png') }}" alt="Destinova Explore" class="h-12 w-auto mx-auto mt-2 mb-2">
                </a>

                <div class="flex flex-1 items-center justify-end md:justify-between">
                    <nav aria-label="Global" class="hidden md:block">
                        <ul class="flex items-center gap-2 text-sm">
                            <li>
                                <a class="text-gray-500 transition hover:bg-teal-700 hover:text-white py-2 px-4 rounded" href="#home">Home</a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:bg-teal-700 hover:text-white py-2 px-4 rounded" href="#popular">Popular</a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:bg-teal-700 hover:text-white py-2 px-4 rounded" href="#testimony">Testimony</a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:bg-teal-700 hover:text-white py-2 px-4 rounded" href="#tour-packages">Tour
                                    Packages</a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:bg-teal-700 hover:text-white py-2 px-4 rounded" href="#gallery">Gallery</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="flex items-center gap-4">
                        <div class="sm:flex sm:gap-4">
                            <a class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700"
                                href="{{ route('login') }}">
                                Login
                            </a>

                            <a class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
                                href="{{ route('register') }}">
                                Register
                            </a>
                        </div>

                        <button
                            class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden">
                            <span class="sr-only">Toggle menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Sec -->

        <!-- Banner Sec -->
        <section id="home" class="relative h-screen overflow-hidden">
            <!-- Video Background -->
            <video autoplay muted loop class="absolute inset-0 object-cover w-full h-full">
                <source src="{{ asset('assets/banner.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/50 lg:bg-black/30 lg:from-black/70 lg:to-black/30 lg:bg-gradient-to-r"></div>
        
            <!-- Content -->
            <div class="relative z-10 mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
                <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                    <h1 class="text-3xl font-extrabold sm:text-5xl text-white">
                        Discover The Beauty <strong class="block font-extrabold text-green-400">Like A Second Home</strong>
                    </h1>

                    <p class="mt-4 max-w-lg sm:text-xl/relaxed text-white">
                        Enjoy the tranquility and peace in the great outdoors. Discover the best destinations to escape from
                        the daily routine.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-4 text-center">
                        <a href="#"
                            class="block w-full rounded bg-teal-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-teal-700 focus:outline-none focus:ring active:bg-teal-700 sm:w-auto">
                            Get Started
                        </a>
                        <a href="#"
                            class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-teal-600 shadow hover:text-green-700 focus:outline-none focus:ring active:text-green-500 sm:w-auto">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Baner Sec -->

        <!-- Popular Destination   -->
        <section id="popular">
            <div class="mt-8 ml-5">
                <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Popular Categories</h2>
                <h1 class="ml-5 font-normal text-center text-gray-700 mt-2">Explore our popular categories that people love
                </h1>
                <div class="grid grid-cols-3 mt-8 mr-6 gap-4">
                    <!-- Populer 1 -->
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                        <img alt="Maldives Beaches" src="/assets/image (3).jpg" class="h-56 w-full object-cover" />
                        <div class="bg-white p-4 sm:p-6">
                            <div class="flex items-center space-x-2 mb-4 ml-0.5">
                                <i class="fas fa-map-marker-alt text-red-500"></i>
                                <span class="text-xl font-bold">Maldives Beaches</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-star text-yellow-500"></i>
                                <span>(4,8k)</span>
                            </div>
                        </div>
                    </article>

                    <!-- Populer 2 -->
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                        <img alt="Pink Beaches" src="/assets/image (2).jpg" class="h-56 w-full object-cover" />
                        <div class="bg-white p-4 sm:p-6">
                            <div class="flex items-center space-x-2 mb-4 ml-0.5">
                                <i class="fas fa-map-marker-alt text-red-500"></i>
                                <span class="text-xl font-bold">Pink Beaches, NTT</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-star text-yellow-500"></i>
                                <span>(4,7k)</span>
                            </div>
                        </div>
                    </article>

                    <!-- Populer 3 -->
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                        <img alt="Kuta Bali" src="/assets/image (4).jpg" class="h-56 w-full object-cover" />
                        <div class="bg-white p-4 sm:p-6">
                            <div class="flex items-center space-x-2 mb-4 ml-0.5">
                                <i class="fas fa-map-marker-alt text-red-500"></i>
                                <span class="text-xl font-bold">Kuta Bali, Indonesia</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-star text-yellow-500"></i>
                                <span>(4,9k)</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- end popular destination -->

        <!-- Testimoni -->
        <section id="testimony" class="bg-white mt-8">
            <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
                <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    Testimonials From Our Delighted Travelers
                </h2>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                    <!-- testi card 1 -->
                    <div class="mb-8 sm:break-inside-avoid">
                        <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                            <div class="flex items-center gap-4">
                                <img alt="Sarah's profile picture"
                                    src="https://images.pexels.com/photos/1468379/pexels-photo-1468379.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    class="w-14 h-14 rounded-full object-cover" />
                                <div>
                                    <p class="mt-0.5 text-lg font-medium text-gray-900">Sarah Clarissa</p>
                                    <div class="flex justify-center gap-0.5 text-green-500">
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-700">
                                My trip to Bali with this travel agency was nothing short of amazing! The itinerary was
                                perfectly planned,
                                allowing us to experience both the vibrant culture and the serene beauty of the island.
                                Highly recommended!
                            </p>
                        </blockquote>
                    </div>

                    <!-- testi card 2 -->
                    <div class="mb-8 sm:break-inside-avoid">
                        <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                            <div class="flex items-center gap-4">
                                <img alt="Jessica profile picture"
                                    src="https://images.pexels.com/photos/247322/pexels-photo-247322.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    class="w-14 h-14 rounded-full object-cover" />
                                <div>
                                    <p class="mt-0.5 text-lg font-medium text-gray-900">Jessica Katteri</p>
                                    <div class="flex justify-center gap-0.5 text-green-500">
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-700">
                                My experience with this travel agency was phenomenal! From booking to accommodation,
                                everything was seamless and enjoyable. I highly recommend their services for your next
                                adventure.
                            </p>
                        </blockquote>
                    </div>

                    <!-- testi card 3 -->
                    <div class="mb-8 sm:break-inside-avoid">
                        <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                            <div class="flex items-center gap-4">
                                <img alt="James Gerald profile picture"
                                    src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    class="w-14 h-14 rounded-full object-cover" />
                                <div>
                                    <p class="mt-0.5 text-lg font-medium text-gray-900">James Gerald</p>
                                    <div class="flex justify-center gap-0.5 text-green-500">
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-700">
                                I cannot praise this travel agency enough for their exceptional service. Every step of the
                                way, from the initial booking to the final accommodation arrangements, was handled with
                                utmost professionalism and care.
                            </p>
                        </blockquote>
                    </div>

                    <!-- testi card 4 -->
                    <div class="mb-8 sm:break-inside-avoid">
                        <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                            <div class="flex items-center gap-4">
                                <img alt="David Fario profile picture"
                                    src="https://images.pexels.com/photos/775358/pexels-photo-775358.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    class="w-14 h-14 rounded-full object-cover" />
                                <div>
                                    <p class="mt-0.5 text-lg font-medium text-gray-900">David Fario</p>
                                    <div class="flex justify-center gap-0.5 text-green-500">
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-700">
                                My recent experience with this travel agency exceeded all expectations. Their attention to
                                detail and commitment to customer satisfaction made every aspect of my trip truly
                                unforgettable. Whether you're planning a solo excursion or a family getaway, I cannot
                                recommend their services highly enough. Trust me; you won't be disappointed!
                            </p>
                        </blockquote>
                    </div>

                    <!-- testi card 5 -->
                    <div class="mb-8 sm:break-inside-avoid">
                        <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                            <div class="flex items-center gap-4">
                                <img alt="Andreas Packuino's profile picture"
                                    src="https://images.pexels.com/photos/846741/pexels-photo-846741.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    class="w-14 h-14 rounded-full object-cover" />
                                <div>
                                    <p class="mt-0.5 text-lg font-medium text-gray-900">Andre Lora</p>
                                    <div class="flex justify-center gap-0.5 text-green-500">
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-700">
                                From the moment I booked my trip with this agency, I knew I was in good hands. Their
                                knowledgeable staff and seamless booking process set the stage for an incredible adventure.
                                If you're looking for a travel experience that's both stress-free and enjoyable, I urge you
                                to give this agency a try. You won't regret it!
                            </p>
                        </blockquote>
                    </div>

                    <!-- testi card 6 -->
                    <div class="mb-8 sm:break-inside-avoid">
                        <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                            <div class="flex items-center gap-4">
                                <img alt="Mario Gani profile picture"
                                    src="https://images.pexels.com/photos/1036627/pexels-photo-1036627.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    class="w-14 h-14 rounded-full object-cover" />
                                <div>
                                    <p class="mt-0.5 text-lg font-medium text-gray-900">Mario Gani</p>
                                    <div class="flex justify-center gap-0.5 text-green-500">
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                        <i class="fas fa-star h-5 w-5"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-700">
                                I recently had the pleasure of traveling with this agency, and I must say, it was a truly
                                phenomenal experience. From start to finish, everything was meticulously planned, allowing
                                me to relax and enjoy every moment of my trip. If you're in need of travel assistance that
                                goes above and beyond, look no further than this exceptional agency. Your next adventure
                                awaits!
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimoni -->

        <!-- Tour Package -->
        <section id="tour-packages" class="mt-8 mr-6">
            <h3 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl mt-4 mb-4">Tour Packages
            </h3>
            <div class="grid grid-cols-3 gap-4 ml-6 mr-6">

                <!-- Tour Package 1 -->
                <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                    <img alt="Verdon Canyon" src="/assets/image (7).jpg" class="h-56 w-full object-cover" />
                    <div class="bg-white p-4 sm:p-6">
                        <div class="mt-2">
                            <dl>
                                <div>
                                    <dt class="sr-only">Price</dt>
                                    <dd class="text-sm text-gray-500">$230,000</dd>
                                </div>
                                <div>
                                    <dt class="sr-only">Address</dt>
                                    <dd class="font-medium">Lake Verdon Canyon, France</dd>
                                </div>
                            </dl>
                            <div class="mt-6 flex items-center gap-8 text-xs justify-start">
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                    <!-- Icon Parking -->
                                    <i class="fas fa-parking size-4 text-indigo-700"></i>
                                    <div class="mt-1.5 sm:mt-0">
                                        <p class="text-gray-500">Parking</p>
                                        <p class="font-medium">2 Spaces</p>
                                    </div>
                                </div>
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                    <!-- Icon Bathroom -->
                                    <i class="fas fa-bath size-4 text-indigo-700"></i>
                                    <div class="mt-1.5 sm:mt-0">
                                        <p class="text-gray-500">Bathroom</p>
                                        <p class="font-medium">2 Rooms</p>
                                    </div>
                                </div>
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                    <!-- Icon Bedroom -->
                                    <i class="fas fa-bed size-4 text-indigo-700"></i>
                                    <div class="mt-1.5 sm:mt-0">
                                        <p class="text-gray-500">Bedroom</p>
                                        <p class="font-medium">4 Rooms</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Tour Package 2 -->
                <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                    <img alt="Suluban Beaches" src="/assets/image (1).jpg" class="h-56 w-full object-cover" />
                    <div class="bg-white p-4 sm:p-6">
                        <div class="mt-2">
                            <dl>
                                <div>
                                    <dt class="sr-only">Price</dt>
                                    <dd class="text-sm text-gray-500">$210,000</dd>
                                </div>
                                <div>
                                    <dt class="sr-only">Address</dt>
                                    <dd class="font-medium">Badung, Indonesia</dd>
                                </div>
                            </dl>
                            <div class="mt-6 flex items-center gap-8 text-xs justify-start">
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                    <!-- Icon Parking -->
                                    <i class="fas fa-parking size-4 text-indigo-700"></i>
                                    <div class="mt-1.5 sm:mt-0">
                                        <p class="text-gray-500">Parking</p>
                                        <p class="font-medium">2 Spaces</p>
                                    </div>
                                </div>
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                    <!-- Icon Bathroom -->
                                    <i class="fas fa-bath size-4 text-indigo-700"></i>
                                    <div class="mt-1.5 sm:mt-0">
                                        <p class="text-gray-500">Bathroom</p>
                                        <p class="font-medium">2 Rooms</p>
                                    </div>
                                </div>
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                    <!-- Icon Bedroom -->
                                    <i class="fas fa-bed size-4 text-indigo-700"></i>
                                    <div class="mt-1.5 sm:mt-0">
                                        <p class="text-gray-500">Bedroom</p>
                                        <p class="font-medium">3 Rooms</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Tour Package 3 -->
                <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                    <img alt="Sunnmore Alps Montain" src="/assets/image (6).jpg" class="h-56 w-full object-cover" />
                    <div class="bg-white p-4 sm:p-6">
                        <div class="mt-2">
                            <dl>
                                <div>
                                    <dt class="sr-only">Price</dt>
                                    <dd class="text-sm text-gray-500">$240,000</dd>
                                </div>
                                <div>
                                    <dt class="sr-only">Address</dt>
                                    <dd class="font-medium">Sunnmore Alps Montain, Norway</dd>
                                </div>
                            </dl>
                            <div class="mt-6 flex items-center gap-8 text-xs justify-start">
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                    <!-- Icon Parking -->
                                    <i class="fas fa-parking size-4 text-indigo-700"></i>
                                    <div class="mt-1.5 sm:mt-0">
                                        <p class="text-gray-500">Parking</p>
                                        <p class="font-medium">1 Spaces</p>
                                    </div>
                                </div>
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                    <!-- Icon Bathroom -->
                                    <i class="fas fa-bath size-4 text-indigo-700"></i>
                                    <div class="mt-1.5 sm:mt-0">
                                        <p class="text-gray-500">Bathroom</p>
                                        <p class="font-medium">2 Rooms</p>
                                    </div>
                                </div>
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                    <!-- Icon Bedroom -->
                                    <i class="fas fa-bed size-4 text-indigo-700"></i>
                                    <div class="mt-1.5 sm:mt-0">
                                        <p class="text-gray-500">Bedroom</p>
                                        <p class="font-medium">2 Rooms</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <!-- End Tour Package -->

        <!-- Gallery -->
        <section id="gallery" class="bg-white mt-8">
            <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
                <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    Gallery
                </h2>
                <div class="container mx-auto p-4 ">
                    <div class="container mx-auto p-4">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                            <div class="col-span-1 lg:col-span-2 row-span-2">
                                <img src="https://picsum.photos/1000/600?random=1" alt="Destination 1"
                                    class="w-full h-auto object-cover rounded-lg">
                            </div>
                            <div class="col-span-1">
                                <img src="https://picsum.photos/500/300?random=2" alt="Destination 2"
                                    class="w-full h-auto object-cover rounded-lg">
                            </div>
                            <div class="col-span-1">
                                <img src="https://picsum.photos/500/300?random=3" alt="Destination 3"
                                    class="w-full h-auto object-cover rounded-lg">
                            </div>
                            <div class="col-span-1">
                                <img src="https://picsum.photos/500/300?random=4" alt="Destination 4"
                                    class="w-full h-auto object-cover rounded-lg">
                            </div>
                            <div class="col-span-1">
                                <img src="https://picsum.photos/500/300?random=5" alt="Destination 5"
                                    class="w-full h-auto object-cover rounded-lg">
                            </div>
                            <div class="col-span-1">
                                <img src="https://picsum.photos/500/300?random=6" alt="Destination 6"
                                    class="w-full h-auto object-cover rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Gallery -->

        <!-- Footer -->
        <footer class="bg-gradient-to-r from-green-500 to-green-700 bg-opacity-50 text-white">
            <div class="mx-auto max-w-screen-xl space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                    <div>
                        <h1 class="text-4xl">Destinova Eksplore</h1>
                        <p class="mt-4 max-w-xs text-white">
                            Welcome to Destinova Eksplore! Discover amazing destinations and plan your next adventure with
                            us.
                        </p>
                        <ul class="mt-8 flex gap-6">
                            <li>
                                <a href="#" rel="noreferrer" target="_blank"
                                    class="text-white transition hover:opacity-75">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    </svg>
                                    <span class="sr-only">Facebook</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4">
                        <div>
                            <p class="font-medium text-gray-900">Services</p>
                            <ul class="mt-6 space-y-4 text-sm">
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Flight Booking</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Hotel
                                        Reservations</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Car Rentals</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Vacation Packages</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Travel Insurance</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Destinations</p>
                            <ul class="mt-6 space-y-4 text-sm">
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Europe</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Asia</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">North America</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">South America</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Africa</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Helpful Links</p>
                            <ul class="mt-6 space-y-4 text-sm">
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">FAQs</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Terms and
                                        Conditions</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Legal</p>
                            <ul class="mt-6 space-y-4 text-sm">
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Accessibility</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Returns Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Refund Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white transition hover:opacity-75">Hiring Statistics</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="text-xs text-white">&copy; 2024. Destinova Eksplore. All rights reserved.</p>
            </div>
        </footer>
        <!-- end Footer -->

    </body>

</html>
