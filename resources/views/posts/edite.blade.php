    
   <x-app-layout-web>
   <section >
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-8">
                        <h1 class="text-2xl font-bold text-gray-800">Edit Post</h1>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Draft</span>
                    </div>
                    
                    <form>
                        <div class="mb-6">
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                            <input type="text" id="title" name="title" placeholder="Enter post title" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
                        </div>
                        
                        <div class="mb-6">
                            <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 bg-gray-100 text-gray-500 border border-r-0 border-gray-300 rounded-l-md">yourblog.com/</span>
                                <input type="text" id="slug" name="slug" placeholder="your-post-slug" class="flex-1 px-4 py-2 border border-gray-300 rounded-r-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                                <select id="category" name="category" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
                                    <option value="">Select a category</option>
                                    <option value="technology">Technology</option>
                                    <option value="design">Design</option>
                                    <option value="business">Business</option>
                                    <option value="lifestyle">Lifestyle</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="tags" class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                                <input type="text" id="tags" name="tags" placeholder="e.g. web, javascript, react (comma separated)" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
                            <div class="border-2 border-dashed border-gray-300 rounded-md p-6 text-center">
                                <div class="mb-3">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-gray-400"></i>
                                </div>
                                <p class="text-gray-500 mb-2">Drag and drop an image here, or click to select a file</p>
                                <p class="text-xs text-gray-400">PNG, JPG or GIF (max 5MB)</p>
                                <input type="file" class="hidden" id="featured-image">
                                <button type="button" class="mt-4 px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition duration-200">Select Image</button>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Short Description</label>
                            <textarea id="description" name="description" rows="3" placeholder="Brief description of your post (appears in previews)" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent"></textarea>
                        </div>
                        
                        <div class="mb-6">
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                            <div class="border border-gray-300 rounded-md overflow-hidden">
                                <div class="bg-gray-50 px-4 py-2 border-b border-gray-300 flex items-center">
                                    <button type="button" class="p-2 text-gray-500 hover:text-gray-700"><i class="fas fa-bold"></i></button>
                                    <button type="button" class="p-2 text-gray-500 hover:text-gray-700"><i class="fas fa-italic"></i></button>
                                    <button type="button" class="p-2 text-gray-500 hover:text-gray-700"><i class="fas fa-link"></i></button>
                                    <button type="button" class="p-2 text-gray-500 hover:text-gray-700"><i class="fas fa-list-ul"></i></button>
                                    <button type="button" class="p-2 text-gray-500 hover:text-gray-700"><i class="fas fa-list-ol"></i></button>
                                    <button type="button" class="p-2 text-gray-500 hover:text-gray-700"><i class="fas fa-quote-right"></i></button>
                                    <button type="button" class="p-2 text-gray-500 hover:text-gray-700"><i class="fas fa-image"></i></button>
                                    <button type="button" class="p-2 text-gray-500 hover:text-gray-700"><i class="fas fa-code"></i></button>
                                </div>
                                <textarea id="content" name="content" rows="12" placeholder="Write your post content here..." class="w-full px-4 py-2 focus:outline-none"></textarea>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4 mt-8">
                            <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-200">Publish Post</button>
                            <button type="button" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition duration-200">Save Draft</button>
                            <button type="button" class="px-6 py-3 text-gray-500 hover:text-gray-700">Preview</button>
                        </div>
                        <div class="flex items-center space-x-4 mt-8">
                            <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-200">Update Post</button>
                            <button type="button" class="px-6 py-3 bg-red-100 text-red-700 rounded-md hover:bg-red-200 transition duration-200">Delete Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout-web>