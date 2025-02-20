<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="/" class="text-2xl font-bold text-indigo-600">BlogSpace</a>
                <div class="hidden md:flex space-x-6">
                    <a href="/" class="text-gray-700 hover:text-indigo-600">Home</a>
                    <a href="/categories" class="text-gray-700 hover:text-indigo-600">Categories</a>
                    <a href="/create" class="text-gray-700 hover:text-indigo-600">Write</a>
                    <a href="/profile" class="text-gray-700 hover:text-indigo-600">Profile</a>
                </div>
            </div>
            {{-- <div class="flex items-center space-x-4">
                <div class="relative hidden md:block">
                    <input type="text" placeholder="Search posts..." class="bg-gray-100 rounded-full py-2 px-4 pl-10 w-64 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-500"></i>
                </div>
                <a href="/login" class="text-gray-700 hover:text-indigo-600 md:hidden">Login</a>
                <div class=" md:block">
                    <img src="https://i.pravatar.cc/300" alt="User" class="w-10 h-10 rounded-full border-2 border-indigo-600">
                </div>
                <button class="md:hidden">
                    <i class="fas fa-bars text-gray-700 text-xl"></i>
                </button>
            </div> --}}
            <div class="relative inline-block text-left">
  <div>
    <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 shadow-xs ring-gray-300 ring-inset hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
      Options
      <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>
  <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white ring-1 shadow-lg ring-black/5 focus:outline-hidden hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
    <div class="py-1" role="none">
      <!-- Active: "bg-gray-100 text-gray-900 outline-hidden", Not Active: "text-gray-700" -->
      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
      <form method="POST" action="#" role="none">
        <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
      </form>
    </div>
  </div>
</div>
        </nav>
    </header>
        <main>
            {{ $slot }}
        </main>
    </div>
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">BlogSpace</h3>
                    <p class="text-gray-400">A place to share your thoughts and ideas with the world.</p>
                </div>
                <div>
                    <h4 class="text-lg font-medium mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="/categories" class="text-gray-400 hover:text-white">Categories</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-medium mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="/category/technology" class="text-gray-400 hover:text-white">Technology</a></li>
                        <li><a href="/category/design" class="text-gray-400 hover:text-white">Design</a></li>
                        <li><a href="/category/business" class="text-gray-400 hover:text-white">Business</a></li>
                        <li><a href="/category/lifestyle" class="text-gray-400 hover:text-white">Lifestyle</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-medium mb-4">Subscribe</h4>
                    <p class="text-gray-400 mb-4">Get the latest posts delivered right to your inbox.</p>
                    <form class="flex">
                        <input type="email" placeholder="Your email" class="px-4 py-2 w-full rounded-l-md focus:outline-none">
                        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-r-md hover:bg-indigo-700 transition duration-200">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400">© 2024 BlogSpace. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
          const menuButton = document.getElementById("menu-button");
          const menu = document.querySelector('[aria-labelledby="menu-button"]');
      
          menuButton.addEventListener("click", function (event) {
            // Prevent the click from propagating to the document
            event.stopPropagation();
            menu.classList.toggle("hidden");
          });
      
          // Close dropdown when clicking outside
          document.addEventListener("click", function (event) {
            if (!menu.contains(event.target) && event.target !== menuButton) {
              menu.classList.add("hidden");
            }
          });
        });
      </script>
</body>
</html>
