@extends('layouts.app')

@section('content')

<section class="container mx-auto px-6 md:px-12 py-10 pt-36 md:pt-40 min-h-screen flex items-center">
    <div class="flex flex-col md:flex-row items-center gap-12 w-full">
        <div class="md:w-1/2 space-y-6 text-center md:text-left">
            <h1 class="text-5xl md:text-7xl text-black leading-[1.1]">
                <span class="text-[#F4C430] italic serif-font drop-shadow-sm">Elegance</span> in <br>
                <span class="serif-font font-bold italic">Every Scent</span>
            </h1>
            <p class="text-gray-700 leading-relaxed text-base md:text-lg max-w-lg mx-auto md:mx-0">
                MyPer delivers high-quality fragrances with a touch of elegance. 
                Crafted to express character and confidence for those who appreciate sophistication.
            </p>
            <div class="flex gap-4 pt-4 justify-center md:justify-start">
                <a href="#collection" class="bg-[#F4C430] text-black px-8 py-3 rounded-lg shadow-lg hover:bg-yellow-400 hover:shadow-xl transition-all transform hover:-translate-y-1 text-sm font-bold tracking-wide">
                    Explore Collection
                </a>
                
                <a href="#about-us" class="bg-[#3E1A1A] text-white px-8 py-3 rounded-lg shadow-lg hover:bg-black hover:shadow-xl transition-all transform hover:-translate-y-1 text-sm font-medium">
                    Learn More
                </a>
            </div>
        </div>

        <div class="md:w-1/2 relative w-full">
            <div class="absolute inset-0 bg-[#F4C430] rounded-2xl rotate-3 opacity-20 transform translate-x-4 translate-y-4"></div>
            <img src="https://placehold.co/600x400/222/gold?text=MyPer+Picture" alt="Elegant Perfume" class="relative rounded-2xl shadow-2xl w-full object-cover h-[400px] border-4 border-white/50">
        </div>
    </div>
</section>

<section id="about-us" class="bg-white py-24 scroll-mt-20 rounded-t-[3rem] shadow-[0_-10px_40px_rgba(0,0,0,0.05)]">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-4 serif-font">The Essence of MyPer</h2>
        <div class="w-24 h-1 bg-[#F4C430] mx-auto mb-6 rounded-full"></div>
        <p class="text-gray-500 max-w-2xl mx-auto mb-16 text-base leading-relaxed">
            A quick glimpse into our dedication for quality and sustainability.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="group p-6 rounded-2xl hover:bg-gray-50 transition duration-300">
                <div class="bg-[#EFE5D9] w-20 h-20 flex items-center justify-center rounded-full mb-6 mx-auto text-3xl shadow-sm group-hover:scale-110 transition duration-300">🎖️</div>
                <h3 class="font-bold text-xl text-gray-800 mb-3 serif-font">Premium Quality</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Only the finest ingredients sourced from around the world.</p>
            </div>
            <div class="group p-6 rounded-2xl hover:bg-gray-50 transition duration-300">
                <div class="bg-[#EFE5D9] w-20 h-20 flex items-center justify-center rounded-full mb-6 mx-auto text-3xl shadow-sm group-hover:scale-110 transition duration-300">⚗️</div>
                <h3 class="font-bold text-xl text-gray-800 mb-3 serif-font">Artisan Crafted</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Each fragrance is carefully crafted by master perfumers.</p>
            </div>
            <div class="group p-6 rounded-2xl hover:bg-gray-50 transition duration-300">
                <div class="bg-[#EFE5D9] w-20 h-20 flex items-center justify-center rounded-full mb-6 mx-auto text-3xl shadow-sm group-hover:scale-110 transition duration-300">🌿</div>
                <h3 class="font-bold text-xl text-gray-800 mb-3 serif-font">Sustainable</h3>
                <p class="text-sm text-gray-500 leading-relaxed">We are committed to sustainable practices and ethical sourcing.</p>
            </div>
        </div>

        <div class="mt-16">
             <a href="{{ route('about') }}" class="inline-flex items-center text-[#3E1A1A] font-bold border-b-2 border-[#3E1A1A] hover:text-[#F4C430] hover:border-[#F4C430] transition-all pb-1">
                Read Our Full Story <span class="ml-2">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<section id="collection" class="bg-[#DCC8B3] py-24 scroll-mt-20">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl text-[#3E1A1A] font-bold mb-3 serif-font">Our Collection</h2>
            <p class="text-[#3E1A1A]/70">Discover our signature fragrances, each telling a unique story.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-5 rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-white/20">
                <div class="bg-[#2a2a2a] h-64 w-full flex items-center justify-center text-gray-400 text-sm mb-6 rounded-lg overflow-hidden relative group">
                    <span class="group-hover:opacity-0 transition">Image: Midnight Noir</span>
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white font-serif italic">View Product</span>
                    </div>
                </div>
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-xl text-gray-800 serif-font">Midnight Noir</h3>
                    <span class="font-bold text-[#3E1A1A] bg-[#EFE5D9] px-2 py-1 rounded text-sm">$180</span>
                </div>
                <p class="text-sm text-gray-500 mb-6 line-clamp-2">
                    A mysterious and sophisticated fragrance with notes of bergamot, jasmine, and sandalwood.
                </p>
                <button class="w-full bg-[#3E1A1A] text-white text-sm font-medium px-4 py-3 rounded-lg hover:bg-[#F4C430] hover:text-black transition-colors duration-300">
                    Add to Cart
                </button>
            </div>

            <div class="bg-white p-5 rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-white/20">
                <div class="bg-[#5A5A5A] h-64 w-full flex items-center justify-center text-gray-400 text-sm mb-6 rounded-lg overflow-hidden relative group">
                    <span class="group-hover:opacity-0 transition">Image: Golden Dawn</span>
                     <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white font-serif italic">View Product</span>
                    </div>
                </div>
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-xl text-gray-800 serif-font">Golden Dawn</h3>
                    <span class="font-bold text-[#3E1A1A] bg-[#EFE5D9] px-2 py-1 rounded text-sm">$220</span>
                </div>
                <p class="text-sm text-gray-500 mb-6 line-clamp-2">
                    A warm and radiant scent featuring vanilla, amber, and citrus top notes.
                </p>
                <button class="w-full bg-[#3E1A1A] text-white text-sm font-medium px-4 py-3 rounded-lg hover:bg-[#F4C430] hover:text-black transition-colors duration-300">
                    Add to Cart
                </button>
            </div>

            <div class="bg-white p-5 rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-white/20">
                <div class="bg-[#4A4A4A] h-64 w-full flex items-center justify-center text-gray-400 text-sm mb-6 rounded-lg overflow-hidden relative group">
                    <span class="group-hover:opacity-0 transition">Image: Royal Essence</span>
                     <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white font-serif italic">View Product</span>
                    </div>
                </div>
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-xl text-gray-800 serif-font">Royal Essence</h3>
                    <span class="font-bold text-[#3E1A1A] bg-[#EFE5D9] px-2 py-1 rounded text-sm">$350</span>
                </div>
                <p class="text-sm text-gray-500 mb-6 line-clamp-2">
                    An opulent blend of rose, oud, and precious woods for the discerning connoisseur.
                </p>
                <button class="w-full bg-[#3E1A1A] text-white text-sm font-medium px-4 py-3 rounded-lg hover:bg-[#F4C430] hover:text-black transition-colors duration-300">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
</section>

@endsection