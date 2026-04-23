@extends('layouts.app')

@section('title', 'Contact - Muhamad Asnal Aditya')

@section('content')
<div class="py-20 bg-gradient-to-br from-gray-900 to-purple-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Get In Touch</h1>
            <p class="dark-text-secondary text-lg max-w-2xl mx-auto">
                Have a project in mind or just want to say hello? Feel free to reach out!
            </p>
            <div class="w-24 h-1 bg-purple-400 mx-auto rounded-full mt-6"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-start">
            <!-- Contact Information -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6">Contact Information</h2>
                    <p class="dark-text-secondary text-lg mb-8">
                        I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.
                    </p>
                </div>

                <!-- Contact Cards -->
                <div class="space-y-6">
                    <div class="dark-card rounded-2xl shadow-lg p-6 flex items-start hover:shadow-2xl transition duration-300 border border-gray-700 hover:border-purple-500 group">
                        <div class="bg-purple-900 bg-opacity-50 p-4 rounded-full mr-6 border border-purple-500 group-hover:scale-110 transition duration-300">
                            <i class="fas fa-envelope text-2xl text-purple-400"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Email</h3>
                            <a href="mailto:asnal.aditya@example.com" class="text-purple-400 hover:text-purple-300 transition duration-300">
                                asnal.aditya@gmail.com
                            </a>
                            <p class="text-sm dark-text-secondary mt-1">Response within 24 hours</p>
                        </div>
                    </div>

                    <div class="dark-card rounded-2xl shadow-lg p-6 flex items-start hover:shadow-2xl transition duration-300 border border-gray-700 hover:border-blue-500 group">
                        <div class="bg-blue-900 bg-opacity-50 p-4 rounded-full mr-6 border border-blue-500 group-hover:scale-110 transition duration-300">
                            <i class="fas fa-phone text-2xl text-blue-400"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Phone</h3>
                            <a href="tel:+6281234567890" class="text-blue-400 hover:text-blue-300 transition duration-300">
                                +62 851-9826-2902
                            </a>
                            <p class="text-sm dark-text-secondary mt-1">Mon - Fri, 9AM - 6PM</p>
                        </div>
                    </div>

                    <div class="dark-card rounded-2xl shadow-lg p-6 flex items-start hover:shadow-2xl transition duration-300 border border-gray-700 hover:border-green-500 group">
                        <div class="bg-green-900 bg-opacity-50 p-4 rounded-full mr-6 border border-green-500 group-hover:scale-110 transition duration-300">
                            <i class="fas fa-map-marker-alt text-2xl text-green-400"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Location</h3>
                            <p class="text-gray-300">Tegal, Indonesia</p>
                            <p class="text-sm dark-text-secondary mt-1">Available for remote work worldwide</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-gradient-to-br from-purple-700 to-blue-700 rounded-2xl shadow-xl p-8 text-white border border-purple-500">
                    <h3 class="text-2xl font-bold mb-6">Follow Me</h3>
                    <p class="dark-text-secondary mb-6">Connect with me on social media for updates and insights</p>
                    <div class="flex gap-4">
                        <a href="#" class="bg-white bg-opacity-10 w-14 h-14 rounded-full flex items-center justify-center hover:scale-110 transition duration-300 border border-white border-opacity-20 hover:border-purple-400 group">
                            <i class="fab fa-github text-2xl group-hover:text-purple-300"></i>
                        </a>
                        <a href="#" class="bg-white bg-opacity-10 w-14 h-14 rounded-full flex items-center justify-center hover:scale-110 transition duration-300 border border-white border-opacity-20 hover:border-blue-400 group">
                            <i class="fab fa-linkedin text-2xl group-hover:text-blue-300"></i>
                        </a>
                        <a href="#" class="bg-white bg-opacity-10 w-14 h-14 rounded-full flex items-center justify-center hover:scale-110 transition duration-300 border border-white border-opacity-20 hover:border-pink-400 group">
                            <i class="fab fa-instagram text-2xl group-hover:text-pink-300"></i>
                        </a>
                        <a href="#" class="bg-white bg-opacity-10 w-14 h-14 rounded-full flex items-center justify-center hover:scale-110 transition duration-300 border border-white border-opacity-20 hover:border-cyan-400 group">
                            <i class="fab fa-twitter text-2xl group-hover:text-cyan-300"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="dark-card rounded-2xl shadow-xl p-8 border border-gray-700">
                <h2 class="text-3xl font-bold text-white mb-6">Send Me a Message</h2>
                <p class="dark-text-secondary mb-6">Fill out the form below and I'll get back to you as soon as possible</p>
                
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-white font-semibold mb-2">Full Name</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="w-full px-4 py-3 bg-gray-800 border-2 border-gray-600 rounded-lg focus:border-purple-500 focus:outline-none transition duration-300 text-white placeholder-gray-400" 
                            placeholder="John Doe"
                            required
                        >
                    </div>

                    <div>
                        <label for="email" class="block text-white font-semibold mb-2">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="w-full px-4 py-3 bg-gray-800 border-2 border-gray-600 rounded-lg focus:border-purple-500 focus:outline-none transition duration-300 text-white placeholder-gray-400" 
                            placeholder="john@example.com"
                            required
                        >
                    </div>

                    <div>
                        <label for="subject" class="block text-white font-semibold mb-2">Subject</label>
                        <input 
                            type="text" 
                            id="subject" 
                            name="subject" 
                            class="w-full px-4 py-3 bg-gray-800 border-2 border-gray-600 rounded-lg focus:border-purple-500 focus:outline-none transition duration-300 text-white placeholder-gray-400" 
                            placeholder="Project Inquiry"
                            required
                        >
                    </div>

                    <div>
                        <label for="message" class="block text-white font-semibold mb-2">Message</label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="6" 
                            class="w-full px-4 py-3 bg-gray-800 border-2 border-gray-600 rounded-lg focus:border-purple-500 focus:outline-none transition duration-300 resize-none text-white placeholder-gray-400" 
                            placeholder="Tell me about your project..."
                            required
                        ></textarea>
                    </div>

                    <button 
                        type="submit" 
                        class="w-full gradient-bg text-white py-4 rounded-lg font-semibold hover:shadow-2xl transition duration-300 transform hover:scale-105 border border-purple-500 group"
                    >
                        <i class="fas fa-paper-plane mr-2 group-hover:rotate-12 transition-transform duration-300"></i>
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Quick Response Section -->
        <div class="mt-16 grid md:grid-cols-3 gap-6">
            <div class="dark-card rounded-2xl p-6 text-center border border-gray-700 hover:border-purple-500 transition duration-300">
                <div class="bg-purple-900 bg-opacity-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-2xl text-purple-400"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Quick Response</h3>
                <p class="dark-text-secondary">Typically replies within 24 hours</p>
            </div>
            
            <div class="dark-card rounded-2xl p-6 text-center border border-gray-700 hover:border-blue-500 transition duration-300">
                <div class="bg-blue-900 bg-opacity-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-globe text-2xl text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Remote Work</h3>
                <p class="dark-text-secondary">Available for projects worldwide</p>
            </div>
            
            <div class="dark-card rounded-2xl p-6 text-center border border-gray-700 hover:border-green-500 transition duration-300">
                <div class="bg-green-900 bg-opacity-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-handshake text-2xl text-green-400"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Collaboration</h3>
                <p class="dark-text-secondary">Open to partnerships and teamwork</p>
            </div>
        </div>

        <!-- Map Section -->
        <div class="mt-16">
            <div class="dark-card rounded-2xl shadow-xl overflow-hidden border border-gray-700">
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 h-96 flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-50"></div>
                    <div class="text-center relative z-10">
                        <div class="bg-purple-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-2xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Tegal, Indonesia</h3>
                        <p class="dark-text-secondary">Based in Indonesia, working with clients worldwide</p>
                        <div class="mt-4 flex justify-center gap-4">
                            <span class="bg-purple-900 bg-opacity-50 text-purple-300 px-3 py-1 rounded-full text-sm">Remote Work</span>
                            <span class="bg-blue-900 bg-opacity-50 text-blue-300 px-3 py-1 rounded-full text-sm">Flexible Hours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .contact-card {
        transition: all 0.3s ease;
    }
    
    .contact-card:hover {
        transform: translateY(-5px);
    }
    
    input:focus, textarea:focus {
        box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.1);
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    
    .pulse-hover:hover {
        animation: pulse 2s infinite;
    }
</style>

<script>
    // Form submission handler with enhanced UX
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitButton = this.querySelector('button[type="submit"]');
        const originalText = submitButton.innerHTML;
        
        // Show loading state
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
        submitButton.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            // Show success message
            submitButton.innerHTML = '<i class="fas fa-check mr-2"></i>Message Sent!';
            submitButton.classList.remove('gradient-bg');
            submitButton.classList.add('bg-green-600');
            
            // Reset form
            this.reset();
            
            // Reset button after 3 seconds
            setTimeout(() => {
                submitButton.innerHTML = originalText;
                submitButton.classList.remove('bg-green-600');
                submitButton.classList.add('gradient-bg');
                submitButton.disabled = false;
            }, 3000);
        }, 2000);
    });
    
    // Add floating animation to contact cards
    document.addEventListener('DOMContentLoaded', function() {
        const contactCards = document.querySelectorAll('.contact-card');
        
        contactCards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.2}s`;
        });
    });
</script>
@endsection