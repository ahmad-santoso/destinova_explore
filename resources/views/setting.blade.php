<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Setting</title>
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

    <!-- MainSection -->
    <div class="flex-1 md:ml-64 p-3">
        <!-- Toggle Button for Sidebar -->
        <button class="md:hidden toggle-sidebar p-2 text-gray-600">
        <i class="ri-menu-line text-2xl"></i>
        </button>
    </div>  
</div>
</body>
<html