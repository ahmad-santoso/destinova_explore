<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
<body class="relative bg-gray-100">
    {{-- <x-app-layout> --}}
        {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard Admin') }}
            </h2>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        </x-slot> --}}

        <div class="flex h-screen">
            <!-- Side Bar -->
            <div class="fixed inset-y-0 left-0 w-64 bg-gray-900 p-4 z-50 sidebar-menu -translate-x-full md:translate-x-0 flex flex-col">
                <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
                    <img src="https://images.pexels.com/photos/715546/pexels-photo-715546.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Logo" class="w-8 h-8 rounded object-cover">
                    <span class="text-lg font-bold text-white ml-3">Admin Account</span>
                </a>
                <ul class="mt-4 flex-1">
                    <li class="mb-1 group">
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                            <i class="ri-dashboard-line mr-3 text-lg"></i>
                            <span class="text-sm">Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-1 group">
                        <a href="{{ route('managekonten') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                            <i class="ri-map-pin-line mr-3 text-lg"></i>
                            <span class="text-sm">Manage Konten Trip</span>
                        </a>
                    </li>
                    <li class="mb-1 group">
                        <a href="{{ route('kontenRooms') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                            <i class="fa fa-bed mr-3 text-lg"></i>
                            <span class="text-sm">Manage Konten Rooms</span>
                        </a>
                    </li>
                    <li class="mb-1 group">
                        <a href="{{ route('kontentrans') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                            <i class="fa fa-train mr-3 text-lg"></i>
                            <span class="text-sm">Manage Konten Transport</span>
                        </a>
                    </li>
                    <li class="mb-1 group">
                        <a href="{{ route('profile.edit') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                            <i class="ri-settings-2-line mr-3 text-lg"></i>
                            <span class="text-sm">Profile</span>
                        </a>
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

            <!-- Main Content -->
            <div class="flex-1 ml-64 p-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  <!-- Dashboard Cards -->
                  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                      <!-- Card 1: Total Users -->
                      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                          <div class="flex items-center justify-between">
                              <div>
                                  <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Total Users</p>
                                  <p class="text-2xl font-semibold text-gray-800 dark:text-gray-200">1,234</p>
                              </div>
                              <svg class="h-12 w-12 text-blue-500 dark:text-blue-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <path d="M8 14l4-4 4 4m0 6H8"></path>
                              </svg>
                          </div>
                      </div>
          
                      <!-- Card 2: Total Bookings -->
                      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                          <div class="flex items-center justify-between">
                              <div>
                                  <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Total Bookings</p>
                                  <p class="text-2xl font-semibold text-gray-800 dark:text-gray-200">567</p>
                              </div>
                              <svg class="h-12 w-12 text-green-500 dark:text-green-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <path d="M8 14l4-4 4 4m0 6H8"></path>
                              </svg>
                          </div>
                      </div>
          
                      <!-- Card 3: Total Revenue -->
                      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                          <div class="flex items-center justify-between">
                              <div>
                                  <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Total Revenue</p>
                                  <p class="text-2xl font-semibold text-gray-800 dark:text-gray-200">$12,345</p>
                              </div>
                              <svg class="h-12 w-12 text-yellow-500 dark:text-yellow-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <path d="M8 14l4-4 4 4m0 6H8"></path>
                              </svg>
                          </div>
                      </div>
          
                      <!-- Card 4: Pending Requests -->
                      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                          <div class="flex items-center justify-between">
                              <div>
                                  <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Pending Requests</p>
                                  <p class="text-2xl font-semibold text-gray-800 dark:text-gray-200">8</p>
                              </div>
                              <svg class="h-12 w-12 text-red-500 dark:text-red-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <path d="M8 14l4-4 4 4m0 6H8"></path>
                              </svg>
                          </div>
                      </div>
                  </div>
          
                  <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-12">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Users Management</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead>
                                    <tr class="text-left font-bold">
                                        <th class="px-6 py-3">No</th>
                                        <th class="px-6 py-3">Name</th>
                                        <th class="px-6 py-3">Email</th>
                                        <th class="px-6 py-3">Role</th>
                                        <th class="px-6 py-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- User Data Rows -->
                                    <tr>
                                        <td class="px-6 py-4">1</td>
                                        <td class="px-6 py-4">Admin Account</td>
                                        <td class="px-6 py-4">admin@gmail.com</td>
                                        <td class="px-6 py-4">Admin</td>
                                        <td class="px-6 py-4">
                                            <button class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                                            <button class="text-red-600 hover:text-red-900">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4">2</td>
                                        <td class="px-6 py-4">Client Account</td>
                                        <td class="px-6 py-4">client@gmail.com</td>
                                        <td class="px-6 py-4">Client</td>
                                        <td class="px-6 py-4">
                                            <button class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                                            <button class="text-red-600 hover:text-red-900">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="mb-10">
                    <!-- Bookings Table -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-12">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Bookings Management</h3>
                            <div class="overflow-x-auto">
                                <table class="w-full whitespace-nowrap">
                                    <thead>
                                        <tr class="text-left font-bold">
                                            <th class="px-6 py-3">No</th>
                                            <th class="px-6 py-3">User</th>
                                            <th class="px-6 py-3">Destination</th>
                                            <th class="px-6 py-3">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                    <!-- Booking Data Rows -->
                                        <tr>
                                            <td class="px-6 py-4">1</td>
                                            <td class="px-6 py-4">M. Satya Rizky Saputra</td>
                                            <td class="px-6 py-4">Bali</td>
                                            <td class="px-6 py-4">2024-05-20</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4">2</td>
                                            <td class="px-6 py-4">Ahmad Santoso</td>
                                            <td class="px-6 py-4">Lombok</td>
                                            <td class="px-6 py-4">2024-06-22</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4">3</td>
                                            <td class="px-6 py-4">M. Haikal Bintang</td>
                                            <td class="px-6 py-4">Ubud</td>
                                            <td class="px-6 py-4">2024-07-10</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-10">
                    <!-- Destinations Management -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 pb-32 mt-8">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Destinations Management</h3>
                                <div class="overflow-x-auto">
                                    <table class="w-full whitespace-nowrap">
                                        <thead>
                                            <tr class="text-left font-bold">
                                                <th class="px-6 py-3">No</th>
                                                <th class="px-6 py-3">Name</th>
                                                <th class="px-6 py-3">Description</th>
                                                <th class="px-6 py-3">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                        <!-- Destination Data Rows -->
                                        <tr>
                                            <td class="px-6 py-4">1</td>
                                            <td class="px-6 py-4">Bali</td>
                                            <td class="px-6 py-4">Beautiful Island in Indonesia</td>
                                            <td class="px-6 py-4 pb-100">
                                                <button class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                                                <button class="text-red-600 hover:text-red-900">Delete</button>
                                            </td>
                                        </tr>
                                        <!-- More Destination Data Rows -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
          
                <div class="mb-10">
                    <!-- Bar Chart -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
          
                <div class="mb-10">
                    <!-- Pie Chart -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
          
                <!-- Single Chart Section Below -->
                <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 flex justify-center items-center">
                    <canvas id="analyticsChart" width="400" height="200"></canvas>
                </div>
                  
                <div class="bg-white dark:bg-gray-800  overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>

        <script>
            // Sample data for tourism revenue
            const tourismData = {
                labels: ['Bali', 'Bandung', 'Jakarta', 'Lombok'],
                datasets: [{
                    label: 'Tourism Revenue',
                    data: [500000, 350000, 450000, 250000], // Revenue data in USD
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            // Get the canvas element
            const ctx = document.getElementById('analyticsChart').getContext('2d');

            // Create the bar chart
            const analyticsChart = new Chart(ctx, {
                type: 'bar',
                data: tourismData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Bar Chart
            const barChart = new Chart(document.getElementById('barChart'), {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Bookings',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Pie Chart
            const pieChart = new Chart(document.getElementById('pieChart'), {
                type: 'pie',
                data: {
                    labels: ['User1', 'User2', 'User3', 'User4'],
                    datasets: [{
                        label: 'Users',
                        data: [10, 20, 30, 40],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                }
            });

            // Line Chart
            const lineChart = new Chart(document.getElementById('lineChart'), {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Revenue',
                        data: [1000, 2000, 1500, 3000, 2500, 3500],
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    {{-- </x-app-layout> --}}
</body>
</html>