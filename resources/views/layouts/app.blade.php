<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPer - Elegance in Every Scent</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Lato', sans-serif; }
        h1, h2, h3, .serif-font { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#EADBC8] text-gray-800 antialiased flex flex-col min-h-screen">

    <div class="fixed top-0 left-0 w-full z-50 flex justify-center pt-6 pb-2 transition-all duration-300 pointer-events-none">
        <nav class="pointer-events-auto bg-[#EFE5D9]/90 backdrop-blur-md px-8 py-3 rounded-full shadow-xl flex items-center space-x-8 text-gray-700 text-sm font-medium w-11/12 md:w-3/4 justify-between border border-white/40 ring-1 ring-black/5">
            
            <a href="{{ route('home') }}" class="text-[#F4C430] font-bold text-xl serif-font italic tracking-wide">MyPer</a>
            
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="hover:text-[#F4C430] flex items-center gap-1 transition-colors duration-200"><span>🏠</span> Home</a>
                
                <a href="{{ route('about') }}" class="hover:text-[#F4C430] flex items-center gap-1 transition-colors duration-200"><span>👥</span> About Us</a>
                
                <a href="{{ route('products') }}" class="hover:text-[#F4C430] flex items-center gap-1 transition-colors duration-200"><span>🛍️</span> Products</a>
                
                <a href="{{ route('ingredients') }}" class="hover:text-[#F4C430] flex items-center gap-1 transition-colors duration-200"><span>🍃</span> Ingredients</a>
            </div>

            <a href="{{ route('contact') }}" class="hover:text-[#F4C430] flex items-center gap-1 transition-colors duration-200 font-semibold"><span>📞</span> Contact</a>
        </nav>
    </div>

    <div id="app" class="flex-grow">
        @yield('content')
    </div>

    <footer class="bg-[#EADBC8] text-[#3E1A1A] py-8 border-t border-[#3E1A1A]/20 mt-auto">
        <div class="container mx-auto px-6 text-center">
            <p class="text-xs font-semibold tracking-widest">© 2026 MyPer. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>