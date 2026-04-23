@extends('layouts.app')

@section('title', 'Projects - Muhamad Asnal Aditya')

@section('content')
<div class="py-20 bg-gradient-to-br from-gray-900 to-purple-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">My Projects</h1>
            <p class="dark-text-secondary text-lg max-w-2xl mx-auto">
                Here are some of my recent works that showcase my skills and passion for development
            </p>
            <div class="w-24 h-1 bg-purple-400 mx-auto rounded-full mt-6"></div>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 gradient-bg text-white rounded-full font-semibold hover:shadow-lg transition duration-300 border border-purple-500">
                All Projects
            </button>
            <button class="px-6 py-2 dark-card text-gray-300 rounded-full font-semibold hover:gradient-bg hover:text-white transition duration-300 border border-gray-600 hover:border-purple-500">
                Web Apps
            </button>
            <button class="px-6 py-2 dark-card text-gray-300 rounded-full font-semibold hover:gradient-bg hover:text-white transition duration-300 border border-gray-600 hover:border-purple-500">
                Mobile Apps
            </button>
            <button class="px-6 py-2 dark-card text-gray-300 rounded-full font-semibold hover:gradient-bg hover:text-white transition duration-300 border border-gray-600 hover:border-purple-500">
                E-Commerce
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="dark-card rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300 group border border-gray-700 hover:border-purple-500">
                <div class="relative overflow-hidden h-64 bg-gradient-to-br from-purple-600 to-blue-700">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-white text-6xl opacity-30"></i>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="flex gap-4">
                            <a href="#" class="bg-white text-purple-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:rotate-12">
                                <i class="fas fa-eye text-xl"></i>
                            </a>
                            <a href="#" class="bg-white text-purple-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:-rotate-12">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Featured</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">E-Commerce Platform</h3>
                    <p class="dark-text-secondary mb-4">Full-featured online shopping platform with payment integration and admin dashboard</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-900 text-purple-300 px-3 py-1 rounded-full text-sm font-semibold border border-purple-700">Laravel</span>
                        <span class="bg-blue-900 text-blue-300 px-3 py-1 rounded-full text-sm font-semibold border border-blue-700">Vue.js</span>
                        <span class="bg-green-900 text-green-300 px-3 py-1 rounded-full text-sm font-semibold border border-green-700">MySQL</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="dark-card rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300 group border border-gray-700 hover:border-green-500">
                <div class="relative overflow-hidden h-64 bg-gradient-to-br from-green-600 to-teal-700">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-tasks text-white text-6xl opacity-30"></i>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="flex gap-4">
                            <a href="#" class="bg-white text-green-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:rotate-12">
                                <i class="fas fa-eye text-xl"></i>
                            </a>
                            <a href="#" class="bg-white text-green-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:-rotate-12">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Task Management System</h3>
                    <p class="dark-text-secondary mb-4">Project management tool with real-time collaboration and team features</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-900 text-purple-300 px-3 py-1 rounded-full text-sm font-semibold border border-purple-700">React</span>
                        <span class="bg-blue-900 text-blue-300 px-3 py-1 rounded-full text-sm font-semibold border border-blue-700">Node.js</span>
                        <span class="bg-green-900 text-green-300 px-3 py-1 rounded-full text-sm font-semibold border border-green-700">MongoDB</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="dark-card rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300 group border border-gray-700 hover:border-pink-500">
                <div class="relative overflow-hidden h-64 bg-gradient-to-br from-pink-600 to-red-700">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-blog text-white text-6xl opacity-30"></i>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="flex gap-4">
                            <a href="#" class="bg-white text-pink-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:rotate-12">
                                <i class="fas fa-eye text-xl"></i>
                            </a>
                            <a href="#" class="bg-white text-pink-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:-rotate-12">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Blog Platform</h3>
                    <p class="dark-text-secondary mb-4">Modern blogging platform with SEO optimization and social features</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-900 text-purple-300 px-3 py-1 rounded-full text-sm font-semibold border border-purple-700">Laravel</span>
                        <span class="bg-blue-900 text-blue-300 px-3 py-1 rounded-full text-sm font-semibold border border-blue-700">Tailwind</span>
                        <span class="bg-green-900 text-green-300 px-3 py-1 rounded-full text-sm font-semibold border border-green-700">PostgreSQL</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="dark-card rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300 group border border-gray-700 hover:border-orange-500">
                <div class="relative overflow-hidden h-64 bg-gradient-to-br from-orange-600 to-yellow-700">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-mobile-alt text-white text-6xl opacity-30"></i>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="flex gap-4">
                            <a href="#" class="bg-white text-orange-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:rotate-12">
                                <i class="fas fa-eye text-xl"></i>
                            </a>
                            <a href="#" class="bg-white text-orange-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:-rotate-12">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Food Delivery App</h3>
                    <p class="dark-text-secondary mb-4">Mobile application for ordering food with real-time tracking and payments</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-900 text-purple-300 px-3 py-1 rounded-full text-sm font-semibold border border-purple-700">React Native</span>
                        <span class="bg-blue-900 text-blue-300 px-3 py-1 rounded-full text-sm font-semibold border border-blue-700">Firebase</span>
                        <span class="bg-green-900 text-green-300 px-3 py-1 rounded-full text-sm font-semibold border border-green-700">API</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="dark-card rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300 group border border-gray-700 hover:border-indigo-500">
                <div class="relative overflow-hidden h-64 bg-gradient-to-br from-indigo-600 to-purple-700">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-chart-line text-white text-6xl opacity-30"></i>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="flex gap-4">
                            <a href="#" class="bg-white text-indigo-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:rotate-12">
                                <i class="fas fa-eye text-xl"></i>
                            </a>
                            <a href="#" class="bg-white text-indigo-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:-rotate-12">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Analytics Dashboard</h3>
                    <p class="dark-text-secondary mb-4">Business intelligence dashboard with advanced data visualization</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-900 text-purple-300 px-3 py-1 rounded-full text-sm font-semibold border border-purple-700">Vue.js</span>
                        <span class="bg-blue-900 text-blue-300 px-3 py-1 rounded-full text-sm font-semibold border border-blue-700">Chart.js</span>
                        <span class="bg-green-900 text-green-300 px-3 py-1 rounded-full text-sm font-semibold border border-green-700">Laravel</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="dark-card rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300 group border border-gray-700 hover:border-cyan-500">
                <div class="relative overflow-hidden h-64 bg-gradient-to-br from-cyan-600 to-blue-700">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-6xl opacity-30"></i>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <div class="flex gap-4">
                            <a href="#" class="bg-white text-cyan-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:rotate-12">
                                <i class="fas fa-eye text-xl"></i>
                            </a>
                            <a href="#" class="bg-white text-cyan-600 p-4 rounded-full hover:scale-110 transition duration-300 transform hover:-rotate-12">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-cyan-500 text-white px-3 py-1 rounded-full text-sm font-semibold">New</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Learning Management System</h3>
                    <p class="dark-text-secondary mb-4">Online education platform with course management and progress tracking</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-900 text-purple-300 px-3 py-1 rounded-full text-sm font-semibold border border-purple-700">Laravel</span>
                        <span class="bg-blue-900 text-blue-300 px-3 py-1 rounded-full text-sm font-semibold border border-blue-700">Vue.js</span>
                        <span class="bg-green-900 text-green-300 px-3 py-1 rounded-full text-sm font-semibold border border-green-700">MySQL</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="dark-card rounded-2xl p-6 text-center border border-gray-700">
                <div class="text-3xl font-bold text-purple-400 mb-2">50+</div>
                <div class="dark-text-secondary">Projects Completed</div>
            </div>
            <div class="dark-card rounded-2xl p-6 text-center border border-gray-700">
                <div class="text-3xl font-bold text-blue-400 mb-2">30+</div>
                <div class="dark-text-secondary">Happy Clients</div>
            </div>
            <div class="dark-card rounded-2xl p-6 text-center border border-gray-700">
                <div class="text-3xl font-bold text-green-400 mb-2">15+</div>
                <div class="dark-text-secondary">Technologies Used</div>
            </div>
            <div class="dark-card rounded-2xl p-6 text-center border border-gray-700">
                <div class="text-3xl font-bold text-orange-400 mb-2">3+</div>
                <div class="dark-text-secondary">Years Experience</div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <div class="dark-card rounded-2xl p-8 border border-purple-500 max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-white mb-4">Have a Project in Mind?</h3>
                <p class="dark-text-secondary text-lg mb-6">Let's work together to bring your ideas to life</p>
                <a href="{{ route('contact') }}" class="inline-block gradient-bg text-white px-8 py-4 rounded-full font-semibold hover:shadow-2xl transition duration-300 transform hover:scale-105 border border-purple-500">
                    Let's Create Something Amazing
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .project-card {
        transition: all 0.3s ease;
    }
    
    .project-card:hover {
        transform: translateY(-8px);
    }
    
    .tech-tag {
        transition: all 0.3s ease;
    }
    
    .project-card:hover .tech-tag {
        transform: scale(1.05);
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .floating {
        animation: float 3s ease-in-out infinite;
    }
</style>

<script>
    // Add floating animation to featured projects
    document.addEventListener('DOMContentLoaded', function() {
        const featuredProjects = document.querySelectorAll('.project-card');
        
        featuredProjects.forEach((project, index) => {
            // Add delay for staggered animation
            project.style.animationDelay = `${index * 0.1}s`;
        });
        
        // Filter functionality
        const filterButtons = document.querySelectorAll('button');
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('gradient-bg', 'text-white', 'border-purple-500');
                    btn.classList.add('dark-card', 'text-gray-300', 'border-gray-600');
                });
                
                // Add active class to clicked button
                this.classList.remove('dark-card', 'text-gray-300', 'border-gray-600');
                this.classList.add('gradient-bg', 'text-white', 'border-purple-500');
            });
        });
    });
</script>
@endsection