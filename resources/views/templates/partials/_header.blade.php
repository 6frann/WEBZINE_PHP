<header class="sticky top-0 z-50 bg-primary text-white shadow-md">
    <div class="py-2 bg-black">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <a href="index.html" class="text-3xl font-display tracking-wider uppercase">
                    <img src="https://i.ibb.co/VWpJYmpF/3-A616-A23-26-BA-4-E6-B-B32-D-D79-D6-B66-D7-EC.png" alt="logo" class="h-20 w-auto">
                </a>
                <nav class="desktop-nav mt-4 flex-1">
                    <ul class="flex min-w-max py-1 justify-center">
                        <li class="px-4 first:pl-0">
                            <a href="{{route('pages.home')}}" class="nav-link text-base py-2 hover:text-accent relative group">
                                Accueil
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                            </a>
                        </li>
                        <li class="px-4">
                            <a href="{{route('pages.actuality')}}" class="nav-link text-base py-2 hover:text-accent relative group">
                                Actualités
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                            </a>
                        </li>
                        <li class="px-4">
                            <a href="{{route('pages.videos')}}" class="nav-link text-base py-2 hover:text-accent relative group">
                                Vidéos
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                            </a>
                        </li>
                        <li class="px-4">
                            <a href="contact.html" class="nav-link text-base py-2 hover:text-accent relative group">
                                Contact
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Barre de recherche -->
                <!-- <div class="search-container collapsed relative h-10 rounded overflow-hidden">
                    <input type="text" 
                           placeholder="Rechercher..." 
                           class="search-input absolute w-full h-full py-2 px-4 bg-white/10 text-white placeholder-white/60 focus:outline-none">
                    <button class="absolute right-3 top-1/2 -translate-y-1/2 text-white w-6 h-6 flex items-center justify-center hover:text-accent transition-colors" onclick="toggleSearch()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div> -->
                <button class="hamburger p-2 focus:outline-none" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>