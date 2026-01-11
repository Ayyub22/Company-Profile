@extends('layouts.app')

@section('content')

<div class="bg-[#EADBC8] min-h-screen pt-32 pb-20">
    
    <div class="container mx-auto px-6 md:px-12">
        
        <div class="text-center mb-16 space-y-4">
            <h1 class="text-4xl md:text-5xl font-normal text-[#1a1a1a] serif-font">Premium Ingredients</h1>
            <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
                We source the finest natural ingredients from around the globe to create our exceptional fragrances.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            
            <div class="space-y-10">
                
                <div class="flex gap-5 group">
                    <div class="flex-shrink-0 w-12 h-12 bg-[#2a2a2a] rounded text-white flex items-center justify-center text-xl shadow-lg group-hover:bg-[#F4C430] group-hover:text-black transition-colors duration-300">
                        🌹
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] serif-font mb-2">Bulgarian Rose</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Hand-picked at dawn from the Valley of Roses, known for its exceptional quality and intoxicating aroma.
                        </p>
                    </div>
                </div>

                <div class="flex gap-5 group">
                    <div class="flex-shrink-0 w-12 h-12 bg-[#2a2a2a] rounded text-white flex items-center justify-center text-xl shadow-lg group-hover:bg-[#F4C430] group-hover:text-black transition-colors duration-300">
                        🌲
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] serif-font mb-2">Sandalwood</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Sourced from sustainable forests in India, providing a warm, creamy base note that lasts for hours.
                        </p>
                    </div>
                </div>

                <div class="flex gap-5 group">
                    <div class="flex-shrink-0 w-12 h-12 bg-[#2a2a2a] rounded text-white flex items-center justify-center text-xl shadow-lg group-hover:bg-[#F4C430] group-hover:text-black transition-colors duration-300">
                        💎
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] serif-font mb-2">Rare Oud</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Precious agarwood from Southeast Asia, aged to perfection for an unparalleled depth of character.
                        </p>
                    </div>
                </div>

                <div class="flex gap-5 group">
                    <div class="flex-shrink-0 w-12 h-12 bg-[#2a2a2a] rounded text-white flex items-center justify-center text-xl shadow-lg group-hover:bg-[#F4C430] group-hover:text-black transition-colors duration-300">
                        ✨
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] serif-font mb-2">Vanilla Beans</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Premium vanilla beans offering a warm, creamy sweetness that adds smooth depth and refined elegance to the fragrance.
                        </p>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-2 gap-4">
                
                <div class="relative h-48 w-full rounded-lg overflow-hidden group shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="{{ asset('https://i.pinimg.com/1200x/e1/3e/b7/e13eb74370a5be32385ad1d51db8ff1b.jpg') }}" alt="Rose Petals" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition duration-500"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold tracking-wide drop-shadow-md">Rose Petals</span>
                </div>

                <div class="relative h-48 w-full rounded-lg overflow-hidden group shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="{{ asset('https://i.pinimg.com/1200x/35/d1/25/35d125ed20ea811b1bfbf03d185e83fc.jpg') }}" alt="Sandalwood" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition duration-500"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold tracking-wide drop-shadow-md">Sandalwood</span>
                </div>

                <div class="relative h-48 w-full rounded-lg overflow-hidden group shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="{{ asset('https://i.pinimg.com/1200x/1b/2c/1d/1b2c1d3c03390a3966375c5c36b2774b.jpg') }}" alt="Oud Wood" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition duration-500"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold tracking-wide drop-shadow-md">Oud Wood</span>
                </div>

                <div class="relative h-48 w-full rounded-lg overflow-hidden group shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="{{ asset('https://i.pinimg.com/736x/c3/0d/ac/c30dac4b9f5c2474ce6a9a0ff9e3e7f8.jpg') }}" alt="Vanilla Beans" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition duration-500"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold tracking-wide drop-shadow-md">Vanilla Beans</span>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection