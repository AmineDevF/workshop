@props(['name','url'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$name}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="{{$url}}" class="text-xl font-bold text-gray-800">BlogApp</a>
                </div>
                <div class="flex items-center space-x-4">
                  @auth
                  <a href="{{route('my-posts.post')}}" class="text-gray-600 hover:text-gray-800">My Posts</a>
                  <a href="#" class="text-gray-600 hover:text-gray-800">New Categories</a>
                  <a href="{{route('posts.create')}}" class="text-gray-600 hover:text-gray-800">New Post</a>
                  @endauth
                   
                    @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 ">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 ">Log in</a>
           
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 ">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </div>

                
            </div>
            
        </div>

      
        
    </nav>

    {{ $slot }}

</body>
</html>