<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard Admin') }}
            </h2>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        </x-slot>

        <div class="flex">
            <!-- Sidebar -->
            <div class="w-1/4 bg-gray-100 dark:bg-gray-900 min-h-screen p-4">
                <!-- Profile Section -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <div class="flex items-center space-x-4">
                        <img class="w-16 h-16 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Admin Name</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">admin@example.com</p>
                        </div>
                    </div>
                    <!-- Navigation Links -->
                    <div class="mt-8">
                        <nav>
                            <ul>
                                <li class="mb-4">
                                    <a href="#" class="text-gray-800 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-300 flex items-center">
                                        <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 12h18M3 12l6-6m-6 6l6 6"></path>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="text-gray-800 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-300 flex items-center">
                                        <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M16 12h-8m0 0l-4-4m4 4l-4 4m8 0h8"></path>
                                        </svg>
                                        Users Management
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="text-gray-800 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-300 flex items-center">
                                        <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 6h13M8 12h13m-13 6h13M3 6h.01M3 12h.01M3 18h.01"></path>
                                        </svg>
                                        Bookings Management
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="text-gray-800 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-300 flex items-center">
                                        <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 19c-3.866 0-7-1.343-7-3v-5c0-1.657 3.134-3 7-3s7 1.343 7 3v5c0 1.657-3.134 3-7 3z"></path>
                                            <path d="M12 11V7"></path>
                                            <path d="M9 14h6"></path>
                                        </svg>
                                        Destinations Management
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="text-gray-800 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-300 flex items-center">
                                        <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 3h-6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"></path>
                                            <path d="M9 21H3a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2z"></path>
                                            <path d="M16 9V5a2 2 0 0 1 2-2h2"></path>
                                            <path d="M3 16v-2a2 2 0 0 1 2-2h2"></path>
                                        </svg>
                                        Analytics
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-3/4 py-12 px-6">
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

                  <!-- Main Content Grid -->
                  <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-6">
                      <!-- Left Column: Tables -->
                      <div class="space-y-6">
                          <!-- Bookings Table -->
                          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
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
          
                      <!-- Right Column: Charts -->
                      <div class="space-y-5">
                          <!-- Bar Chart -->
                          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                              <canvas id="barChart"></canvas>
                          </div>
          
                          <!-- Pie Chart -->
                          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                            <canvas id="lineChart"></canvas>
                        </div>
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
        </script>

        <script>
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
    </x-app-layout>
</body>
</html>