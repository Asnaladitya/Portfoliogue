@extends('layouts.app')

@section('title', 'About Me - Muhamad Asnal Aditya')

@section('content')
<div class="py-20 bg-gradient-to-br from-gray-900 to-purple-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">About Me</h1>
            <div class="w-24 h-1 bg-purple-400 mx-auto rounded-full"></div>
            <p class="dark-text-secondary mt-6 max-w-2xl mx-auto text-lg">
                Get to know more about my journey, education, and experiences
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div class="flex justify-center">
                <div class="relative">
                    <div class="relative overflow-hidden rounded-3xl shadow-2xl border-4 border-purple-500 w-[380px] md:w-[450px] lg:w-[500px] mx-auto">
    <img src="{{ asset('images/photopp.png') }}" 
         alt="Muhamad Asnal Aditya" 
         class="w-full h-auto object-cover transform hover:scale-105 transition duration-500">
    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
</div>
                    <!-- Floating elements -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-yellow-400 rounded-full opacity-80 animate-pulse"></div>
                    <div class="absolute -bottom-4 left-10 w-6 h-6 bg-purple-400 rounded-full opacity-70 animate-bounce"></div>
                </div>
            </div>

            <div class="space-y-6">
                <h2 class="text-3xl font-bold text-white">Hello! I'm <span class="text-purple-400">Muhamad Asnal Aditya</span></h2>
                <p class="dark-text-secondary leading-relaxed text-lg">
                    Saya seorang Full Stack Developer yang penuh semangat dengan pengalaman lebih dari 3 tahun dalam membangun aplikasi web.
                    Perjalanan saya dalam pemrograman dimulai dengan rasa ingin tahu dan telah berkembang menjadi hasrat yang mendalam untuk menciptakan solusi digital yang inovatif.
                </p>
                <p class="dark-text-secondary leading-relaxed text-lg">
                    Saya berspesialisasi dalam teknologi web modern termasuk Laravel, React, Vue.js, dan Node.js.
                    Saya percaya pada penulisan kode yang bersih dan mudah dipelihara, serta menciptakan pengalaman pengguna yang membuat perbedaan.
                </p>
                <p class="dark-text-secondary leading-relaxed text-lg">
                    Saat saya tidak sedang membuat kode, Anda dapat menemukan saya menjelajahi teknologi baru, berkontribusi pada proyek sumber terbuka,atau berbagi pengetahuan dengan komunitas pengembang.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="{{ route('contact') }}" class="gradient-bg text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg hover:scale-105 transition duration-300 shadow-lg">
                        Let's Talk
                    </a>
                    <a href="#" class="border-2 border-purple-400 text-purple-400 px-8 py-3 rounded-full font-semibold hover:bg-purple-400 hover:text-white transition duration-300">
                        Download CV
                    </a>
                </div>
            </div>
        </div>

        <!-- Education & Experience -->
        <div class="grid md:grid-cols-2 gap-8 mb-20">
            <!-- Education -->
            <div class="dark-card rounded-2xl shadow-xl p-8 border border-gray-700 hover:border-purple-500 transition duration-300">
                <div class="flex items-center mb-6">
                    <div class="bg-purple-900 bg-opacity-50 p-4 rounded-full mr-4 border border-purple-500">
                        <i class="fas fa-graduation-cap text-3xl text-purple-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Education</h3>
                </div>
                <div class="space-y-6">
                    <div class="border-l-4 border-purple-400 pl-6 py-2 hover:bg-purple-900 hover:bg-opacity-20 rounded-r-lg transition duration-300">
                        <p class="text-purple-400 font-semibold">2018 - 2022</p>
                        <h4 class="text-xl font-bold text-white">Bachelor of Computer Science</h4>
                        <p class="dark-text-secondary">University of Technology</p>
                        <p class="text-sm dark-text-secondary mt-1">GPA: 3.8/4.0</p>
                    </div>
                    <div class="border-l-4 border-purple-300 pl-6 py-2 hover:bg-purple-900 hover:bg-opacity-20 rounded-r-lg transition duration-300">
                        <p class="text-purple-400 font-semibold">2015 - 2018</p>
                        <h4 class="text-xl font-bold text-white">High School</h4>
                        <p class="dark-text-secondary">Science Major</p>
                        <p class="text-sm dark-text-secondary mt-1">Focus on Mathematics and Physics</p>
                    </div>
                </div>
            </div>

            <!-- Experience -->
            <div class="dark-card rounded-2xl shadow-xl p-8 border border-gray-700 hover:border-blue-500 transition duration-300">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-900 bg-opacity-50 p-4 rounded-full mr-4 border border-blue-500">
                        <i class="fas fa-briefcase text-3xl text-blue-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Experience</h3>
                </div>
                <div class="space-y-6">
                    <div class="border-l-4 border-blue-400 pl-6 py-2 hover:bg-blue-900 hover:bg-opacity-20 rounded-r-lg transition duration-300">
                        <p class="text-blue-400 font-semibold">2022 - Present</p>
                        <h4 class="text-xl font-bold text-white">Senior Full Stack Developer</h4>
                        <p class="dark-text-secondary">Tech Company Inc.</p>
                        <p class="text-sm dark-text-secondary mt-1">Leading development teams and architecting solutions</p>
                    </div>
                    <div class="border-l-4 border-blue-300 pl-6 py-2 hover:bg-blue-900 hover:bg-opacity-20 rounded-r-lg transition duration-300">
                        <p class="text-blue-400 font-semibold">2020 - 2022</p>
                        <h4 class="text-xl font-bold text-white">Web Developer</h4>
                        <p class="dark-text-secondary">Digital Agency</p>
                        <p class="text-sm dark-text-secondary mt-1">Full-stack web development and client projects</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Interests -->
        <div class="dark-card rounded-2xl shadow-xl p-8 border border-gray-700">
            <h3 class="text-2xl font-bold text-white mb-8 text-center">My Interests & Hobbies</h3>
            <p class="dark-text-secondary text-center mb-8 max-w-2xl mx-auto">
                Beyond coding, I enjoy various activities that keep me inspired and balanced
            </p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center p-6 hover:bg-purple-900 hover:bg-opacity-20 rounded-xl transition duration-300 group border border-gray-700 hover:border-purple-500">
                    <div class="bg-purple-900 bg-opacity-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-code text-2xl text-purple-400"></i>
                    </div>
                    <p class="font-semibold text-white">Coding</p>
                    <p class="text-sm dark-text-secondary mt-2">Open Source & Personal Projects</p>
                </div>
                <div class="text-center p-6 hover:bg-blue-900 hover:bg-opacity-20 rounded-xl transition duration-300 group border border-gray-700 hover:border-blue-500">
                    <div class="bg-blue-900 bg-opacity-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-book text-2xl text-blue-400"></i>
                    </div>
                    <p class="font-semibold text-white">Reading</p>
                    <p class="text-sm dark-text-secondary mt-2">Tech Books & Sci-Fi Novels</p>
                </div>
                <div class="text-center p-6 hover:bg-green-900 hover:bg-opacity-20 rounded-xl transition duration-300 group border border-gray-700 hover:border-green-500">
                    <div class="bg-green-900 bg-opacity-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-gamepad text-2xl text-green-400"></i>
                    </div>
                    <p class="font-semibold text-white">Gaming</p>
                    <p class="text-sm dark-text-secondary mt-2">Strategy & RPG Games</p>
                </div>
                <div class="text-center p-6 hover:bg-orange-900 hover:bg-opacity-20 rounded-xl transition duration-300 group border border-gray-700 hover:border-orange-500">
                    <div class="bg-orange-900 bg-opacity-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-plane text-2xl text-orange-400"></i>
                    </div>
                    <p class="font-semibold text-white">Traveling</p>
                    <p class="text-sm dark-text-secondary mt-2">Exploring New Cultures & Food</p>
                </div>
            </div>
        </div>

        <!-- Fun Facts -->
        <div class="mt-20 text-center">
            <h3 class="text-2xl font-bold text-white mb-8">Fun Facts</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="dark-card p-6 rounded-xl border border-gray-700">
                    <div class="text-3xl font-bold text-purple-400 mb-2">1000+</div>
                    <div class="dark-text-secondary">Cups of Coffee</div>
                </div>
                <div class="dark-card p-6 rounded-xl border border-gray-700">
                    <div class="text-3xl font-bold text-blue-400 mb-2">50+</div>
                    <div class="dark-text-secondary">Projects Completed</div>
                </div>
                <div class="dark-card p-6 rounded-xl border border-gray-700">
                    <div class="text-3xl font-bold text-green-400 mb-2">10+</div>
                    <div class="dark-text-secondary">Countries Visited</div>
                </div>
                <div class="dark-card p-6 rounded-xl border border-gray-700">
                    <div class="text-3xl font-bold text-orange-400 mb-2">24/7</div>
                    <div class="dark-text-secondary">Learning Mindset</div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-lift {
        transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
    }
    
    /* Smooth fade-in animation for sections */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out;
    }
</style>
@endsection