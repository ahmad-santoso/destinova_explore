<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Client</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
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
        <div class="flex-1 ml-64 p-6">
            <h2 class="text-2xl font-semibold mb-4 ml-3">Dashboard Client</h2>
            <div class="p-4">
                <!-- Top Section -->
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mb-6">
                    <!-- Upcoming Trips -->
                    <div class="col-span-1 lg:col-span-2 bg-white p-4 rounded-lg shadow">
                        <h2 class="text-xl font-bold ml-6">Upcoming Trips</h2>
                        <div class="rounded-lg p-6 flex">
                            <div class="w-1/2 mr-4">
                                <img src="https://picsum.photos/1000/600?random=1" alt="Random Image"
                                    class="w-full h-64 object-cover rounded-lg">
                                <div class="flex items-center space-x-2 ml-6 mt-4">
                                    <img src="https://picsum.photos/1000/600?random=2" alt="Icon 1" class="w-6 h-6">
                                    <img src="https://picsum.photos/1000/600?random=3" alt="Icon 2" class="w-6 h-6">
                                    <img src="https://picsum.photos/1000/600?random=4" alt="Icon 3" class="w-6 h-6">
                                    <img src="https://picsum.photos/1000/600?random=5" alt="Icon 4" class="w-6 h-6">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <h2 class="font-bold mb-2">Kuta Beach, Bali</h2>
                                <div class="items-center mb-2">
                                    <p class="text-gray-600 font-semibold">15 Feb - 20 Feb</p>
                                    <p class="text-gray-600 font-semibold">Sun Hotel</p>
                                </div>
                                <p class="text-gray-700 mb-2 text-justify pr-5">Kuta Beach caters to all types of travelers with a wide range of accommodation options. From luxurious beachfront resorts offering world-class amenities to budget-friendly hostels and guesthouses, there is something for everyone...</p>
                                <div class="flex justify-start">
                                    <button
                                        class="bg-green-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show
                                        more</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Travel Map -->
                    <div class="col-span-1 lg:col-span-2 bg-white p-4 rounded-lg shadow" style="padding-left: 40px; padding-right: 40px;">
                        <h2 class="text-xl font-bold ml-6" style="margin-left: 0;">Travel Map</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63098.13364959419!2d115.13033290314019!3d-8.726321728656922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246bc2ab70d43%3A0x82feaae12f4ab48e!2sPantai%20Kuta!5e0!3m2!1sid!2sid!4v1716292168698!5m2!1sid!2sid"
                            width="300" height="200"
                            style="border:0; width:100%; height:12rem; object-cover: cover; border-radius:0.5rem; "
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <h3 class="mt-4 text-lg font-semibold">Kuta beach, Bali</h3>
                        <p class="text-gray-600 text-justify">Kuta Beach is a haven for surfers, both beginners and seasoned professionals. The consistent waves and sandy bottom make it an ideal spot for learning to surf, while the more experienced can find challenging breaks just a short paddle away...</p>
                        <div class="mt-2 flex items-center">
                            <span class="text-yellow-500 text-xl">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                            <span class="text-gray-600 ml-2">4.7</span>
                        </div>
                    </div>
                    <!-- Flight Schedule -->
                    {{-- <div class="col-span-1 bg-white p-4 rounded-lg shadow">
                        <h2 class="text-base font-semibold mb-2">Flight Schedule</h2>
                        <ul class="space-y-1 text-xs">
                            <li class="flex justify-between items-center border-b pb-1">
                                <div>
                                    <h4 class="font-semibold">Airline A</h4>
                                    <p class="text-gray-600">Destination A</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Departure: 12:30 PM</p>
                                    <p class="text-gray-600">Arrival: 3:45 PM</p>
                                </div>
                            </li>
                            <li class="flex justify-between items-center border-b pb-1">
                                <div>
                                    <h4 class="font-semibold">Airline B</h4>
                                    <p class="text-gray-600">Destination B</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Departure: 10:00 AM</p>
                                    <p class="text-gray-600">Arrival: 1:15 PM</p>
                                </div>
                            </li>
                            <li class="flex justify-between items-center border-b pb-1">
                                <div>
                                    <h4 class="font-semibold">Airline C</h4>
                                    <p class="text-gray-600">Destination C</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Departure: 06:45 PM</p>
                                    <p class="text-gray-600">Arrival: 09:00 PM</p>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                <!-- End Top Section -->

                <!-- Bottom Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <!-- Suggested Trips -->
                    <div class="col-span-1 bg-white p-4 rounded-lg shadow">
                        <h2 class="text-xl font-semibold mb-4">Suggested Trips</h2>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <img src="https://picsum.photos/100?random=1" alt="Trip 1"
                                    class="w-16 h-16 object-cover rounded-md mr-4">
                                <div>
                                    <h3 class="font-semibold">Trip A</h3>
                                    <p class="text-gray-600">Explore the pristine beaches and vibrant culture of this exotic destination.</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <img src="https://picsum.photos/100?random=2" alt="Trip 2"
                                    class="w-16 h-16 object-cover rounded-md mr-4">
                                <div>
                                    <h3 class="font-semibold">Trip B</h3>
                                    <p class="text-gray-600">Description B: Discover the historic landmarks and culinary delights of this iconic city.</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <img src="https://picsum.photos/100?random=3" alt="Trip 3"
                                    class="w-16 h-16 object-cover rounded-md mr-4">
                                <div>
                                    <h3 class="font-semibold">Trip C</h3>
                                    <p class="text-gray-600">Immerse yourself in the natural beauty and outdoor adventures of this breathtaking region.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Notifications -->
                    <div class="col-span-1 bg-white p-4 rounded-lg shadow">
                        <h2 class="text-xl font-semibold mb-4">Notifications</h2>
                        <ul class="space-y-4">
                            <li class="flex justify-between items-center border-b pb-2">
                                <div>
                                    <h4 class="font-semibold">Information</h4>
                                    <p class="text-gray-600">Stay updated with the latest news and events relate...</p>
                                </div>
                                <span class="text-sm text-gray-500">Just now</span>
                            </li>
                            <li class="flex justify-between items-center border-b pb-2">
                                <div>
                                    <h4 class="font-semibold">Reminders</h4>
                                    <p class="text-gray-600">Receive important reminders and alerts for upcom...</p>
                                </div>
                                <span class="text-sm text-gray-500">15 mins ago</span>
                            </li>
                            <li class="flex justify-between items-center">
                                <div>
                                    <h4 class="font-semibold">Actifity</h4>
                                    <p class="text-gray-600">Stay informed about new activity on your account...</p>
                                </div>
                                <span class="text-sm text-gray-500">1 hour ago</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Bottom Section -->
            </div>
        

            <!-- One Section Update In Bottom --> 
            <div class="flex-1 bg-white p-4 rounded-lg shadow mb-4 mt-10 lg:mb-0 lg:col-span-2"> 
                <h2 class="text-xl font-semibold mb-4">Explore Trips</h2> 
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4"> 
                    @foreach ($products as $product) 
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg bg-white p-4 sm:p-6"> 
                        <img alt="{{ $product->title }}" src="{{ url('images/'.$product->image) }}" class="h-56 w-full object-cover" /> 
                        <div class="mt-2"> 
                            <dl> 
                                <div> 
                                    <dt class="sr-only">Price</dt> 
                                    <dd class="text-sm text-gray-500">${{ $product->price }}</dd> 
                                </div> 
                                <div> 
                                    <dt class="sr-only">Title</dt> 
                                    <dd class="font-medium">{{ $product->title }}</dd> 
                                </div> 
                            </dl> 
                            <div class="mt-6 flex items-center gap-8 text-xs justify-start"> 
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2"> 
                                    <i class="fas fa-car size-4 text-indigo-700"></i> 
                                    <div class="mt-1.5 sm:mt-0"> 
                                        <p class="text-gray-500">Parking</p> 
                                        <p class="font-medium">2 spaces</p> 
                                    </div> 
                                </div> 
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2"> 
                                    <i class="fas fa-shower size-4 text-indigo-700"></i> 
                                    <div class="mt-1.5 sm:mt-0"> 
                                        <p class="text-gray-500">Bathroom</p> 
                                        <p class="font-medium">2 rooms</p> 
                                    </div> 
                                </div> 
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2"> 
                                    <i class="fas fa-bed size-4 text-indigo-700"></i> 
                                    <div class="mt-1.5 sm:mt-0"> 
                                        <p class="text-gray-500">Bedroom</p> 
                                        <p class="font-medium">4 rooms</p> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </article> 
                    @endforeach 
                </div> 
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sidebarToggle = document.querySelector('.sidebar-toggle');
            var sidebarMenu = document.querySelector('.sidebar-menu');
            var sidebarOverlay = document.querySelector('.sidebar-overlay');

            sidebarToggle.addEventListener('click', function() {
                document.body.classList.toggle('sidebar-open');
            });

            sidebarOverlay.addEventListener('click', function() {
                document.body.classList.remove('sidebar-open');
            });
        });
    </script>
</body>
</html>
