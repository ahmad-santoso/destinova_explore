<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transport</title>
  <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
  <script src="{{asset ('Js/jam.js')}}"></script>
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
<body class="relative" onload="realtimeClock()">
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

      <div class="bg-green-400 rounded-lg">
      <div class="flex justify-between items-center mb-6">
        <div>
          <h1 class="text-2xl font-bold ml-6 mt-6">Welcome Back</h1>
        </div>
        <div class="flex space-x-4">
          <div class="flex items-center space-x-2">
            <span><i class="fa-solid fa-location-dot"></i></span>
            <span>Bali</span>
          </div>
          <div class="flex items-center space-x-2 ">
            <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <span><label id="clock" class="mr-10"></label></span>
          </div>
        </div>
      </div>
      <div class="mb-6 p-6 text-white">
        <p class="text-2xl font-bold">Only here book tickets</p>
        <p class="text-2xl font-bold">Travel anywhere like your own home</p>
      </div>
      </div>
    
      <!-- Form Search Ticket -->
      <form action="{{ route('transport.search') }}" method="GET" class="space-y-4">
        <div>
            <label for="source" class="block text-sm font-medium text-gray-700">Source</label>
            <input type="text" name="source" id="source" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ request('source') }}">
        </div>
        <div>
            <label for="destination" class="block text-sm font-medium text-gray-700">Destination</label>
            <input type="text" name="destination" id="destination" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ request('destination') }}">
        </div>
        <div>
            <label for="date_of_journey" class="block text-sm font-medium text-gray-700">Date of Journey</label>
            <input type="date" name="date_of_journey" id="date_of_journey" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ request('date_of_journey') }}">
        </div>
        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
            <a href="{{ route('transport.search') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md">Reset</a>
        </div>
      </form>
      <!-- End Form Search Ticket -->
      
      <!-- Ticket List -->
      <div class="max-w-10xl mx-auto p-6">
        @if($tickets->isEmpty())
            <p>No tickets found for the specified criteria.</p>
        @else
            @foreach($tickets as $ticket)
                <div class="mb-6 bg-white shadow-lg rounded-lg border border-gray-200 transition-transform duration-300 transform hover:shadow-xl hover:shadow-blue-500/50">
                    <div class="flex">
                        <div class="w-1/12 bg-black text-white flex flex-col items-center justify-center py-4">
                            <div class="transform rotate-90">
                                <span class="text-sm tracking-widest">BOARDING PASS</span>
                            </div>
                        </div>
                        <div class="w-11/12 p-6">
                            <div class="flex justify-between items-center border-b border-gray-300 pb-4">
                                <div>
                                    <h1 class="text-3xl font-bold">{{ $ticket->airline }}</h1>
                                    <p class="text-sm text-gray-600">Flight: {{ $ticket->source }} → {{ $ticket->destination }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Flight</p>
                                    <p class="font-bold text-lg">{{ $ticket->route }}</p>
                                </div>
                                <div>
                                    <img src="https://via.placeholder.com/50" alt="QR Code" class="w-12 h-12">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <p class="text-gray-600">From</p>
                                    <p class="font-bold text-lg">{{ $ticket->source }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">To</p>
                                    <p class="font-bold text-lg">{{ $ticket->destination }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <p class="text-gray-600">Boarding Till</p>
                                    <p class="font-bold text-lg">{{ $ticket->arrival_time }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Gate</p>
                                    <p class="font-bold text-lg">02</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <p class="text-gray-600">Date</p>
                                    <p class="font-bold text-lg">{{ $ticket->date_of_journey }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Time</p>
                                    <p class="font-bold text-lg">{{ $ticket->dep_time }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <p class="text-gray-600">Duration</p>
                                    <p class="font-bold text-lg">{{ $ticket->duration }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Total Stops</p>
                                    <p class="font-bold text-lg">{{ $ticket->total_stops }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <p class="text-gray-600">Additional Info</p>
                                    <p class="font-bold text-lg">{{ $ticket->additional_info }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Price</p>
                                    <p class="font-bold text-lg">{{ $ticket->price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
      </div>
      <!-- end -->
  </div>
      <script>
        feather.replace()
      </script>
</body>
</html>