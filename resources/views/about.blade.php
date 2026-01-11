@extends('layouts.app')

@section('content')

<div class="container mx-auto px-6 md:px-12 py-10 pt-40 min-h-screen flex items-center justify-center">
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center w-full max-w-6xl">
        
        <div class="relative group">
            <div class="absolute -inset-2 bg-[#F4C430] rounded-2xl opacity-20 blur-lg group-hover:opacity-30 transition duration-500"></div>
            
            <img src="https://placehold.co/600x450/222/gold?text=MyPer+Premium" 
                 alt="MyPer Bottle" 
                 class="relative w-full rounded-2xl shadow-2xl border border-white/20 object-cover h-[450px] transform transition duration-500 hover:scale-[1.01]">
        </div>

        <div class="space-y-8 pl-0 md:pl-10">
            <div>
                <span class="text-sm font-bold tracking-widest text-gray-500 uppercase mb-2 block">About Us</span>
                <h1 class="text-4xl md:text-5xl font-bold text-[#3E1A1A] serif-font leading-tight mb-6">
                    Crafting Timeless <br> Fragrances with Elegance
                </h1>
                
                <p class="text-gray-700 leading-relaxed mb-4 text-base">
                    MyPer is a fragrance brand dedicated to creating refined scents that reflect elegance and individuality. Each creation is carefully crafted through a thoughtful blend of quality ingredients and artistic composition to deliver a lasting impression.
                </p>
                
                <p class="text-gray-700 leading-relaxed text-base">
                    Every MyPer fragrance tells a unique story, designed to express character and confidence. We believe that scent is a powerful form of self-expression, capable of evoking emotions and leaving a memorable presence wherever you go.
                </p>
            </div>

            <div class="grid grid-cols-3 gap-6 pt-6 border-t border-[#3E1A1A]/10">
                <div class="text-center md:text-left">
                    <h3 class="text-3xl font-bold text-[#3E1A1A] serif-font">5+</h3>
                    <p class="text-xs text-gray-600 mt-1 uppercase tracking-wide">Years of Craftsmanship</p>
                </div>
                <div class="text-center md:text-left">
                    <h3 class="text-3xl font-bold text-[#3E1A1A] serif-font">30+</h3>
                    <p class="text-xs text-gray-600 mt-1 uppercase tracking-wide">Signature Fragrances</p>
                </div>
                <div class="text-center md:text-left">
                    <h3 class="text-3xl font-bold text-[#3E1A1A] serif-font">10+</h3>
                    <p class="text-xs text-gray-600 mt-1 uppercase tracking-wide">Trusted Partners</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection