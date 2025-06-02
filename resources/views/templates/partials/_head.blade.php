<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'accueil')</title>
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
            transition: all 0.3s ease;
            transform: translateX(100%);
        }
        .mobile-menu.active {
            transform: translateX(0);
        }
        .hamburger {
            display: none;
        }
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }
            .desktop-nav {
                display: none;
            }
            .search-container {
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
        .article-tag {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .article-title {
            font-family: 'Bebas Neue', sans-serif;
            letter-spacing: 0.02em;
            line-height: 1.1;
        }
        .article-excerpt {
            font-family: 'Outfit', sans-serif;
            font-weight: 400;
            line-height: 1.6;
            letter-spacing: -0.01em;
        }
        .article-meta {
            font-family: 'Outfit', sans-serif;
            font-weight: 500;
            letter-spacing: 0.02em;
        }
        .section-title {
            font-family: 'Bebas Neue', sans-serif;
            letter-spacing: 0.04em;
            font-size: 2.5rem;
            line-height: 1;
        }
        .view-all-btn {
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            position: relative;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #111111;
            background: transparent;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }

        .view-all-btn .text {
            position: relative;
            z-index: 1;
        }

        .view-all-btn .arrow-container {
            position: relative;
            display: flex;
            align-items: center;
            height: 20px;
            width: 24px;
            z-index: 1;
        }

        .view-all-btn .arrow-line {
            position: absolute;
            left: 0;
            top: 50%;
            width: 16px;
            height: 2px;
            background-color: currentColor;
            transform: translateY(-50%);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .view-all-btn .arrow-head {
            position: absolute;
            right: 0;
            top: 50%;
            width: 8px;
            height: 8px;
            border-top: 2px solid currentColor;
            border-right: 2px solid currentColor;
            transform: translateY(-50%) rotate(45deg);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .view-all-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -10%;
            width: 120%;
            height: 100%;
            background: #ff0033;
            transform: skew(-30deg);
            transform-origin: left;
            z-index: 0;
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .view-all-btn:hover {
            color: white;
            padding-right: 1.5rem;
        }

        .view-all-btn:hover::before {
            opacity: 1;
            left: -5%;
        }

        .view-all-btn:hover .arrow-line {
            width: 24px;
            background-color: white;
        }

        .view-all-btn:hover .arrow-head {
            border-color: white;
            right: -4px;
        }
    </style>
</head>