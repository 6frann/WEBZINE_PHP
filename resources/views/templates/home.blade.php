<!DOCTYPE html>
<html lang="fr">
{{-- head --}}
@include('templates.partials._head')

<body class="bg-gray-100 text-gray-800 font-body leading-relaxed">
    {{-- header --}}
    @include('templates.partials._header')
    
    <!-- Menu mobile -->
    <div class="mobile-menu fixed top-0 right-0 w-64 h-full bg-primary text-white p-6 z-50">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-xl font-bold">Menu</h3>
            <button class="p-2 focus:outline-none" onclick="toggleMobileMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <!-- Barre de recherche mobile -->
        <div class="search-container-mobile relative h-10 rounded overflow-hidden mb-8">
            <form action="{{ route('pages.search') }}" method="GET" class="w-full h-full">
                <input type="text" 
                       name="query" 
                       placeholder="Rechercher..." 
                       class="w-full h-full py-2 px-4 bg-white/10 text-white placeholder-white/60 focus:outline-none">
                <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-white w-6 h-6 flex items-center justify-center hover:text-accent transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </div>
        
        {{-- nav --}}
        @include('templates.partials._nav')
    </div>
    
    {{-- main --}}
    @include('templates.partials._main')

    {{-- footer --}}
    @include('templates.partials._footer')
    
    <script>
        function toggleSearch() {
            const searchContainer = document.querySelector('.search-container');
            searchContainer.classList.toggle('expanded');
            searchContainer.classList.toggle('collapsed');
        }

        function toggleMobileMenu() {
            const mobileMenu = document.querySelector('.mobile-menu');
            mobileMenu.classList.toggle('active');
        }
    </script>
</body>
</html> 