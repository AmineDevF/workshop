
<x-app-laout-web name="home">
    <main class="max-w-4xl mx-auto mt-8 px-4">
        <!-- Breadcrumb -->
        <div class="text-sm text-gray-600 mb-4">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-2">/</span>
            <a href="#" class="hover:text-blue-500">Technology</a>
            <span class="mx-2">/</span>
            <span class="text-gray-800">Getting Started with Web Development</span>
        </div>
@foreach ($posts as $post)
        <!-- Post Content -->
        <article class="bg-white rounded-lg shadow-md">
            <!-- Post Header -->
            
            <div class="p-6">
                
                   
                
                <h1 class="text-3xl font-bold mb-4"> {{$post->title}}</h1>
                
                <!-- Post Metadata -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
                        <div class="ml-4">
                            <h3 class="font-semibold">{{$post->user->name}}</h3>
                            <div class="text-gray-500 text-sm">
                                <span>Published on  {{$post->created_at->toFormattedDateString()}}</span>
                                <span class="mx-2">•</span>
                                <span>{{$post->created_at->diffForHumans()}} read</span>
                            </div>
                        </div>
                    </div>
                    <!-- Edit/Delete for post owner -->
                    <div class="flex space-x-3">
                        <button class="text-gray-500 hover:text-gray-700 flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit
                        </button>
                        <button class="text-red-500 hover:text-red-700 flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Delete
                        </button>
                    </div>
                </div>

                <!-- Categories and Tags -->
                <div class="flex items-center space-x-4 mb-6">
                    <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">{{$post->category->name}}</span>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-500">#webdev</span>
                        <span class="text-sm text-gray-500">#coding</span>
                        <span class="text-sm text-gray-500">#beginners</span>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="mb-6">
                    <img src="https://prd.place/300/200" alt="Featured Image" class="w-full h-auto rounded-lg">
                </div>

                <!-- Post Content -->
                <div class="prose max-w-none">
                    <p class="mb-4">{{$post->description}}</p>
                    
                </div>

                <!-- Engagement Metrics -->
                <div class="flex items-center space-x-6 mt-8 pt-6 border-t">
                    <button class="text-gray-500 hover:text-blue-500 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <span>42 Likes</span>
                    </button>
                    <button class="text-gray-500 hover:text-blue-500 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                        </svg>
                        <span>{{$post->comments->count()}} Comments</span>
                    </button>
                    <button class="text-gray-500 hover:text-blue-500 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                        </svg>
                        <span>Share</span>
                    </button>
                   
                </div>
            </div>
           
            <!-- Comments Section -->
            <div class="border-t border-gray-200 p-6">
                <h3 class="text-xl font-bold mb-6">Comments ({{$post->comments->count()}})</h3>
                <div class="space-y-6">
                    <!-- Comment Input -->
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                        <div class="flex-1">
                            <textarea class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                      placeholder="Add to the discussion..."></textarea>
                            <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Comment</button>
                        </div>
                    </div>

                    <!-- Existing Comments -->
                    <div class="space-y-6">
                        <!-- Comment 1 -->
                        @foreach ($post->comments as $comment)
                            
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                            <div class="flex-1">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-semibold">Jane Smith</h4>
                                        <span class="text-gray-500 text-sm">2 hours ago</span>
                                    </div>
                                    <p class="text-gray-800">{{$comment->content}}</p>
                                    <div class="mt-3 flex items-center space-x-4">
                                        <button class="text-gray-500 hover:text-blue-500 text-sm">Reply</button>
                                        <button class="text-gray-500 hover:text-blue-500 text-sm">Like</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                      
                    </div>
                </div>
            </div>
        </article>

        @endforeach
    </main>
</x-app-laout-web>