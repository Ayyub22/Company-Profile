@extends('layouts.app')

@section('content')

<div class="bg-[#EADBC8] min-h-screen pt-32 pb-20">
    
    <div class="container mx-auto px-6 md:px-12 max-w-6xl">
        
        <div class="text-center mb-16 space-y-4">
            <h1 class="text-4xl md:text-5xl font-normal text-[#1a1a1a] serif-font">Get In Touch</h1>
            <p class="text-gray-600 text-sm md:text-base max-w-xl mx-auto">
                Have questions about our fragrances? We'd love to hear from you.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            
            <div class="space-y-10">
                
                <h2 class="text-2xl font-normal text-[#1a1a1a] serif-font border-b border-[#3E1A1A]/10 pb-4">
                    Contact Information
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-5 items-start">
                        <div class="flex-shrink-0 w-10 h-10 bg-[#2a2a2a] rounded text-white flex items-center justify-center text-lg shadow-md">
                            📍
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-[#1a1a1a] uppercase tracking-wide mb-1">Address</h3>
                            <p class="text-sm text-gray-600 leading-relaxed max-w-xs">
                                123 Fragrance Avenue, Luxury District, Paris 75001
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-5 items-start">
                        <div class="flex-shrink-0 w-10 h-10 bg-[#2a2a2a] rounded text-white flex items-center justify-center text-lg shadow-md">
                            📞
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-[#1a1a1a] uppercase tracking-wide mb-1">Phone</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                +33 1 234 567 890
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-5 items-start">
                        <div class="flex-shrink-0 w-10 h-10 bg-[#2a2a2a] rounded text-white flex items-center justify-center text-lg shadow-md">
                            ✉️
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-[#1a1a1a] uppercase tracking-wide mb-1">Email</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                myper@gmail.com
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <h3 class="text-lg font-normal text-[#1a1a1a] serif-font mb-4">Opening Hours</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <div class="flex justify-between border-b border-gray-400/20 pb-1">
                            <span>Monday - Friday</span>
                            <span>10:00 - 19:00</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-400/20 pb-1">
                            <span>Saturday</span>
                            <span>10:00 - 17:00</span>
                        </div>
                        <div class="flex justify-between pb-1">
                            <span>Sunday</span>
                            <span class="text-[#3E1A1A] font-bold">Closed</span>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <h3 class="text-lg font-normal text-[#1a1a1a] serif-font mb-4">Follow Us</h3>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-700 shadow-sm hover:bg-[#F4C430] hover:text-black transition-all">📷</a>
                        <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-700 shadow-sm hover:bg-[#F4C430] hover:text-black transition-all">📘</a>
                        <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-700 shadow-sm hover:bg-[#F4C430] hover:text-black transition-all">🐦</a>
                    </div>
                </div>

            </div>

            <div>
                <h2 class="text-2xl font-normal text-[#1a1a1a] serif-font border-b border-[#3E1A1A]/10 pb-4 mb-8">
                    Send Message
                </h2>

                <form action="#" class="space-y-6">
                    <div class="space-y-2">
                        <label for="name" class="text-xs font-bold text-[#1a1a1a] uppercase tracking-wide">Name</label>
                        <input type="text" id="name" placeholder="Your Name" 
                            class="w-full bg-white border-none rounded-lg p-4 text-sm shadow-sm focus:ring-2 focus:ring-[#F4C430] outline-none text-gray-700">
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="text-xs font-bold text-[#1a1a1a] uppercase tracking-wide">Email</label>
                        <input type="email" id="email" placeholder="Your Email Address" 
                            class="w-full bg-white border-none rounded-lg p-4 text-sm shadow-sm focus:ring-2 focus:ring-[#F4C430] outline-none text-gray-700">
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="text-xs font-bold text-[#1a1a1a] uppercase tracking-wide">Message</label>
                        <textarea id="message" rows="5" placeholder="Write your message here..." 
                            class="w-full bg-white border-none rounded-lg p-4 text-sm shadow-sm focus:ring-2 focus:ring-[#F4C430] outline-none text-gray-700"></textarea>
                    </div>

                    <button type="button" class="w-full bg-[#1a1a1a] text-white font-bold py-4 rounded-lg shadow-lg hover:bg-[#F4C430] hover:text-black hover:shadow-xl transition-all duration-300 uppercase text-xs tracking-widest">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection