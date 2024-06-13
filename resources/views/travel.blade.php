<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel</title>
  <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <style>
    .sidebar-menu {
      transition: transform 0.3s ease-in-out;
    }
    .sidebar-overlay {
      display: none;
    }
    .sidebar-open .sidebar-menu {
      transform: translateX(0);
    }
    .sidebar-open .sidebar-overlay {
      display: block;
    }
    .sidebar-overlay {
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 40;
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const sidebarOverlay = document.querySelector('.sidebar-overlay');
      const sidebar = document.querySelector('.sidebar-menu');
      const toggleSidebarBtn = document.querySelector('.toggle-sidebar');

      document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (dropdownToggle) {
        dropdownToggle.addEventListener('click', function () {
          const dropdown = dropdownToggle.nextElementSibling;
          dropdown.classList.toggle('hidden');
          dropdownToggle.classList.toggle('active');
        });
      });

      sidebarOverlay.addEventListener('click', function () {
        document.body.classList.remove('sidebar-open');
      });

      toggleSidebarBtn.addEventListener('click', function () {
        document.body.classList.toggle('sidebar-open');
      });
    });
  </script>
</head>

<body class="relative">
<!-- Side Bar -->
<div class="fixed inset-y-0 left-0 w-64 bg-gray-900 p-4 z-50 sidebar-menu -translate-x-full md:translate-x-0 flex flex-col">
  <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
      <img src="https://images.pexels.com/photos/1680175/pexels-photo-1680175.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="Logo" class="w-8 h-8 rounded object-cover">
      <span class="text-lg font-bold text-white ml-3">Client Account</span>
  </a>
  <ul class="mt-4 flex-1">
  <li class="mb-1 group">
      <a href="{{ route('dashboard') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
      <i class="ri-home-2-line mr-3 text-lg"></i>
      <span class="text-sm">Dashboard</span>
      </a>
  </li>
  <li class="mb-1 group">
      <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md sidebar-dropdown-toggle">
      <i class="ri-instance-line mr-3 text-lg"></i>
      <span class="text-sm">Trip</span>
      <i class="ri-arrow-right-s-line ml-auto transform transition-transform duration-200"></i>
      </a>
      <ul class="pl-7 mt-2 hidden">
      <li class="mb-4">
          <a href="{{ route('travel') }}" class="text-gray-300 text-sm flex items-center hover:text-gray-100">Travel</a>
      </li>
      <li class="mb-4">
          <a href="{{ route('rooms') }}" class="text-gray-300 text-sm flex items-center hover:text-gray-100">Rooms</a>
      </li>
      <li class="mb-4">
          <a href="{{ route('transport') }}" class="text-gray-300 text-sm flex items-center hover:text-gray-100">Transport</a>
      </li>
      </ul>
  </li>
  <li class="mb-1 group">
      <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md sidebar-dropdown-toggle">
      <i class="ri-flashlight-line mr-3 text-lg"></i>
      <span class="text-sm">History</span>
      <i class="ri-arrow-right-s-line ml-auto transform transition-transform duration-200"></i>
      </a>
      <ul class="pl-7 mt-2 hidden">
      <li class="mb-4">
          <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100">Manage History</a>
      </li>
      </ul>
  </li>
  <li class="mb-1 group">
      <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md sidebar-dropdown-toggle">
      <i class="ri-settings-2-line mr-3 text-lg"></i>
      <span class="text-sm">Setting</span>
      <i class="ri-arrow-right-s-line ml-auto transform transition-transform duration-200"></i>
      </a>
      <ul class="pl-7 mt-2 hidden">
      <li class="mb-4">
          <a href="{{ route('setting') }}" class="text-gray-300 text-sm flex items-center hover:text-gray-100">Setting</a>
      </li>
      <li class="mb-4">
          <a href="{{ route('userprofile') }}" class="text-gray-300 text-sm flex items-center hover:text-gray-100">Profile</>
      </li>
      </ul>
  </li>
  </ul>
  <div class="mt-4">
      <li class="mt-auto">
          <a href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
              <i class="ri-logout-box-line mr-3 text-lg"></i>
              <span class="text-sm">Logout</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
              @csrf
          </form>
      </li>
  </div>
</div>
<!-- Sidebar Overlay -->
<div class="sidebar-overlay fixed inset-0 z-40 bg-black opacity-50 hidden md:hidden"></div>
<!-- End Side Bar -->

<!-- Main Section -->
<div class="flex-1 md:ml-64 p-3">
    <!-- Toggle Button for Sidebar -->
    <button class="md:hidden toggle-sidebar p-2 text-gray-600">
      <i class="ri-menu-line text-2xl"></i>
    </button>

    <!-- Banner Section -->
    <section class="relative bg-cover bg-center bg-no-repeat h-64 md:h-screen">
      <video autoplay muted loop class="absolute inset-0 object-cover w-full h-full">
        <source src="{{ asset('assets/banner.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
          <div class="max-w-xl text-left">
            <h1 class="text-3xl font-extrabold sm:text-5xl text-white">
              Discover Adventures <strong class="block font-extrabold text-green-400">That Match Your Dreams</strong>
            </h1>
            <p class="mt-4 max-w-lg sm:text-xl/relaxed text-white">
              Explore the world with our curated travel packages designed to meet your needs and desires. 
            </p>
          </div>
    </video>

      <!-- Overlay -->
      <div class="absolute inset-0 bg-black/50 lg:bg-black/30 lg:from-black/70 lg:to-black/30 lg:bg-gradient-to-r"></div>
    </section>
    <!-- End Banner Section -->

    <!-- Bagian Show dari admin -->
    <section class="mt-8">
      <div class="container mx-auto px-4">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Trip Destination</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              @foreach($trips as $trip)
                  <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                      <img src="/images/{{ $trip->img }}" alt="{{ $trip->judul }}" class="w-full h-48 object-cover">
                      <div class="p-4">
                          <h3 class="text-xl font-semibold text-gray-800">{{ $trip->judul }}</h3>
                          <p class="text-gray-600 mt-2 overflow-hidden overflow-ellipsis max-h-24">{{ $trip->keterangan }}</p>
                          <p class="text-gray-600 mt-2">Rp {{ number_format($trip->harga, 2) }}</p>
                          <a href="#" class="text-green-500 hover:text-green-700 mt-4 block">Book Now</a>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
    </section>
    <!-- End Bagian Show dari admin -->

    <!-- Our Popular Travel -->
    <section class="mt-8">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Our Popular Travel Packages</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Package 1 -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('assets/pantai.jpg') }}" alt="Beach Getaway" class="w-full h-48 object-cover">
            <div class="p-4">
              <h3 class="text-xl font-semibold text-gray-800">Beach Getaway</h3>
              <p class="text-gray-600 mt-2">Enjoy the charm of white sandy beaches and calming blue seas. This package includes accommodation, meals, and exciting beach activities.</p>
              <a href="#" class="text-green-500 hover:text-green-700 mt-4 block">Learn More</a>
            </div>
          </div>
          <!-- Package 2 -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('assets/montain.jpg') }}"alt="Mountain Adventure" class="w-full h-48 object-cover">
            <div class="p-4">
              <h3 class="text-xl font-semibold text-gray-800">Mountain Adventure</h3>
              <p class="text-gray-600 mt-2">Embark on a thrilling journey through mountain trails, discover hidden waterfalls, and experience breathtaking views.</p>
              <a href="#" class="text-green-500 hover:text-green-700 mt-4 block">Learn More</a>
            </div>
          </div>
          <!-- Package 3 -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('assets/cultural.jpg') }}" alt="Cultural Exploration" class="w-full h-48 object-cover">
            <div class="p-4">
              <h3 class="text-xl font-semibold text-gray-800">Cultural Exploration</h3>
              <p class="text-gray-600 mt-2">Discover the rich history and traditions of various cultures. This package includes guided tours, cultural experiences, and more.</p>
              <a href="#" class="text-green-500 hover:text-green-700 mt-4 block">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Popular Travel -->

          <!--  Fitur-->
          <section class="bg-white text-gray-900">
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
              <div class="mx-auto max-w-lg text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">Seamless Travel Booking with Destinova</h2>

                <p class="mt-4 text-gray-700">
                  Experience hassle-free travel booking with Destinova. Our platform offers personalized itineraries, exclusive deals, and flexible plans to ensure your trip is perfect from start to finish.
                </p>
              </div>

              <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <a
                  class="block rounded-xl border border-gray-200 p-8 shadow-xl transition hover:border-green-400 hover:shadow-green-400 hover:text-green-400"
                  href="#"
                >
                  <i data-feather="map-pin" class="h-10 w-10 text-gray-400 hover:text-green-400"></i>

                  <h2 class="mt-4 text-xl font-bold">Personalized Itineraries</h2>

                  <p class="mt-1 text-sm text-gray-600">
                    Create custom travel plans tailored to your interests and preferences for a unique adventure.
                  </p>
                </a>

                <a
                  class="block rounded-xl border border-gray-200 p-8 shadow-xl transition hover:border-green-400 hover:shadow-green-400 hover:text-green-400"
                  href="#"
                >
                  <i data-feather="dollar-sign" class="h-10 w-10 text-gray-400 hover:text-green-400"></i>

                  <h2 class="mt-4 text-xl font-bold">Exclusive Deals</h2>

                  <p class="mt-1 text-sm text-gray-600">
                    Enjoy special discounts and offers on flights, hotels, and activities worldwide.
                  </p>
                </a>

                <a
                  class="block rounded-xl border border-gray-200 p-8 shadow-xl transition hover:border-green-400 hover:shadow-green-400 hover:text-green-400"
                  href="#"
                >
                  <i data-feather="calendar" class="h-10 w-10 text-gray-400 hover:text-green-400"></i>

                  <h2 class="mt-4 text-xl font-bold">Seamless Booking</h2>

                  <p class="mt-1 text-sm text-gray-600">
                    Experience a hassle-free booking process for flights, accommodations, and activities.
                  </p>
                </a>

                <a
                  class="block rounded-xl border border-gray-200 p-8 shadow-xl transition hover:border-green-400 hover:shadow-green-400 hover:text-green-400"
                  href="#"
                >
                  <i data-feather="phone" class="h-10 w-10 text-gray-400 hover:text-green-400"></i>

                  <h2 class="mt-4 text-xl font-bold">24/7 Customer Support</h2>

                  <p class="mt-1 text-sm text-gray-600">
                    Access our dedicated support team anytime, anywhere to assist with your travel needs.
                  </p>
                </a>

                <a
                  class="block rounded-xl border border-gray-200 p-8 shadow-xl transition hover:border-green-400 hover:shadow-green-400 hover:text-green-400"
                  href="#"
                >
                  <i data-feather="shield" class="h-10 w-10 text-gray-400 hover:text-green-400"></i>

                  <h2 class="mt-4 text-xl font-bold">Travel Safety</h2>

                  <p class="mt-1 text-sm text-gray-600">
                    Travel confidently with our reliable safety measures and tips for a secure journey.
                  </p>
                </a>

                <a
                  class="block rounded-xl border border-gray-200 p-8 shadow-xl transition hover:border-green-400 hover:shadow-green-400 hover:text-green-400"
                  href="#"
                >
                  <i data-feather="refresh-cw" class="h-10 w-10 text-gray-400 hover:text-green-400"></i>

                  <h2 class="mt-4 text-xl font-bold">Flexible Plans</h2>

                  <p class="mt-1 text-sm text-gray-600">
                    Adapt your travel plans with ease using our flexible booking options and policies.
                  </p>
                </a>
              </div>
            </div>
          </section>
          <!-- end  Fitur-->
          <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-8 mx-auto">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Our Best Combo Pack</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:items-stretch md:grid-cols-3 md:gap-8">
              <div class="divide-y divide-gray-200 rounded-2xl border border-gray-200 shadow-sm">
                <div class="p-6 sm:px-8">
                  <h2 class="text-lg font-medium text-gray-900">
                    Basic
                    <span class="sr-only">Plan</span>
                  </h2>

                  <p class="mt-2 text-gray-700">Perfect for a quick getaway.</p>

                  <p class="mt-2 sm:mt-4">
                    <strong class="text-3xl font-bold text-gray-900 sm:text-4xl"> $50 </strong>

                    <span class="text-sm font-medium text-gray-700">/trip</span>
                  </p>

                  <form action="{{ route('pay.post') }}" method="POST">
                      @csrf
                      <button class="mt-4 block rounded border border-green-600 bg-green-600 px-12 py-3 text-center text-sm font-medium text-white hover:bg-transparent hover:text-green-600 focus:outline-none focus:ring active:text-green-500 sm:mt-6">
                          Book Now
                      </button>
                  </form>
                </div>

                <div class="p-6 sm:px-8">
                  <p class="text-lg font-medium text-gray-900 sm:text-xl">What's included:</p>

                  <ul class="mt-2 space-y-2 sm:mt-4">
                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> 3 days, 2 nights stay </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> Free breakfast </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> City tour </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="x-circle" class="h-5 w-5 text-red-700"></i>
                      <span class="text-gray-700"> Airport transfer </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="x-circle" class="h-5 w-5 text-red-700"></i>
                      <span class="text-gray-700"> 24/7 support </span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="divide-y divide-gray-200 rounded-2xl border border-gray-200 shadow-sm">
                <div class="p-6 sm:px-8">
                  <h2 class="text-lg font-medium text-gray-900">
                    Standard
                    <span class="sr-only">Plan</span>
                  </h2>

                  <p class="mt-2 text-gray-700">Ideal for a relaxing vacation.</p>

                  <p class="mt-2 sm:mt-4">
                    <strong class="text-3xl font-bold text-gray-900 sm:text-4xl"> $100 </strong>

                    <span class="text-sm font-medium text-gray-700">/trip</span>
                  </p>

                  <form action="{{ route('pay.post') }}" method="POST">
                    @csrf
                    <button class="mt-4 block rounded border border-green-600 bg-green-600 px-12 py-3 text-center text-sm font-medium text-white hover:bg-transparent hover:text-green-600 focus:outline-none focus:ring active:text-green-500 sm:mt-6">
                        Book Now
                    </button>
                  </form>
                </div>

                <div class="p-6 sm:px-8">
                  <p class="text-lg font-medium text-gray-900 sm:text-xl">What's included:</p>

                  <ul class="mt-2 space-y-2 sm:mt-4">
                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> 5 days, 4 nights stay </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> Free breakfast and dinner </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> City tour </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> Airport transfer </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="x-circle" class="h-5 w-5 text-red-700"></i>
                      <span class="text-gray-700"> 24/7 support </span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="divide-y divide-gray-200 rounded-2xl border border-gray-200 shadow-sm">
                <div class="p-6 sm:px-8">
                  <h2 class="text-lg font-medium text-gray-900">
                    Premium
                    <span class="sr-only">Plan</span>
                  </h2>

                  <p class="mt-2 text-gray-700">The ultimate travel experience.</p>

                  <p class="mt-2 sm:mt-4">
                    <strong class="text-3xl font-bold text-gray-900 sm:text-4xl"> $200 </strong>

                    <span class="text-sm font-medium text-gray-700">/trip</span>
                  </p>

                  <form action="{{ route('pay.post') }}" method="POST">
                    @csrf
                    <button class="mt-4 block rounded border border-green-600 bg-green-600 px-12 py-3 text-center text-sm font-medium text-white hover:bg-transparent hover:text-green-600 focus:outline-none focus:ring active:text-green-500 sm:mt-6">
                        Book Now
                    </button>
                  </form>
                </div>

                <div class="p-6 sm:px-8">
                  <p class="text-lg font-medium text-gray-900 sm:text-xl">What's included:</p>

                  <ul class="mt-2 space-y-2 sm:mt-4">
                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> 7 days, 6 nights stay </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> All meals included </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> City tour and adventure activities </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> Airport transfer </span>
                    </li>

                    <li class="flex items-center gap-1">
                      <i data-feather="check-circle" class="h-5 w-5 text-green-700"></i>
                      <span class="text-gray-700"> 24/7 support </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

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
    <div>

      <script>
        feather.replace();
        $(document).ready(function() {
            $('#paymentForm').on('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting normally
    
                $.ajax({
                    url: '{{ route('pay.post') }}',
                    method: 'POST',
                    data: $(this).serialize(), // Serialize the form data
                    success: function(response) {
                        console.log('Success:', response);
                        $('#message').text(response.message); // Display the success message
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr);
                        $('#message').text('An error occurred while processing your payment.');
                    }
                });
            });
        });
    </script>
</body>
</html>