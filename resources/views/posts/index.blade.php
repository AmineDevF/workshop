<x-app-layout-web>
    <main class="  container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 text-gray-800">Latest Posts</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Post Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://prd.place/400/600" alt="Post thumbnail" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xs text-gray-500">June 15, 2024</span>
                        <span class="text-xs px-2 py-1 bg-indigo-100 text-indigo-800 rounded-full">Technology</span>
                    </div>
                    <h2 class="text-xl font-bold mb-2 text-gray-800">The Future of Web Development</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam vel tincidunt ultricies, nisl nunc ultricies nunc...</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img src="https://i.pravatar.cc/300" alt="Author" class="w-8 h-8 rounded-full">
                            <span class="text-sm font-medium text-gray-700">John Doe</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="flex items-center space-x-1 text-gray-500"><i class="far fa-heart"></i><span>24</span></span>
                            <span class="flex items-center space-x-1 text-gray-500"><i class="far fa-comment"></i><span>8</span></span>
                        </div>
                    </div>
                </div>
            </div>
            
      
            <!-- Post Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://prd.place/400/600" alt="Post thumbnail" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xs text-gray-500">June 12, 2024</span>
                        <span class="text-xs px-2 py-1 bg-green-100 text-green-800 rounded-full">Design</span>
                    </div>
                    <h2 class="text-xl font-bold mb-2 text-gray-800">UI Trends for 2025</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Vivamus ac risus eget orci mollis sodales. Praesent faucibus accumsan risus. Etiam semper orci id tellus dignissim pretium...</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img src="https://i.pravatar.cc/300" alt="Author" class="w-8 h-8 rounded-full">
                            <span class="text-sm font-medium text-gray-700">Jane Smith</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="flex items-center space-x-1 text-gray-500"><i class="far fa-heart"></i><span>42</span></span>
                            <span class="flex items-center space-x-1 text-gray-500"><i class="far fa-comment"></i><span>15</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-12 flex justify-center">
            <a href="#" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-200">Load More</a>
        </div>
    </main>



  
</x-app-layout-web>
