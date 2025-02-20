
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tailwind Dashboard</title>
      <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">
      <div class="min-h-screen flex flex-col">
        <!-- Sidebar -->
        <div class="flex flex-col md:flex-row flex-1">
          <aside class="bg-blue-800 w-full md:w-64 md:min-h-screen">
            <div class="flex items-center justify-center h-16 bg-blue-900">
              <span class="text-white font-bold text-lg">Dashboard</span>
            </div>
            <nav class="py-4">
              <ul>
                <li class="px-6 py-3 text-white bg-blue-700 hover:bg-blue-600">
                  <a href="#" class="flex items-center">
                    <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    Dashboard
                  </a>
                </li>
                <li class="px-6 py-3 text-white hover:bg-blue-600">
                  <a href="#" class="flex items-center">
                    <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Users
                  </a>
                </li>
                <li class="px-6 py-3 text-white hover:bg-blue-600">
                  <a href="#" class="flex items-center">
                    <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    Reports
                  </a>
                </li>
                <li class="px-6 py-3 text-white hover:bg-blue-600">
                  <a href="#" class="flex items-center">
                    <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                  </a>
                </li>
              </ul>
            </nav>
          </aside>
    
          <!-- Main Content -->
          <main class="flex-1 p-6">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Dashboard Overview</h1>
            
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
              <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                  <div class="p-3 rounded-full bg-blue-100 text-blue-500">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <h2 class="text-xl font-semibold text-gray-700">Users</h2>
                    <p class="mt-2 text-3xl font-bold text-gray-900">1,482</p>
                    <p class="text-sm text-green-600">↑ 12% from last month</p>
                  </div>
                </div>
              </div>
              
              <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                  <div class="p-3 rounded-full bg-green-100 text-green-500">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <h2 class="text-xl font-semibold text-gray-700">Revenue</h2>
                    <p class="mt-2 text-3xl font-bold text-gray-900">$34,245</p>
                    <p class="text-sm text-green-600">↑ 8.3% from last month</p>
                  </div>
                </div>
              </div>
              
              <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                  <div class="p-3 rounded-full bg-orange-100 text-orange-500">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <h2 class="text-xl font-semibold text-gray-700">Conversion</h2>
                    <p class="mt-2 text-3xl font-bold text-gray-900">28.6%</p>
                    <p class="text-sm text-red-600">↓ 1.8% from last month</p>
                  </div>
                </div>
              </div>
              
              <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                  <div class="p-3 rounded-full bg-purple-100 text-purple-500">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <h2 class="text-xl font-semibold text-gray-700">Growth</h2>
                    <p class="mt-2 text-3xl font-bold text-gray-900">14.2%</p>
                    <p class="text-sm text-green-600">↑ 3.1% from last month</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Charts -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
              <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Monthly Revenue</h2>
                <div class="h-64 bg-gray-100 rounded flex items-center justify-center">
                  <p class="text-gray-500">Chart placeholder</p>
                </div>
              </div>
              
              <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">User Activity</h2>
                <div class="h-64 bg-gray-100 rounded flex items-center justify-center">
                  <p class="text-gray-500">Chart placeholder</p>
                </div>
              </div>
            </div>
            
            <!-- Recent Activity -->
            <div class="bg-white rounded-lg shadow-md p-6">
              <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Activity</h2>
              <div class="overflow-x-auto">
                <table class="w-full">
                  <thead>
                    <tr class="bg-gray-100">
                      <th class="px-4 py-2 text-left text-gray-600">User</th>
                      <th class="px-4 py-2 text-left text-gray-600">Action</th>
                      <th class="px-4 py-2 text-left text-gray-600">Date</th>
                      <th class="px-4 py-2 text-left text-gray-600">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b">
                      <td class="px-4 py-3">
                        <div class="flex items-center">
                          <div class="w-8 h-8 rounded-full bg-blue-400 flex items-center justify-center text-white">JD</div>
                          <div class="ml-3">
                            <p class="text-gray-800">John Doe</p>
                            <p class="text-gray-500 text-sm">john@example.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-gray-700">Purchased Premium Plan</td>
                      <td class="px-4 py-3 text-gray-700">Feb 18, 2025</td>
                      <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Completed</span>
                      </td>
                    </tr>
                    <tr class="border-b">
                      <td class="px-4 py-3">
                        <div class="flex items-center">
                          <div class="w-8 h-8 rounded-full bg-purple-400 flex items-center justify-center text-white">AS</div>
                          <div class="ml-3">
                            <p class="text-gray-800">Alice Smith</p>
                            <p class="text-gray-500 text-sm">alice@example.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-gray-700">Updated Profile</td>
                      <td class="px-4 py-3 text-gray-700">Feb 17, 2025</td>
                      <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Processed</span>
                      </td>
                    </tr>
                    <tr class="border-b">
                      <td class="px-4 py-3">
                        <div class="flex items-center">
                          <div class="w-8 h-8 rounded-full bg-orange-400 flex items-center justify-center text-white">RJ</div>
                          <div class="ml-3">
                            <p class="text-gray-800">Robert Johnson</p>
                            <p class="text-gray-500 text-sm">robert@example.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-gray-700">Requested Refund</td>
                      <td class="px-4 py-3 text-gray-700">Feb 16, 2025</td>
                      <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                      </td>
                    </tr>
                    <tr class="border-b">
                      <td class="px-4 py-3">
                        <div class="flex items-center">
                          <div class="w-8 h-8 rounded-full bg-green-400 flex items-center justify-center text-white">MW</div>
                          <div class="ml-3">
                            <p class="text-gray-800">Maria Williams</p>
                            <p class="text-gray-500 text-sm">maria@example.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-gray-700">Signed Up</td>
                      <td class="px-4 py-3 text-gray-700">Feb 15, 2025</td>
                      <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Completed</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </main>
        </div>
      </div>
    </body>
    </html>

