<header class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-8 py-4 md:py-6">
        <a href="/" class="flex items-center justify-end">
            <img src="{{ asset('images/logo.png') }}"
                 alt="BFVN Furniture Logo"
                 class="h-1 w-auto md:h-20" />
        </a>

        <nav class="hidden md:flex space-x-6 text-sm font-medium">
            @php
                $navItems = ['Home', 'About Us', 'Products', 'Service', 'Project', 'Contact Us'];
            @endphp

            @foreach ($navItems as $item)
                <a href="#"
                   class="relative group text-gray-500 hover:text-yellow-200 inline-block">
                    {{ $item }}
                    <span class="absolute left-0 bottom-0 h-0.5 bg-yellow-200 w-full transform scale-x-0 opacity-0 group-hover:scale-x-100 group-hover:opacity-100 transition-all duration-300 ease-out origin-center"></span>
                </a>
            @endforeach
        </nav>
    </div>
</header>
