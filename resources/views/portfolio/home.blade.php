@extends('layouts.app')

@section('title', 'Home - Muhamad Asnal Aditya')

@section('content')
<div class="gradient-bg min-h-screen flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-white space-y-6 animate-fade-in">
                <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                    Hi, I'm <br>
                    <span class="text-yellow-300">Muhamad Asnal Aditya</span>
                </h1>
                <p class="text-xl md:text-2xl opacity-90">
                    Full Stack Developer | Web Enthusiast
                </p>
                <p class="text-lg opacity-80 leading-relaxed">
                    Saya adalah mahasiswa semester 5 Program Studi Teknik Komputer yang memiliki ketertarikan tinggi pada dunia pemrograman, jaringan, dan pengembangan sistem berbasis IoT. Saya senang mempelajari teknologi baru dan terus mengasah kemampuan dalam membangun solusi digital yang bermanfaat dan efisien.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="{{ route('projects') }}" class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:bg-yellow-300 hover:text-purple-700 transition duration-300 shadow-lg">
                        View Projects
                    </a>
                    <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition duration-300">
                        Contact Me
                    </a>
                </div>
            </div>
            
            <div class="flex justify-center">
                <div class="relative">
                    <!-- Container Foto Profil -->
                    <div class="w-72 h-72 md:w-96 md:h-96 bg-gray-800 rounded-full shadow-2xl overflow-hidden border-4 border-purple-500 relative">
                        <!-- Foto Profil -->
                        <img 
                            src="{{ asset('images/potokuu.jpeg') }}" 
                            alt="Muhamad Asnal Aditya" 
                            class="w-full h-full object-cover"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >
                        <!-- Fallback jika foto tidak ada -->
                        <div class="hidden w-full h-full items-center justify-center bg-gradient-to-br from-purple-600 to-blue-700">
                            <div class="text-center text-white">
                                <i class="fas fa-user-circle text-8xl opacity-70 mb-4"></i>
                                <p class="text-lg font-semibold">Muhamad Asnal Aditya</p>
                                <p class="text-sm opacity-80">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Badge Experience dengan Foto Kecil -->
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 rounded-2xl shadow-2xl border-4 border-white overflow-hidden transform hover:scale-110 transition duration-300">
                        <img 
                            src="{{ asset('images/profile-photo.jpg') }}" 
                            alt="Muhamad Asnal Aditya" 
                            class="w-full h-full object-cover"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >
                        <!-- Fallback untuk badge -->
                        <div class="hidden w-full h-full items-center justify-center gradient-bg text-white text-xs font-bold">
                            1+ Years
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    </div>

                    <!-- Floating elements for visual interest -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-purple-400 rounded-full opacity-70 animate-pulse"></div>
                    <div class="absolute top-1/2 -right-8 w-6 h-6 bg-yellow-300 rounded-full opacity-80 animate-bounce"></div>
                    <div class="absolute bottom-8 -left-6 w-5 h-5 bg-green-400 rounded-full opacity-60 animate-ping"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Stats Section -->
<div class="py-20 dark-card">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="p-6 transform hover:scale-105 transition duration-300">
                <div class="text-4xl md:text-5xl font-bold text-purple-400 mb-2 relative">
                    1+
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-purple-400 rounded-full"></div>
                </div>
                <div class="dark-text-secondary mt-4">Years Experience</div>
            </div>
            <div class="p-6 transform hover:scale-105 transition duration-300">
                <div class="text-4xl md:text-5xl font-bold text-purple-400 mb-2 relative">
                    2+
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-purple-400 rounded-full"></div>
                </div>
                <div class="dark-text-secondary mt-4">Projects Done</div>
            </div>
            <div class="p-6 transform hover:scale-105 transition duration-300">
                <div class="text-4xl md:text-5xl font-bold text-purple-400 mb-2 relative">
                    0+
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-purple-400 rounded-full"></div>
                </div>
                <div class="dark-text-secondary mt-4">Happy Clients</div>
            </div>
            <div class="p-6 transform hover:scale-105 transition duration-300">
                <div class="text-4xl md:text-5xl font-bold text-purple-400 mb-2 relative">
                    15+
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-purple-400 rounded-full"></div>
                </div>
                <div class="dark-text-secondary mt-4">Technologies</div>
            </div>
        </div>
    </div>
</div>

<!-- Featured Skills Preview -->
<div class="py-20 dark-bg border-t dark-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold dark-text mb-4">Technologies I Work With</h2>
            <p class="dark-text-secondary max-w-2xl mx-auto">Modern tools and technologies to bring your ideas to life</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            @php
                $skills = [
                    ['icon' => 'fab fa-html5', 'color' => 'text-orange-500', 'name' => 'HTML5'],
                    ['icon' => 'fab fa-css3-alt', 'color' => 'text-blue-500', 'name' => 'CSS3'],
                    ['icon' => 'fab fa-js', 'color' => 'text-yellow-400', 'name' => 'JavaScript'],
                    ['icon' => 'fab fa-php', 'color' => 'text-purple-500', 'name' => 'PHP'],
                    ['icon' => 'fab fa-laravel', 'color' => 'text-red-500', 'name' => 'Laravel'],
                    ['icon' => 'fab fa-react', 'color' => 'text-cyan-400', 'name' => 'React'],
                    ['icon' => 'fab fa-node-js', 'color' => 'text-green-600', 'name' => 'Node.js'],
                    ['icon' => 'fas fa-database', 'color' => 'text-blue-400', 'name' => 'MySQL'],
                    ['icon' => 'fab fa-git-alt', 'color' => 'text-orange-600', 'name' => 'Git'],
                ];
            @endphp
            @foreach($skills as $skill)
            <div class="dark-card p-6 rounded-xl text-center transform hover:scale-105 hover:dark-card-hover transition duration-300 border dark-border">
                <i class="{{ $skill['icon'] }} {{ $skill['color'] }} text-4xl mb-3"></i>
                <div class="dark-text font-medium">{{ $skill['name'] }}</div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('skills') }}" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition duration-300 font-semibold">
                View All Skills
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 1s ease-out;
    }
    
    /* Custom scrollbar for dark theme */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #1e1e1e;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #4c51bf;
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #667eea;
    }

    /* Smooth image loading */
    img {
        transition: opacity 0.3s ease;
    }
</style>

<script>
    // Preload image for better performance
    document.addEventListener('DOMContentLoaded', function() {
        const profileImage = new Image();
        profileImage.src = "{{ asset('images/profile-photo.jpg') }}";
        
        profileImage.onload = function() {
            console.log('Profile image loaded successfully');
        };
        
        profileImage.onerror = function() {
            console.log('Profile image failed to load, using fallback');
        };
    });
</script>
@endsection