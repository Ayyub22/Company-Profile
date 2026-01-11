@extends('layouts.app')

@section('content')

<div class="bg-[#EADBC8] pt-32 pb-10">
    <div class="container mx-auto px-6 md:px-12">
        <div class="flex flex-col md:flex-row items-center gap-10 border-b border-[#3E1A1A]/20 pb-16">
            
            <div class="md:w-1/2 text-center md:text-left space-y-4">
                <h1 class="text-5xl md:text-6xl font-bold text-[#1a1a1a] serif-font italic mb-2">MyPer</h1>
                <p class="text-gray-700 text-sm md:text-base leading-relaxed max-w-lg mx-auto md:mx-0">
                    MyPer is the art of timeless fragrance. <br>
                    Carefully composed to evoke emotion and memory, each scent reflects elegance, confidence, and quiet luxury.
                </p>
            </div>

            <div class="md:w-1/2 w-full">
                <img src="https://placehold.co/800x400/222/gold?text=Premium+Collection+Bottles" 
                     alt="MyPer Collection" 
                     class="rounded-lg shadow-xl w-full object-cover h-[300px] border border-white/30">
            </div>
        </div>
    </div>
</div>

<div class="bg-[#EADBC8] pt-10 pb-6 text-center">
    <h2 class="text-4xl font-normal text-[#3E1A1A] serif-font mb-2">Signature Fragrances</h2>
    <p class="text-gray-600 text-xs md:text-sm max-w-2xl mx-auto px-4">
        Explore our curated selection of luxury fragrances, each designed to complement your unique style and personality.
    </p>
</div>

<div class="bg-[#EADBC8] pb-24 px-6 md:px-12">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            @php
                // Data Dummy untuk simulasi produk sesuai gambar
                $products = [
                    ['name' => 'Midnight Noir', 'price' => '180', 'rating' => '4.9', 'desc' => 'Fresh bergamot with jasmine and sandalwood', 'color' => 'bg-gray-700'],
                    ['name' => 'Golden Dawn', 'price' => '220', 'rating' => '4.8', 'desc' => 'Sweet vanilla with amber and citrus top notes', 'color' => 'bg-gray-600'],
                    ['name' => 'Royal Essence', 'price' => '350', 'rating' => '5.0', 'desc' => 'Rose with oud and precious woods for the connoisseur', 'color' => 'bg-gray-700'],
                    ['name' => 'Citrus Bliss', 'price' => '135', 'rating' => '4.7', 'desc' => 'Fresh bergamot with green tea and cedar', 'color' => 'bg-gray-600'],
                    ['name' => 'Amber Nights', 'price' => '198', 'rating' => '4.9', 'desc' => 'Warm amber with spicy cardamom notes', 'color' => 'bg-gray-700'],
                    ['name' => 'White Lily', 'price' => '155', 'rating' => '4.6', 'desc' => 'Pure lily with soft powdery undertones', 'color' => 'bg-gray-600'],
                    ['name' => 'Golden Era', 'price' => '325', 'rating' => '5.0', 'desc' => 'Exclusive blend with gold flakes and iris', 'color' => 'bg-gray-700'],
                    ['name' => 'Ocean Breeze', 'price' => '145', 'rating' => '4.8', 'desc' => 'Aquatic freshness with sea salt and driftwood', 'color' => 'bg-gray-600'],
                ];
            @endphp

            @foreach($products as $product)
            <div class="bg-white rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col group border border-[#3E1A1A]/5">
                
                <div class="{{ $product['color'] }} h-64 w-full flex items-center justify-center text-gray-300 text-xs relative">
                    <span>{{ $product['name'] }}</span>
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                </div>

                <div class="p-4 flex flex-col flex-grow">
                    <div class="flex items-center gap-1 mb-2">
                        <span class="text-xs">★</span>
                        <span class="text-xs font-bold">{{ $product['rating'] }}</span>
                    </div>

                    <h3 class="font-bold text-lg text-gray-900 mb-1">{{ $product['name'] }}</h3>

                    <p class="text-[10px] text-gray-500 mb-4 leading-tight flex-grow">
                        {{ $product['desc'] }}
                    </p>

                    <div class="flex justify-between items-center mt-auto border-t border-gray-100 pt-3">
                        <span class="font-bold text-gray-800 text-lg">${{ $product['price'] }}</span>
                        <button class="bg-[#3E1A1A] text-white text-[10px] uppercase tracking-wide px-4 py-2 rounded hover:bg-[#F4C430] hover:text-black transition-colors">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection