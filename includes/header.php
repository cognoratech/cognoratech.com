<div id="scrollProgress" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-brand-600 to-accent z-[100] w-0 transition-all duration-200"></div>

<header id="navbar" class="fixed inset-x-0 top-0 z-50 border-b border-transparent bg-white/80 backdrop-blur-xl transition-all duration-500">
    <nav class="max-w-7xl mx-auto flex h-24 items-center justify-between px-4 sm:px-6 lg:px-8">

        <div class="flex flex-1 justify-start">
            <a href="/" class="flex items-center gap-2 group" aria-label="Home">
                <img id="navLogo" src="/assets/images/logo-nobg.png" alt="Cognora Technologies"
                    class="h-20 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
            </a>
        </div>

        <div class="hidden md:flex items-center gap-8">
            <a href="/index.php" class="nav-link">Home</a>
            <a href="/about.php" class="nav-link">About</a>
            <a href="/services.php" class="nav-link">Services</a>
            <a href="/contact.php" class="nav-link">Contact</a>
        </div>

        <div class="hidden md:flex flex-1 justify-end">
            <a href="/contact.php"
                class="inline-flex items-center gap-2 rounded-full bg-slate-900 px-6 py-2.5 text-[10px] font-bold uppercase tracking-[0.2em] text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-slate-800">
                Get a quote
                <span class="inline-flex h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
            </a>
        </div>

        <button id="menuBtn"
            class="md:hidden flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-800 shadow-sm focus:outline-none relative z-[60]"
            aria-label="Toggle menu">
            <svg id="iconHamburger" class="w-6 h-6 absolute transition-all duration-300 opacity-100 rotate-0"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg id="iconClose" class="w-6 h-6 absolute transition-all duration-300 opacity-0 rotate-90" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </nav>

    <div id="mobileMenu" class="fixed top-0 right-0 w-full h-screen bg-white transition-transform duration-500 ease-in-out translate-x-full md:hidden z-[55]">
        <div class="flex flex-col items-center justify-center h-full gap-8 p-4">
            <a href="/index.php" class="mobile-link text-2xl font-semibold text-slate-900">Home</a>
            <a href="/about.php" class="mobile-link text-2xl font-semibold text-slate-900">About</a>
            <a href="/services.php" class="mobile-link text-2xl font-semibold text-slate-900">Services</a>
            <a href="/contact.php" class="mobile-link text-2xl font-semibold text-slate-900">Contact</a>
        </div>
    </div>
</header>
