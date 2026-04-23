@extends('layouts.app')

@section('title', 'Skills - Muhamad Asnal Aditya')

@section('content')
<div class="py-20 bg-gradient-to-br from-gray-900 to-purple-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">My Skills</h1>
            <p class="dark-text-secondary text-lg max-w-2xl mx-auto">
                Here are the technologies and tools I work with to bring ideas to life
            </p>
            <div class="w-24 h-1 bg-purple-400 mx-auto rounded-full mt-6"></div>
        </div>

        <!-- Technical Skills -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-white mb-8 text-center">Technical Skills</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Frontend -->
                <div class="dark-card rounded-2xl shadow-xl p-8 border border-gray-700 hover:border-blue-500 transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-900 bg-opacity-50 p-3 rounded-lg mr-4 border border-blue-500">
                            <i class="fas fa-laptop-code text-2xl text-blue-400"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Frontend Development</h3>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">HTML & CSS</span>
                                <span class="text-purple-400 font-semibold">95%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">JavaScript</span>
                                <span class="text-purple-400 font-semibold">90%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">React.js</span>
                                <span class="text-purple-400 font-semibold">85%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">Vue.js</span>
                                <span class="text-purple-400 font-semibold">80%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">Tailwind CSS</span>
                                <span class="text-purple-400 font-semibold">92%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend -->
                <div class="dark-card rounded-2xl shadow-xl p-8 border border-gray-700 hover:border-green-500 transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-900 bg-opacity-50 p-3 rounded-lg mr-4 border border-green-500">
                            <i class="fas fa-server text-2xl text-green-400"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Backend Development</h3>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">PHP & Laravel</span>
                                <span class="text-purple-400 font-semibold">93%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 93%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">Node.js</span>
                                <span class="text-purple-400 font-semibold">82%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 82%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">MySQL</span>
                                <span class="text-purple-400 font-semibold">88%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">PostgreSQL</span>
                                <span class="text-purple-400 font-semibold">80%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">REST API</span>
                                <span class="text-purple-400 font-semibold">90%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tools & Technologies -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-white mb-8 text-center">Tools & Technologies</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="dark-card rounded-xl shadow-lg p-6 text-center hover:shadow-2xl transition duration-300 hover:-translate-y-2 border border-gray-700 hover:border-orange-500 group">
                    <div class="bg-orange-900 bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition duration-300">
                        <i class="fab fa-git-alt text-3xl text-orange-400"></i>
                    </div>
                    <p class="font-semibold text-white">Git</p>
                    <p class="text-xs dark-text-secondary mt-1">Version Control</p>
                </div>
                <div class="dark-card rounded-xl shadow-lg p-6 text-center hover:shadow-2xl transition duration-300 hover:-translate-y-2 border border-gray-700 hover:border-gray-500 group">
                    <div class="bg-gray-800 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition duration-300">
                        <i class="fab fa-github text-3xl text-white"></i>
                    </div>
                    <p class="font-semibold text-white">GitHub</p>
                    <p class="text-xs dark-text-secondary mt-1">Code Hosting</p>
                </div>
                <div class="dark-card rounded-xl shadow-lg p-6 text-center hover:shadow-2xl transition duration-300 hover:-translate-y-2 border border-gray-700 hover:border-blue-500 group">
                    <div class="bg-blue-900 bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition duration-300">
                        <i class="fab fa-docker text-3xl text-blue-400"></i>
                    </div>
                    <p class="font-semibold text-white">Docker</p>
                    <p class="text-xs dark-text-secondary mt-1">Containerization</p>
                </div>
                <div class="dark-card rounded-xl shadow-lg p-6 text-center hover:shadow-2xl transition duration-300 hover:-translate-y-2 border border-gray-700 hover:border-purple-500 group">
                    <div class="bg-purple-900 bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition duration-300">
                        <i class="fab fa-figma text-3xl text-purple-400"></i>
                    </div>
                    <p class="font-semibold text-white">Figma</p>
                    <p class="text-xs dark-text-secondary mt-1">Design Tool</p>
                </div>
                <div class="dark-card rounded-xl shadow-lg p-6 text-center hover:shadow-2xl transition duration-300 hover:-translate-y-2 border border-gray-700 hover:border-green-500 group">
                    <div class="bg-green-900 bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-database text-3xl text-green-400"></i>
                    </div>
                    <p class="font-semibold text-white">MongoDB</p>
                    <p class="text-xs dark-text-secondary mt-1">NoSQL Database</p>
                </div>
                <div class="dark-card rounded-xl shadow-lg p-6 text-center hover:shadow-2xl transition duration-300 hover:-translate-y-2 border border-gray-700 hover:border-yellow-500 group">
                    <div class="bg-yellow-900 bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition duration-300">
                        <i class="fab fa-aws text-3xl text-yellow-400"></i>
                    </div>
                    <p class="font-semibold text-white">AWS</p>
                    <p class="text-xs dark-text-secondary mt-1">Cloud Services</p>
                </div>
            </div>
        </div>

        <!-- Additional Skills -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-white mb-8 text-center">Additional Skills</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mobile & Others -->
                <div class="dark-card rounded-2xl shadow-xl p-8 border border-gray-700 hover:border-pink-500 transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-pink-900 bg-opacity-50 p-3 rounded-lg mr-4 border border-pink-500">
                            <i class="fas fa-mobile-alt text-2xl text-pink-400"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Mobile & Others</h3>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">React Native</span>
                                <span class="text-purple-400 font-semibold">75%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">TypeScript</span>
                                <span class="text-purple-400 font-semibold">85%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">GraphQL</span>
                                <span class="text-purple-400 font-semibold">70%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DevOps -->
                <div class="dark-card rounded-2xl shadow-xl p-8 border border-gray-700 hover:border-red-500 transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="bg-red-900 bg-opacity-50 p-3 rounded-lg mr-4 border border-red-500">
                            <i class="fas fa-cloud text-2xl text-red-400"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white">DevOps & Cloud</h3>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">CI/CD</span>
                                <span class="text-purple-400 font-semibold">78%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 78%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">Linux/Unix</span>
                                <span class="text-purple-400 font-semibold">82%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 82%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-white">Nginx</span>
                                <span class="text-purple-400 font-semibold">75%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="gradient-bg h-3 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Soft Skills -->
        <div>
            <h2 class="text-3xl font-bold text-white mb-8 text-center">Soft Skills</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gradient-to-br from-purple-600 to-purple-800 rounded-2xl shadow-xl p-8 text-white text-center hover:scale-105 transition duration-300 border border-purple-500">
                    <div class="bg-white bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Team Collaboration</h3>
                    <p class="opacity-90 text-sm">Working effectively in team environments and agile methodologies</p>
                </div>
                <div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl shadow-xl p-8 text-white text-center hover:scale-105 transition duration-300 border border-blue-500">
                    <div class="bg-white bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Problem Solving</h3>
                    <p class="opacity-90 text-sm">Finding creative and efficient solutions to complex challenges</p>
                </div>
                <div class="bg-gradient-to-br from-green-600 to-green-800 rounded-2xl shadow-xl p-8 text-white text-center hover:scale-105 transition duration-300 border border-green-500">
                    <div class="bg-white bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-comments text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Communication</h3>
                    <p class="opacity-90 text-sm">Clear and effective communication with teams and stakeholders</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <div class="dark-card rounded-2xl p-8 border border-purple-500 max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-white mb-4">Ready to Work Together?</h3>
                <p class="dark-text-secondary mb-6">Let's discuss how my skills can help bring your project to life</p>
                <a href="{{ route('contact') }}" class="gradient-bg text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg hover:scale-105 transition duration-300 inline-block">
                    Get In Touch
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .skill-bar {
        transition: all 0.8s ease-in-out;
    }
    
    .skill-item:hover .skill-bar {
        transform: scaleX(1.02);
    }
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .animate-slide-in {
        animation: slideIn 0.6s ease-out;
    }
</style>

<script>
    // Animate skill bars on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const skillBars = document.querySelectorAll('.skill-bar');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'slideIn 0.8s ease-out forwards';
                }
            });
        }, { threshold: 0.3 });
        
        skillBars.forEach(bar => {
            observer.observe(bar);
        });
    });
</script>
@endsection