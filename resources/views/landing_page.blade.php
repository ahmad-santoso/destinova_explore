<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Destinova Explore</title>
</head>
<body class="h-full">  
    <!-- Header Sec -->
    <header class="bg-white">
        <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
          <a class="block text-teal-600" href="#">
            <a>Destinova Explore</a>
            <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
                fill="currentColor"
              />
            </svg>
          </a>
      
          <div class="flex flex-1 items-center justify-end md:justify-between">
            <nav aria-label="Global" class="hidden md:block">
              <ul class="flex items-center gap-6 text-sm">
                <li>
                  <a class="text-gray-500 transition hover:text-gray-500/75" href="#">Home</a>
                </li>
      
                <li>
                  <a class="text-gray-500 transition hover:text-gray-500/75" href="#">Popular</a>
                </li>
      
                <li>
                  <a class="text-gray-500 transition hover:text-gray-500/75" href="#">Testimony</a>
                </li>
      
                <li>
                  <a class="text-gray-500 transition hover:text-gray-500/75" href="#">Tour Packages</a>
                </li>
      
                <li>
                  <a class="text-gray-500 transition hover:text-gray-500/75" href="#">Gallery</a>
                </li>
              </ul>
            </nav>
      
            <div class="flex items-center gap-4">
              <div class="sm:flex sm:gap-4">
                <a
                  class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700"
                  href="{{ route('login') }}"
                >
                  Login
                </a>
      
                <a
                  class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
                  href="{{ route('register') }}"
                >
                  Register
                </a>
              </div>
      
              <button
                class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
              >
                <span class="sr-only">Toggle menu</span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </button>
            </div>
          </div>
        </div>
    </header>
    <!-- End Header Sec -->
    
    <!-- Banner Sec -->
    <section class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/image (1).jpg') }}');">
      <div class="absolute inset-0 bg-black/50 lg:bg-black/30 lg:from-black/70 lg:to-black/30 lg:bg-gradient-to-r"></div>
        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold sm:text-5xl text-white">
                    Discover The Beauty <strong class="block font-extrabold text-green-400">Like A Second Home</strong>
                </h1>

                <p class="mt-4 max-w-lg sm:text-xl/relaxed text-white">
                    Enjoy the tranquility and peace in the great outdoors. Discover the best destinations to escape from the daily routine.
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#"
                        class="block w-full rounded bg-green-400 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                            Get Started
                    </a>
                    <a href="#"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-gre shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Baner Sec -->

    <!-- Popular Destination   -->
    <div class="mt-8 ml-5">
      <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Popular Categories</h2>
      <h1 class="ml-5 font-normal text-center text-gray-700 mt-2">Explore our popular categories that people love</h1>
      <div class="grid grid-cols-3 mt-8 mr-6 gap-4">
        <!-- Populer 1 -->
        <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
          <img
            alt="Maldives Beaches"
            src="/assets/image (3).jpg"
            class="h-56 w-full object-cover"
          />
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
          <img
            alt="Pink Beaches"
            src="/assets/image (2).jpg"
            class="h-56 w-full object-cover"
          />
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
          <img
            alt="Kuta Bali"
            src="/assets/image (4).jpg"
            class="h-56 w-full object-cover"
          />
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
    <!-- end popular destination -->
    
    <!-- Testimoni -->
    <section class="bg-white mt-8">
      <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
          Testimonials From Our Delighted Travelers
        </h2>

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
          <!-- testi card 1 -->
          <div class="mb-8 sm:break-inside-avoid">
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
              <div class="flex items-center gap-4">
                  <img
                      alt="Sarah's profile picture"
                      src="https://images.pexels.com/photos/1468379/pexels-photo-1468379.jpeg?auto=compress&cs=tinysrgb&w=600"
                      class="w-14 h-14 rounded-full object-cover"
                  />
                  <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Sarah Clarissa</p>
                  </div>
              </div>
              <p class="mt-4 text-gray-700">
                  My trip to Bali with this travel agency was nothing short of amazing! The itinerary was perfectly planned,
                  allowing us to experience both the vibrant culture and the serene beauty of the island. Highly recommended!
              </p>
            </blockquote>
          </div>

          <!-- testi card 2 -->
          <div class="mb-8 sm:break-inside-avoid">
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
              <div class="flex items-center gap-4">
                  <img
                      alt="Jessica profile picture"
                      src="https://images.pexels.com/photos/247322/pexels-photo-247322.jpeg?auto=compress&cs=tinysrgb&w=600"
                      class="w-14 h-14 rounded-full object-cover"
                  />
                  <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Jessica Katterine</p>
                  </div>
              </div>
              <p class="mt-4 text-gray-700">
                  My experience with this travel agency was phenomenal! From booking to accommodation, everything was seamless and enjoyable. I highly recommend their services for your next adventure.
              </p>
            </blockquote>
          </div>

          <!-- testi card 3 -->
          <div class="mb-8 sm:break-inside-avoid">
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
              <div class="flex items-center gap-4">
                  <img
                      alt="James Gerald profile picture"
                      src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=600"
                      class="w-14 h-14 rounded-full object-cover"
                  />
                  <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">James Geraldp</p>
                  </div>
              </div>
              <p class="mt-4 text-gray-700">
                I cannot praise this travel agency enough for their exceptional service. Every step of the way, from the initial booking to the final accommodation arrangements, was handled with utmost professionalism and care.
              </p>
            </blockquote>
          </div>

          <!-- testi card 4 -->
          <div class="mb-8 sm:break-inside-avoid">
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
              <div class="flex items-center gap-4">
                  <img
                      alt="David Fario profile picture"
                      src="https://images.pexels.com/photos/775358/pexels-photo-775358.jpeg?auto=compress&cs=tinysrgb&w=600"
                      class="w-14 h-14 rounded-full object-cover"
                  />
                  <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">David Fario</p>
                  </div>
              </div>
              <p class="mt-4 text-gray-700">
                My recent experience with this travel agency exceeded all expectations. Their attention to detail and commitment to customer satisfaction made every aspect of my trip truly unforgettable. Whether you're planning a solo excursion or a family getaway, I cannot recommend their services highly enough. Trust me; you won't be disappointed!
              </p>
            </blockquote>
          </div>

          <!-- testi card 5 -->
          <div class="mb-8 sm:break-inside-avoid">
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
              <div class="flex items-center gap-4">
                  <img
                      alt="Andreas Packuino's profile picture"
                      src="https://images.pexels.com/photos/846741/pexels-photo-846741.jpeg?auto=compress&cs=tinysrgb&w=600"
                      class="w-14 h-14 rounded-full object-cover"
                  />
                  <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Andreas Packuino</p>
                  </div>
              </div>
              <p class="mt-4 text-gray-700">
                From the moment I booked my trip with this agency, I knew I was in good hands. Their knowledgeable staff and seamless booking process set the stage for an incredible adventure. If you're looking for a travel experience that's both stress-free and enjoyable, I urge you to give this agency a try. You won't regret it!
              </p>
            </blockquote>
          </div>

          <!-- testi card 6 -->
          <div class="mb-8 sm:break-inside-avoid">
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
              <div class="flex items-center gap-4">
                  <img
                      alt="Mario Gani profile picture"
                      src="https://images.pexels.com/photos/1036627/pexels-photo-1036627.jpeg?auto=compress&cs=tinysrgb&w=600"
                      class="w-14 h-14 rounded-full object-cover"
                  />
                  <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                          <i class="fas fa-star h-5 w-5"></i>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Mario Gani</p>
                  </div>
              </div>
              <p class="mt-4 text-gray-700">
                I recently had the pleasure of traveling with this agency, and I must say, it was a truly phenomenal experience. From start to finish, everything was meticulously planned, allowing me to relax and enjoy every moment of my trip. If you're in need of travel assistance that goes above and beyond, look no further than this exceptional agency. Your next adventure awaits!
              </p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimoni -->

    <!-- Tour Package -->
    <section class="mt-8 mr-6">
      <h3 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl mt-4 mb-4">Tour Packages</h3>
      <div class="grid grid-cols-3 gap-4 ml-6 mr-6">

        <!-- Tour Package 1 -->
        <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
          <img
            alt="Verdon Canyon"
            src="/assets/image (7).jpg"
            class="h-56 w-full object-cover"
          />
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
          <img
            alt="Suluban Beaches"
            src="/assets/image (1).jpg"
            class="h-56 w-full object-cover"
          />
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
          <img
            alt="Sunnmore Alps Montain"
            src="/assets/image (6).jpg"
            class="h-56 w-full object-cover"
          />
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
    <section class="bg-white mt-8">
      <div class="container mx-auto p-4 ">
        <div class="container mx-auto p-4">
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div class="col-span-1 lg:col-span-2 row-span-2">
              <img src="https://picsum.photos/1000/600?random=1" alt="Destination 1" class="w-full h-auto object-cover rounded-lg">
            </div>
            <div class="col-span-1">
              <img src="https://picsum.photos/500/300?random=2" alt="Destination 2" class="w-full h-auto object-cover rounded-lg">
            </div>
            <div class="col-span-1">
              <img src="https://picsum.photos/500/300?random=3" alt="Destination 3" class="w-full h-auto object-cover rounded-lg">
            </div>
            <div class="col-span-1">
              <img src="https://picsum.photos/500/300?random=4" alt="Destination 4" class="w-full h-auto object-cover rounded-lg">
            </div>
            <div class="col-span-1">
              <img src="https://picsum.photos/500/300?random=5" alt="Destination 5" class="w-full h-auto object-cover rounded-lg">
            </div>
            <div class="col-span-1">
              <img src="https://picsum.photos/500/300?random=6" alt="Destination 6" class="w-full h-auto object-cover rounded-lg">
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
              Welcome to Destinova Eksplore! Discover amazing destinations and plan your next adventure with us.
            </p>
            <ul class="mt-8 flex gap-6">
              <li>
                <a href="#" rel="noreferrer" target="_blank" class="text-white transition hover:opacity-75">
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
                  <a href="#" class="text-white transition hover:opacity-75">Hotel Reservations</a>
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
                  <a href="#" class="text-white transition hover:opacity-75">Terms and Conditions</a>
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