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
                <div class="bg-gray-600 h-48 w-full rounded-lg flex items-center justify-center relative overflow-hidden group shadow-md hover:shadow-xl transition-all duration-300">
                    <span class="text-gray-300 text-xs font-medium tracking-wide">Rose Petals</span>
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-500"></div>
                </div>

                <div class="bg-gray-600 h-48 w-full rounded-lg flex items-center justify-center relative overflow-hidden group shadow-md hover:shadow-xl transition-all duration-300">
                    <span class="text-gray-300 text-xs font-medium tracking-wide">Sandalwood</span>
                     <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-500"></div>
                </div>

                <div class="bg-gray-600 h-48 w-full rounded-lg flex items-center justify-center relative overflow-hidden group shadow-md hover:shadow-xl transition-all duration-300">
                    <span class="text-gray-300 text-xs font-medium tracking-wide">Oud Wood</span>
                     <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-500"></div>
                </div>

                <div class="bg-gray-600 h-48 w-full rounded-lg flex items-center justify-center relative overflow-hidden group shadow-md hover:shadow-xl transition-all duration-300">
                    <span class="text-gray-300 text-xs font-medium tracking-wide">Vanilla Beans</span>
                     <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-500"></div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection