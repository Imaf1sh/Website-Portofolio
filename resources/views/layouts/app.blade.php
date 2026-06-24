<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Portofolio Profesional Oktaviandra Wahyuramadhan - Full-Stack Developer Bintan Timur, Kepulauan Riau.">
    <meta name="author" content="Oktaviandra Wahyuramadhan">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Oktaviandra Wahyuramadhan - Full-Stack Developer</title>

    <!-- Google Fonts: Outfit & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome CDN for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    <!-- Glowing Background blobs -->
    <div class="glow-blob blob-1"></div>
    <div class="glow-blob blob-2"></div>

    <!-- Navigation Header -->
    <header class="main-header" id="navbar">
        <div class="container nav-container">
            <a href="#home" class="logo" id="logo-link">
                <span>Okta</span><span class="navy-dot">.</span>
            </a>
            
            <nav class="nav-menu" id="nav-menu-container">
                <a href="#home" class="nav-link active" id="nav-home">Home</a>
                <a href="#about" class="nav-link" id="nav-about">About</a>
                <a href="#projects" class="nav-link" id="nav-projects">Projects</a>
                <a href="#experience" class="nav-link" id="nav-experience">Experience</a>
                <a href="#contact" class="nav-link" id="nav-contact">Contact</a>
            </nav>

            <button class="menu-toggle" id="menu-toggle-btn" aria-label="Toggle Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container footer-container">
            <p class="copyright">&copy; {{ date('Y') }} Oktaviandra. All rights reserved.</p>
            <div class="social-links">
                <a href="https://github.com/Imaf1sh" target="_blank" aria-label="GitHub" id="footer-github-link"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/oktaviandra-wahyu-ramadhan-001a682a7/" target="_blank" aria-label="LinkedIn" id="footer-linkedin-link"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://wa.me/6283148796357" target="_blank" aria-label="WhatsApp" id="footer-whatsapp-link"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="mailto:oktaviandrawahyuramadhan@gmail.com" aria-label="Email" id="footer-email-link"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </footer>

    <!-- Custom JS -->
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
