<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Muhamad Asnal Aditya - Portfolio')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        * { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .smooth-scroll { scroll-behavior: smooth; }
        
        /* Custom dark theme colors */
        .dark-bg { background-color: #121212; }
        .dark-card { background-color: #1e1e1e; }
        .dark-card-hover { background-color: #252525; }
        .dark-text { color: #e0e0e0; }
        .dark-text-secondary { color: #a0a0a0; }
        .dark-border { border-color: #333333; }
    </style>
</head>
<body class="dark-bg text-white smooth-scroll">
    <!-- Navbar -->
    <nav class="dark-card shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="shrink-0">
                    <a href="{{ route('home') }}" class="text-2xl font-bold gradient-bg bg-clip-text text-transparent">
                        MAA
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'text-purple-400' : 'dark-text' }} hover:text-purple-400 transition duration-300">
                        Home
                    </a>
                    <a href="{{ route('aboutme') }}" class="nav-link {{ request()->routeIs('aboutme') ? 'text-purple-400' : 'dark-text' }} hover:text-purple-400 transition duration-300">
                        About Me
                    </a>
                    <a href="{{ route('skills') }}" class="nav-link {{ request()->routeIs('skills') ? 'text-purple-400' : 'dark-text' }} hover:text-purple-400 transition duration-300">
                        Skills
                    </a>
                    <a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'text-purple-400' : 'dark-text' }} hover:text-purple-400 transition duration-300">
                        Projects
                    </a>
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'text-purple-400' : 'dark-text' }} hover:text-purple-400 transition duration-300">
                        Contact
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="dark-text hover:text-purple-400 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden dark-card border-t dark-border">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md {{ request()->routeIs('home') ? 'text-purple-400 bg-purple-900 bg-opacity-20' : 'dark-text' }} hover:text-purple-400 hover:bg-purple-900 hover:bg-opacity-20">
                    Home
                </a>
                <a href="{{ route('aboutme') }}" class="block px-3 py-2 rounded-md {{ request()->routeIs('aboutme') ? 'text-purple-400 bg-purple-900 bg-opacity-20' : 'dark-text' }} hover:text-purple-400 hover:bg-purple-900 hover:bg-opacity-20">
                    About Me
                </a>
                <a href="{{ route('skills') }}" class="block px-3 py-2 rounded-md {{ request()->routeIs('skills') ? 'text-purple-400 bg-purple-900 bg-opacity-20' : 'dark-text' }} hover:text-purple-400 hover:bg-purple-900 hover:bg-opacity-20">
                    Skills
                </a>
                <a href="{{ route('projects') }}" class="block px-3 py-2 rounded-md {{ request()->routeIs('projects') ? 'text-purple-400 bg-purple-900 bg-opacity-20' : 'dark-text' }} hover:text-purple-400 hover:bg-purple-900 hover:bg-opacity-20">
                    Projects
                </a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md {{ request()->routeIs('contact') ? 'text-purple-400 bg-purple-900 bg-opacity-20' : 'dark-text' }} hover:text-purple-400 hover:bg-purple-900 hover:bg-opacity-20">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="gradient-bg text-white py-8 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-lg font-semibold mb-2">Muhamad Asnal Aditya</p>
                <p class="text-sm opacity-90">&copy; 2024 All rights reserved.</p>
                <div class="flex justify-center space-x-6 mt-4">
                    <a href="#" class="hover:scale-110 transition transform duration-300">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a href="#" class="hover:scale-110 transition transform duration-300">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a href="#" class="hover:scale-110 transition transform duration-300">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>