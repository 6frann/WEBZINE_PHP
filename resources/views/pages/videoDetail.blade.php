<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de la vidéo - Boulunpeu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#111111',
                        secondary: '#0a84ff',
                        accent: '#ff0033',
                        'text-dark': '#333333',
                    },
                    fontFamily: {
                        'display': ['Bebas Neue', 'sans-serif'],
                        'body': ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .search-container {
            transition: all 0.3s ease;
        }
        .search-container.expanded {
            width: 300px;
        }
        .search-container.collapsed {
            width: 40px;
        }
        .search-input {
            transition: all 0.3s ease;
            opacity: 0;
            width: 0;
        }
        .search-container.expanded .search-input {
            opacity: 1;
            width: 100%;
        }
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        .mobile-menu.open {
            transform: translateX(0);
        }
        @media (max-width: 1024px) {
            .desktop-nav {
                display: none;
            }
            .mobile-menu-button {
                display: block;
            }
        }
        @media (min-width: 1025px) {
            .mobile-menu-button {
                display: none;
            }
            .mobile-menu {
                display: none;
            }
        }
        body {
            font-family: 'Outfit', sans-serif;
            font-weight: 400;
            letter-spacing: -0.01em;
        }
        h1, .h1 {
            font-family: 'Bebas Neue', sans-serif;
            letter-spacing: 0.02em;
            font-size: 4rem;
            line-height: 1;
        }
        h2, .h2 {
            font-family: 'Bebas Neue', sans-serif;
            letter-spacing: 0.01em;
            line-height: 1.1;
        }
        h3, .h3 {
            font-family: 'Bebas Neue', sans-serif;
            letter-spacing: 0.02em;
            line-height: 1.2;
        }
        .nav-link {
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-body leading-relaxed">
    <header class="sticky top-0 z-50 bg-primary text-white shadow-md">
        <div class="py-2 bg-black">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center">
                    <a href="index.html" class="text-2xl font-bold tracking-tighter uppercase">
                        <img src="{{ asset('images/logo.PNG') }}" alt="logo" class="h-20 w-auto">
                    </a>
                    
                    <!-- Navigation desktop -->
                    <nav class="desktop-nav mt-4 flex-1">
                        <ul class="flex min-w-max py-1 justify-center">
                            <li class="px-4 first:pl-0">
                                <a href="index.html" class="nav-link text-base py-2 hover:text-accent relative group">
                                    Accueil
                                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                                </a>
                            </li>
                            <li class="px-4">
                                <a href="actualites.html" class="nav-link text-base py-2 hover:text-accent relative group">
                                    Actualités
                                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                                </a>
                            </li>
                            <li class="px-4">
                                <a href="videos.html" class="nav-link text-base py-2 hover:text-accent relative group">
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

                    <!-- Bouton menu mobile -->
                    <button class="mobile-menu-button p-2 text-white hover:text-accent" onclick="toggleMobileMenu()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu mobile -->
    <div class="mobile-menu fixed top-0 right-0 w-64 h-full bg-primary text-white z-50 p-6 overflow-y-auto">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-xl font-bold">Menu</h2>
            <button class="text-white hover:text-accent" onclick="toggleMobileMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Navigation mobile -->
        <nav class="mb-8">
            <ul class="space-y-4">
                <li>
                    <a href="index.html" class="block py-2 uppercase text-sm font-medium tracking-wide hover:text-accent">
                        Accueil
                    </a>
                </li>
                <li>
                    <a href="actualites.html" class="block py-2 uppercase text-sm font-medium tracking-wide hover:text-accent">
                        Actualités
                    </a>
                </li>
                <li>
                    <a href="videos.html" class="block py-2 uppercase text-sm font-medium tracking-wide hover:text-accent">
                        Vidéos
                    </a>
                </li>
                <li>
                    <a href="contact.html" class="block py-2 uppercase text-sm font-medium tracking-wide hover:text-accent">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Overlay pour le menu mobile -->
    <div class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden" id="mobile-menu-overlay"></div>

    <main class="py-8">
        <div class="container mx-auto px-4">
            <!-- Video Content -->
            <article class="max-w-4xl mx-auto">
                <header class="mb-8">
                    <span class="article-tag text-sm px-4 py-1.5 bg-accent text-white rounded-full mb-4 inline-block transform hover:scale-105 transition-transform">clip Officiel</span>
                    <h1 class="text-4xl font-bold text-primary mb-4">Nekfeu - "Les Étoiles Vagabondes" (Clip Officiel)</h1>
                    <div class="flex items-center text-gray-600 mb-6">
                        <span class="mr-4">15 mars 2024</span>
                        <span class="mr-4">Par Jean Dupont</span>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">#Clips</span>
                        <span class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">#Nekfeu</span>
                        <span class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">#RapFrançais</span>
                        <span class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">#Musique</span>
                    </div>
                    <div class="relative aspect-video rounded-lg overflow-hidden mb-8">
                        <img src="article/images/nekfeu-clip.jpg" alt="Nekfeu - Les Étoiles Vagabondes" class="w-full h-full object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button class="w-20 h-20 bg-accent/80 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </header>

                <div class="prose prose-lg max-w-none">
                    <p class="lead text-xl text-gray-700 mb-6">
                        Découvrez le nouveau clip de Nekfeu, "Les Étoiles Vagabondes", extrait de son dernier album. Une réalisation visuelle époustouflante qui accompagne parfaitement les paroles du rappeur.
                    </p>

                    <h2 class="text-2xl font-bold text-primary mt-8 mb-4">Une réalisation soignée</h2>
                    <p>
                        Le clip, réalisé par le collectif [Nom du collectif], nous plonge dans un univers onirique où Nekfeu explore les thèmes de la liberté et du voyage. Les images, tournées en partie à [Lieu], offrent une esthétique unique qui correspond parfaitement à l'ambiance de la chanson.
                    </p>

                    <h2 class="text-2xl font-bold text-primary mt-8 mb-4">Les coulisses du tournage</h2>
                    <p>
                        Dans une interview exclusive, Nekfeu nous raconte les coulisses du tournage et les défis techniques qu'ils ont dû relever pour réaliser ce clip ambitieux. Une production qui a nécessité plusieurs semaines de travail et une équipe importante.
                    </p>

                    <blockquote class="border-l-4 border-accent pl-4 italic my-6">
                        "Ce clip représente un tournant dans ma carrière visuelle. J'ai voulu créer quelque chose de différent, qui sorte des codes habituels du rap français."
                    </blockquote>
                </div>

                <div class="mt-12 border-t border-gray-200 pt-8">
                    <h3 class="text-xl font-bold text-primary mb-4">Partager cette vidéo</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-accent">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-accent">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-accent">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Related Videos -->
            <section class="mt-16">
                <h2 class="text-2xl font-bold text-primary mb-8">Vidéos similaires</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 transition-transform duration-300">
                        <div class="relative h-[200px] overflow-hidden">
                            <img src="/api/placeholder/300/200" alt="Vidéo similaire 1" class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-12 h-12 bg-accent/80 rounded-full flex items-center justify-center text-white">▶</div>
                            </div>
                        </div>
                        <div class="p-4">
                            <span class="text-accent text-xs font-medium uppercase">Clips</span>
                            <h3 class="text-text-dark font-semibold text-base mt-2 mb-3">SCH - "Nouveau Monde" (Clip Officiel)</h3>
                            <div class="flex justify-between text-gray-500 text-xs">
                                <span>12 mars 2024</span>
                                <span>2.1M vues</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 transition-transform duration-300">
                        <div class="relative h-[200px] overflow-hidden">
                            <img src="/api/placeholder/300/200" alt="Vidéo similaire 2" class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-12 h-12 bg-accent/80 rounded-full flex items-center justify-center text-white">▶</div>
                            </div>
                        </div>
                        <div class="p-4">
                            <span class="text-accent text-xs font-medium uppercase">Clips</span>
                            <h3 class="text-text-dark font-semibold text-base mt-2 mb-3">Laylow - "Performance live au Zenith"</h3>
                            <div class="flex justify-between text-gray-500 text-xs">
                                <span>10 mars 2024</span>
                                <span>1.8M vues</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 transition-transform duration-300">
                        <div class="relative h-[200px] overflow-hidden">
                            <img src="/api/placeholder/300/200" alt="Vidéo similaire 3" class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-12 h-12 bg-accent/80 rounded-full flex items-center justify-center text-white">▶</div>
                            </div>
                        </div>
                        <div class="p-4">
                            <span class="text-accent text-xs font-medium uppercase">Clips</span>
                            <h3 class="text-text-dark font-semibold text-base mt-2 mb-3">Booba - "Backstage de son dernier concert"</h3>
                            <div class="flex justify-between text-gray-500 text-xs">
                                <span>8 mars 2024</span>
                                <span>1.5M vues</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer class="bg-primary text-white py-8 mt-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center text-center">
                <img src="{{ asset('images/logo.PNG') }}" alt="logo" class="h-32 w-auto mb-4">
                <p class="text-gray-400 mb-6 max-w-md">Toute l'actualité du rap français et international.</p>
                <div class="flex space-x-4 mb-6">
                    <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3.35 15.6a6.34 6.34 0 0 0 10.63 4.65c.046-.04.091-.082.135-.126V15.6v-9h2.02a4.82 4.82 0 0 0 3.45 3.45v-3.37z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
                <div class="border-t border-gray-800 w-full pt-6 text-gray-400">
                    <p>&copy; 2025 Boulunpeu. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = document.getElementById('mobile-menu-overlay');
            mobileMenu.classList.toggle('open');
            overlay.classList.toggle('hidden');
        }

        // Fermer le menu mobile en cliquant sur l'overlay
        document.getElementById('mobile-menu-overlay').addEventListener('click', toggleMobileMenu);
    </script>
</body>
</html> 